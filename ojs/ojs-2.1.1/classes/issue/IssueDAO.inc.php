<?php

/**
 * IssueDAO.inc.php
 *
 * Copyright (c) 2003-2006 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package issue
 *
 * Class for Issue DAO.
 * Operations for retrieving and modifying Issue objects.
 *
 * $Id: IssueDAO.inc.php,v 1.48 2006/06/12 23:25:51 alec Exp $
 */

import ('issue.Issue');

class IssueDAO extends DAO {
 
 	/**
	 * Constructor.
	 */
	function IssueDAO() {
		parent::DAO();
	}
	
	/**
	 * Retrieve Issue by issue id********
	 * @param $issueId int
	 * @return Issue object
	 */
	function &getIssueById($issueId, $journalId = null) {
		if (isset($journalId)) {
			$result = &$this->retrieve(
				'SELECT i.* FROM issues i WHERE issue_id = ? AND journal_id = ?',
				array($issueId, $journalId)
			);
		} else {
			$result = &$this->retrieve(
				'SELECT i.* FROM issues i WHERE issue_id = ?', $issueId
			);
		}

		$issue = null;
		if ($result->RecordCount() != 0) {
			$issue = &$this->_returnIssueFromRow($result->GetRowAssoc(false));
		}

		$result->Close();
		unset($result);

		return $issue;
	}

	/**
	 * Retrieve Issue by public issue id
	 * @param $publicIssueId string
	 * @return Issue object
	 */
	function &getIssueByPublicIssueId($publicIssueId, $journalId = null) {
		if (isset($journalId)) {
			$result = &$this->retrieve(
				'SELECT i.* FROM issues i WHERE public_issue_id = ? AND journal_id = ?',
				array($publicIssueId, $journalId)
			);
		} else {
			$result = &$this->retrieve(
				'SELECT i.* FROM issues i WHERE public_issue_id = ?', $publicIssueId
			);
		}

		$issue = null;
		if ($result->RecordCount() != 0) {
			$issue = &$this->_returnIssueFromRow($result->GetRowAssoc(false));
		}

		$result->Close();
		unset($result);

		return $issue;
	}

	/**
	 * Retrieve Issue by some combination of volume, number, and year
	 * @param $journalId int
	 * @param $volume int
	 * @param $number int
	 * @param $year int
	 * @return Iterator object
	 */
	function &getPublishedIssuesByNumber($journalId, $volume = null, $number = null, $year = null) {
		$sql = 'SELECT i.* FROM issues i WHERE i.published = 1 AND i.journal_id = ?';
		$params = array($journalId);

		if ($volume !== null) {
			$sql .= ' AND i.volume = ?';
			$params[] = $volume;
		}
		if ($number !== null) {
			$sql .= ' AND i.number = ?';
			$params[] = $number;
		}
		if ($year !== null) {
			$sql .= ' AND i.year = ?';
			$params[] = $year;
		}

		$result = &$this->retrieve($sql, $params);
		$returner = &new DAOResultFactory($result, $this, '_returnPublishedIssueFromRow');
		return $returner;
	}

	/**
	 * Retrieve Issue by "best" issue id -- public ID if it exists,
	 * falling back on the internal issue ID otherwise.
	 * @param $issueId string
	 * @return Issue object
	 */
	function &getIssueByBestIssueId($issueId, $journalId = null) {
		$issue = &$this->getIssueByPublicIssueId($issueId, $journalId);
		if (!isset($issue)) $issue = &$this->getIssueById((int) $issueId, $journalId);
		return $issue;
	}

	/**
	 * Retrieve the last created issue
	 * @param $journalId int
	 * @return Issue object
	 */
	function &getLastCreatedIssue($journalId) {
		$result = &$this->retrieveLimit(
			'SELECT i.* FROM issues i WHERE journal_id = ? ORDER BY year DESC, volume DESC, number DESC', $journalId, 1
		);

		$issue = null;
		if ($result->RecordCount() != 0) {
			$issue = &$this->_returnIssueFromRow($result->GetRowAssoc(false));
		}

		$result->Close();
		unset($result);

		return $issue;
	}

	/**
	 * Retrieve current issue
	 * @return Issue object
	 */
	function &getCurrentIssue($journalId) {
		$result = &$this->retrieve(
			'SELECT i.* FROM issues i WHERE journal_id = ? AND current = 1', $journalId
		);

		$issue = null;
		if ($result->RecordCount() != 0) {
			$issue = &$this->_returnIssueFromRow($result->GetRowAssoc(false));
		}

		$result->Close();
		unset($result);

		return $issue;
	}	

	/**
	 * update current issue
	 * @return Issue object
	 */
	function updateCurrentIssue($journalId, $issue = null) {
		$this->update(
			'UPDATE issues SET current = 0 WHERE journal_id = ? AND current = 1', $journalId
		);
		if ($issue) $this->updateIssue($issue);
	}

	
	/**
	 * creates and returns an issue object from a row
	 * @param $row array
	 * @return Issue object
	 */
	function &_returnIssueFromRow($row) {
		$issue = &new Issue();
		$issue->setIssueId($row['issue_id']);
		$issue->setJournalId($row['journal_id']);
		$issue->setTitle($row['title']);
		$issue->setVolume($row['volume']);
		$issue->setNumber($row['number']);
		$issue->setYear($row['year']);
		$issue->setPublished($row['published']);
		$issue->setCurrent($row['current']);
		$issue->setDatePublished($this->datetimeFromDB($row['date_published']));
		$issue->setDateNotified($this->datetimeFromDB($row['date_notified']));
		$issue->setAccessStatus($row['access_status']);
		$issue->setOpenAccessDate($this->datetimeFromDB($row['open_access_date']));
		$issue->setDescription($row['description']);
		$issue->setPublicIssueId($row['public_issue_id']);
		$issue->setLabelFormat($row['label_format']);
		$issue->setFileName($row['file_name']);
		$issue->setWidth($row['width']);
		$issue->setHeight($row['height']);
		$issue->setOriginalFileName($row['original_file_name']);
		$issue->setCoverPageDescription($row['cover_page_description']);
		$issue->setShowCoverPage($row['show_cover_page']);
		$issue->setStyleFileName($row['style_file_name']);
		$issue->setOriginalStyleFileName($row['original_style_file_name']);
		$issue->setNumArticles($this->getNumArticles($row['issue_id']));

		HookRegistry::call('IssueDAO::_returnIssueFromRow', array(&$issue, &$row));

		return $issue;
	}
	
	/**
	 * Returns issue object from a database row, with some extra publishing info.
	 * @param $row array
	 * @return Issue object
	 */
	function &_returnPublishedIssueFromRow(&$row) { // FIXME?
		$issue = &$this->_returnIssueFromRow($row);
		$publishedArticleDao = &DAORegistry::getDAO('PublishedArticleDAO');
		$issue->setAuthors($publishedArticleDao->getPublishedArticleAuthors($issue->getIssueId()));

		HookRegistry::call('IssueDAO::_returnPublishedIssueFromRow', array(&$issue, &$row));

		return $issue;
	}
	
	/**
	 * inserts a new issue into issues table
	 * @param Issue object
	 * @return Issue Id int
	 */
	function insertIssue(&$issue) {
		$this->update(
			sprintf('INSERT INTO issues
				(journal_id, title, volume, number, year, published, current, date_published, date_notified, access_status, open_access_date, description, public_issue_id, label_format, file_name, width, height, original_file_name, cover_page_description, show_cover_page, style_file_name, original_style_file_name)
				VALUES
				(?, ?, ?, ?, ?, ?, ?, %s, %s, ?, %s, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
				$this->datetimeToDB($issue->getDatePublished()), $this->datetimeToDB($issue->getDateNotified()), $this->datetimeToDB($issue->getOpenAccessDate())),
			array(
				$issue->getJournalId(),
				$issue->getTitle(),
				$issue->getVolume(),
				$issue->getNumber(),
				$issue->getYear(),
				$issue->getPublished(),
				$issue->getCurrent(),
				$issue->getAccessStatus(),
				$issue->getDescription(),
				$issue->getPublicIssueId(),
				$issue->getLabelFormat(),
				$issue->getFileName(),
				$issue->getWidth(),
				$issue->getHeight(),
				$issue->getOriginalFileName(),
				$issue->getCoverPageDescription(),
				$issue->getShowCoverPage(),
				$issue->getStyleFileName(),
				$issue->getOriginalStyleFileName()
			)
		);

		$issue->setIssueId($this->getInsertIssueId());
		return $issue->getIssueId();	
	}
		
	/**
	 * Get the ID of the last inserted issue.
	 * @return int
	 */
	function getInsertIssueId() {
		return $this->getInsertId('issues', 'issue_id');
	}

	/**
	 * Check if volume, number and year have already been issued
	 * @param $journalId int
	 * @param $volume int
	 * @param $number int
	 * @param $year int
	 * @return boolean
	 */
	function issueExists($journalId, $volume, $number, $year, $issueId) {
		$result = &$this->retrieve(
			'SELECT i.* FROM issues i WHERE journal_id = ? AND volume = ? AND number = ? AND year = ? AND issue_id <> ?', 
			array($journalId, $volume, $number, $year, $issueId)
		);
		$returner = $result->RecordCount() != 0 ? true : false;

		$result->Close();
		unset($result);

		return $returner;
	}

	/**
	 * updates an issue
	 * @param Issue object
	 */
	function updateIssue($issue) {
		$this->update(
			sprintf('UPDATE issues
				SET
					journal_id = ?,
					title = ?,
					volume = ?,
					number = ?,
					year = ?,
					published = ?,
					current = ?,
					date_published = %s,
					date_notified = %s,
					open_access_date = %s,
					description = ?,
					public_issue_id = ?,
					access_status = ?,
					label_format = ?,
					file_name = ?,
					width = ?,
					height = ?,
					original_file_name = ?,
					cover_page_description = ?,
					show_cover_page = ?,
					style_file_name = ?,
					original_style_file_name = ?
				WHERE issue_id = ?',
			$this->datetimeToDB($issue->getDatePublished()), $this->datetimeToDB($issue->getDateNotified()), $this->datetimeToDB($issue->getOpenAccessDate())),
			array(
				$issue->getJournalId(),
				$issue->getTitle(),
				$issue->getVolume(),
				$issue->getNumber(),
				$issue->getYear(),
				$issue->getPublished(),
				$issue->getCurrent(),
				$issue->getDescription(),
				$issue->getPublicIssueId(),
				$issue->getAccessStatus(),
				$issue->getLabelFormat(),
				$issue->getFileName(),
				$issue->getWidth(),
				$issue->getHeight(),
				$issue->getOriginalFileName(),
				$issue->getCoverPageDescription(),
				$issue->getShowCoverPage(),
				$issue->getStyleFileName(),
				$issue->getOriginalStyleFileName(),
				$issue->getIssueId()
			)
		);
	}

	/**
	 * Delete issue. Deletes associated published articles and cover file.
	 * @param $issue object issue
	 */
	function deleteIssue(&$issue) {
		import('file.PublicFileManager');
		$publicFileManager = &new PublicFileManager();
		if (($fileName = $issue->getFileName()) != '') {
			$publicFileManager->removeJournalFile($issue->getJournalId(), $fileName);
		}
		if (($fileName = $issue->getStyleFileName()) != '') {
			$publicFileManager->removeJournalFile($issue->getJournalId(), $fileName);
		}

		// Delete issue-specific ordering if it exists.
		$sectionDao = &DAORegistry::getDAO('SectionDAO');
		$sectionDao->deleteCustomSectionOrdering($issue->getIssueId());

		$publishedArticleDao = &DAORegistry::getDAO('PublishedArticleDAO');
		$publishedArticleDao->deletePublishedArticlesByIssueId($issue->getIssueId());

		$this->update(
			'DELETE FROM issues WHERE issue_id = ?', $issue->getIssueId()
		);
	}

	/**
	 * Delete issues by journal id. Does not delete dependent entities; this is intended
	 * to be called while deleting a journal, which deletes dependents.
	 * @param $journalId int
	 */
	function deleteIssuesByJournal($journalId) {
		$this->update(
			'DELETE FROM issues WHERE journal_id = ?', $journalId
		);
	}

	/**
	 * Checks if issue exists
	 * @param $publicIssueId string
	 * @return boolean
	 */
	function issueIdExists($issueId, $journalId) {
		$result = &$this->retrieve(
			'SELECT COUNT(*) FROM issues WHERE issue_id = ? AND journal_id = ?',
			array($issueId, $journalId)
		);
		return $result->fields[0] ? true : false;
	}

	/**
	 * Checks if public identifier exists
	 * @param $publicIssueId string
	 * @return boolean
	 */
	function publicIssueIdExists($publicIssueId, $issueId, $journalId) {
		$result = &$this->retrieve(
			'SELECT COUNT(*) FROM issues WHERE public_issue_id = ? AND issue_id <> ? AND journal_id = ?', array($publicIssueId, $issueId, $journalId)
		);
		$returner = $result->fields[0] ? true : false;

		$result->Close();
		unset($result);

		return $returner;
	}

	/**
	 * Get issue by article id
	 * @param articleId int
	 * @return issue object
	 */
	function &getIssueByArticleId($articleId) {
		$sql = 'SELECT i.* FROM issues i LEFT JOIN published_articles a ON (i.issue_id = a.issue_id) WHERE article_id = ?';
		$result = &$this->retrieve($sql, $articleId);	

		$issue = null;
		if ($result->RecordCount() != 0) {
			$publishedArticleDao = &DAORegistry::getDAO('PublishedArticleDAO');
			$issue = &$this->_returnIssueFromRow($result->GetRowAssoc(false));
			$issue->setAuthors($publishedArticleDao->getPublishedArticleAuthors($issue->getIssueId()));
		}

		$result->Close();
		unset($result);

		return $issue;
	}

	/**
	 * Get all issues organized by published date********
	 * @param $journalId int
	 * @param $rangeInfo object DBResultRange (optional)
	 * @return issues object ItemIterator
	 */
	function &getIssues($journalId, $rangeInfo = null) {
		$issues = array();

		$sql = 'SELECT i.* FROM issues i WHERE journal_id = ? ORDER BY current DESC, date_published DESC';
		$result = &$this->retrieveRange($sql, $journalId, $rangeInfo);
		
		$returner = &new DAOResultFactory($result, $this, '_returnPublishedIssueFromRow');
		return $returner;
	}

	/**
	 * Get published issues organized by published date********
	 * @param $journalId int
	 * @param $current bool retrieve current or not
	 * @param $rangeInfo object DBResultRange
	 * @return issues ItemIterator
	 */
	function &getPublishedIssues($journalId, $current = false, $rangeInfo = null) {
		$issues = array();

		if ($current) {
			$sql = 'SELECT i.* FROM issues i WHERE journal_id = ? AND (published = 1 OR current = 1) ORDER BY current DESC, year ASC, volume ASC, number ASC';
		} else {
			$sql = 'SELECT i.* FROM issues i WHERE journal_id = ? AND published = 1 ORDER BY current DESC, date_published DESC';
		}
		$result = &$this->retrieveRange($sql, $journalId, $rangeInfo);
		
		$returner = &new DAOResultFactory($result, $this, '_returnPublishedIssueFromRow');
		return $returner;
	}

	/**
	 * Get unpublished issues organized by published date********
	 * @param $journalId int
	 * @param $current bool retrieve current or not
	 * @param $rangeInfo object DBResultRange
 	 * @return issues ItemIterator
	 */
	function &getUnpublishedIssues($journalId, $current = false, $rangeInfo = null) {
		$issues = array();

		if ($current) {
			$sql = 'SELECT i.* FROM issues i WHERE journal_id = ? AND (published = 0 OR current = 1) ORDER BY current DESC, year ASC, volume ASC, number ASC';
		} else {
			$sql = 'SELECT i.* FROM issues i WHERE journal_id = ? AND published = 0 ORDER BY year ASC, volume ASC, number ASC';
		}
		$result = &$this->retrieveRange($sql, $journalId, $rangeInfo);

		$returner = &new DAOResultFactory($result, $this, '_returnIssueFromRow');
		return $returner;
	}
	
	/**
	 * Return number of articles assigned to an issue.
	 * @param $issueId int
	 * @return int
	 */
	function getNumArticles($issueId) {
		$result = &$this->retrieve('SELECT COUNT(*) FROM published_articles WHERE issue_id = ?', $issueId);
		$returner = isset($result->fields[0]) ? $result->fields[0] : 0;

		$result->Close();
		unset($result);

		return $returner;
	}
}
  
?>
