<?php

/**
 * SuppFileDAO.inc.php
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package article
 *
 * Class for SuppFile DAO.
 * Operations for retrieving and modifying SuppFile objects.
 *
 * $Id: SuppFileDAO.inc.php,v 1.13 2005/10/31 22:06:59 alec Exp $
 */

import('article.SuppFile');

class SuppFileDAO extends DAO {

	/**
	 * Constructor.
	 */
	function SuppFileDAO() {
		parent::DAO();
	}
	
	/**
	 * Retrieve a supplementary file by ID.
	 * @param $suppFileId int
	 * @param $articleId int optional
	 * @return SuppFile
	 */
	function &getSuppFile($suppFileId, $articleId = null) {
		if (isset($articleId)) {
			$result = &$this->retrieve(
				'SELECT s.*, a.file_name, a.original_file_name, a.file_type, a.file_size, a.status, a.date_uploaded, a.date_modified FROM article_supplementary_files s LEFT JOIN article_files a ON (s.file_id = a.file_id) WHERE s.supp_id = ? AND s.article_id = ?',
				array($suppFileId, $articleId)
			);
			
		} else {
			$result = &$this->retrieve(
				'SELECT s.*, a.file_name, a.original_file_name, a.file_type, a.file_size, a.status, a.date_uploaded, a.date_modified FROM article_supplementary_files s LEFT JOIN article_files a ON (s.file_id = a.file_id) WHERE s.supp_id = ? AND s.article_id = ?', $suppFileId
			);
		}

		$returner = null;
		if ($result->RecordCount() != 0) {
			$returner = &$this->_returnSuppFileFromRow($result->GetRowAssoc(false));
		}

		$result->Close();
		unset($result);

		return $returner;
	}
	
	/**
	 * Retrieve a supplementary file by public supp file ID.
	 * @param $publicSuppId string
	 * @param $articleId int
	 * @return SuppFile
	 */
	function &getSuppFileByPublicSuppFileId($publicSuppId, $articleId) {
		$result = &$this->retrieve(
			'SELECT s.*, a.file_name, a.original_file_name, a.file_type, a.file_size, a.status, a.date_uploaded, a.date_modified FROM article_supplementary_files s LEFT JOIN article_files a ON (s.file_id = a.file_id) WHERE s.public_supp_file_id = ? AND s.article_id = ?',
			array($publicSuppId, $articleId)
		);

		$returner = null;
		if ($result->RecordCount() != 0) {
			$returner = &$this->_returnSuppFileFromRow($result->GetRowAssoc(false));
		}

		$result->Close();
		unset($result);

		return $returner;
	}
	
	/**
	 * Retrieve all supplementary files for an article.
	 * @param $articleId int
	 * @return array SuppFiles
	 */
	function &getSuppFilesByArticle($articleId) {
		$suppFiles = array();
		
		$result = &$this->retrieve(
			'SELECT s.*, a.file_name, a.original_file_name, a.file_type, a.file_size, a.status, a.date_uploaded, a.date_modified FROM article_supplementary_files s LEFT JOIN article_files a ON (s.file_id = a.file_id) WHERE s.article_id = ? ORDER BY s.seq',
			$articleId
		);
		
		while (!$result->EOF) {
			$suppFiles[] = &$this->_returnSuppFileFromRow($result->GetRowAssoc(false));
			$result->moveNext();
		}

		$result->Close();
		unset($result);

		return $suppFiles;
	}
	
	/**
	 * Internal function to return a SuppFile object from a row.
	 * @param $row array
	 * @return SuppFile
	 */
	function &_returnSuppFileFromRow(&$row) {
		$suppFile = &new SuppFile();
		$suppFile->setSuppFileID($row['supp_id']);
		$suppFile->setPublicSuppFileID($row['public_supp_file_id']);
		$suppFile->setFileId($row['file_id']);
		$suppFile->setArticleId($row['article_id']);
		$suppFile->setTitle($row['title']);
		$suppFile->setCreator($row['creator']);
		$suppFile->setSubject($row['subject']);
		$suppFile->setType($row['type']);
		$suppFile->setTypeOther($row['type_other']);
		$suppFile->setDescription($row['description']);
		$suppFile->setPublisher($row['publisher']);
		$suppFile->setSponsor($row['sponsor']);
		$suppFile->setDateCreated($this->dateFromDB($row['date_created']));
		$suppFile->setSource($row['source']);
		$suppFile->setLanguage($row['language']);
		$suppFile->setShowReviewers($row['show_reviewers']);
		$suppFile->setDateSubmitted($this->datetimeFromDB($row['date_submitted']));
		$suppFile->setSequence($row['seq']);
		
		//ArticleFile set methods
		$suppFile->setFileName($row['file_name']);
		$suppFile->setOriginalFileName($row['original_file_name']);
		$suppFile->setFileType($row['file_type']);
		$suppFile->setFileSize($row['file_size']);
		$suppFile->setStatus($row['status']);
		$suppFile->setDateModified($this->datetimeFromDB($row['date_modified']));
		$suppFile->setDateUploaded($this->datetimeFromDB($row['date_uploaded']));
		
		HookRegistry::call('SuppFileDAO::_returnSuppFileFromRow', array(&$suppFile, &$row));

		return $suppFile;
	}

	/**
	 * Insert a new SuppFile.
	 * @param $suppFile SuppFile
	 */	
	function insertSuppFile(&$suppFile) {
		if ($suppFile->getDateSubmitted() == null) {
			$suppFile->setDateSubmitted(Core::getCurrentDate());
		}
		if ($suppFile->getSequence() == null) {
			$suppFile->setSequence($this->getNextSuppFileSequence($suppFile->getArticleID()));
		}
		$this->update(
			sprintf('INSERT INTO article_supplementary_files
				(public_supp_file_id, file_id, article_id, title, creator, subject, type, type_other, description, publisher, sponsor, date_created, source, language, show_reviewers, date_submitted, seq)
				VALUES
				(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, %s, ?, ?, ?, %s, ?)',
				$this->dateToDB($suppFile->getDateCreated()), $this->datetimeToDB($suppFile->getDateSubmitted())),
			array(
				$suppFile->getPublicSuppFileId(),
				$suppFile->getFileId(),
				$suppFile->getArticleId(),
				$suppFile->getTitle(),
				$suppFile->getCreator(),
				$suppFile->getSubject(),
				$suppFile->getType(),
				$suppFile->getTypeOther(),
				$suppFile->getDescription(),
				$suppFile->getPublisher(),
				$suppFile->getSponsor(),
				$suppFile->getSource(),
				$suppFile->getLanguage(),
				$suppFile->getShowReviewers(),
				$suppFile->getSequence()
			)
		);
		$suppFile->setSuppFileId($this->getInsertSuppFileId());
		return $suppFile->getSuppFileId();
	}
	
	/**
	 * Update an existing SuppFile.
	 * @param $suppFile SuppFile
	 */
	function updateSuppFile(&$suppFile) {
		return $this->update(
			sprintf('UPDATE article_supplementary_files
				SET
					public_supp_file_id = ?,
					file_id = ?,
					title = ?,
					creator = ?,
					subject = ?,
					type = ?,
					type_other = ?,
					description = ?,
					publisher = ?,
					sponsor = ?,
					date_created = %s,
					source = ?,
					language = ?,
					show_reviewers = ?,
					seq = ?
				WHERE supp_id = ?',
				$this->dateToDB($suppFile->getDateCreated())),
			array(
				$suppFile->getPublicSuppFileId(),
				$suppFile->getFileId(),
				$suppFile->getTitle(),
				$suppFile->getCreator(),
				$suppFile->getSubject(),
				$suppFile->getType(),
				$suppFile->getTypeOther(),
				$suppFile->getDescription(),
				$suppFile->getPublisher(),
				$suppFile->getSponsor(),
				$suppFile->getSource(),
				$suppFile->getLanguage(),
				$suppFile->getShowReviewers(),
				$suppFile->getSequence(),
				$suppFile->getSuppFileId()
			)
		);
	}
	
	/**
	 * Delete a SuppFile.
	 * @param $suppFile SuppFile
	 */
	function deleteSuppFile(&$suppFile) {
		return $this->deleteSuppFileById($suppFile->getSuppFileId());
	}
	
	/**
	 * Delete a supplementary file by ID.
	 * @param $suppFileId int
	 * @param $articleId int optional
	 */
	function deleteSuppFileById($suppFileId, $articleId = null) {
		if (isset($articleId)) {
			return $this->update(
				'DELETE FROM article_supplementary_files WHERE supp_id = ? AND article_id = ?',
				array($suppFileId, $articleId)
			);
		
		} else {
			return $this->update(
				'DELETE FROM article_supplementary_files WHERE supp_id = ?', $suppFileId
			);
		}
	}
	
	/**
	 * Delete supplementary files by article.
	 * @param $articleId int
	 */
	function deleteSuppFilesByArticle($articleId) {
		return $this->update(
			'DELETE FROM article_supplementary_files WHERE article_id = ?', $articleId
		);
	}
	
	/**
	 * Check if a supplementary file exists with the associated file ID.
	 * @param $articleId int
	 * @param $fileId int
	 * @return boolean
	 */
	function suppFileExistsByFileId($articleId, $fileId) {
		$result = &$this->retrieve(
			'SELECT COUNT(*) FROM article_supplementary_files
			WHERE article_id = ? AND file_id = ?',
			array($articleId, $fileId)
		);
		
		$returner = isset($result->fields[0]) && $result->fields[0] == 1 ? true : false;

		$result->Close();
		unset($result);

		return $returner;
	}
	
	/**
	 * Sequentially renumber supplementary files for an article in their sequence order.
	 * @param $articleId int
	 */
	function resequenceSuppFiles($articleId) {
		$result = &$this->retrieve(
			'SELECT supp_id FROM article_supplementary_files WHERE article_id = ? ORDER BY seq',
			$articleId
		);
		
		for ($i=1; !$result->EOF; $i++) {
			list($suppId) = $result->fields;
			$this->update(
				'UPDATE article_supplementary_files SET seq = ? WHERE supp_id = ?',
				array($i, $suppId)
			);
			$result->moveNext();
		}

		$result->close();
		unset($result);
	}
	
	/**
	 * Get the the next sequence number for an article's supplementary files (i.e., current max + 1).
	 * @param $articleId int
	 * @return int
	 */
	function getNextSuppFileSequence($articleId) {
		$result = &$this->retrieve(
			'SELECT MAX(seq) + 1 FROM article_supplementary_files WHERE article_id = ?',
			$articleId
		);
		$returner = floor($result->fields[0]);

		$result->Close();
		unset($result);

		return $returner;
	}
	
	/**
	 * Get the ID of the last inserted supplementary file.
	 * @return int
	 */
	function getInsertSuppFileId() {
		return $this->getInsertId('article_supplementary_files', 'supp_id');
	}

	/**
	 * Retrieve supp file by public supp file id or, failing that,
	 * internal supp file ID; public ID takes precedence.
	 * @param $articleId int
	 * @param $suppId string
	 * @return SuppFile object
	 */
	function &getSuppFileByBestSuppFileId($articleId, $suppId) {
		$suppFile = &$this->getSuppFileByPublicSuppFileId($suppId, $articleId);
		if (!isset($suppFile)) $suppFile = &$this->getSuppFile((int) $suppId, $articleId);
		return $suppFile;
	}

	/**
	 * Checks if public identifier exists
	 * @param $publicSuppFileId string
	 * @param $suppId int A supplemental file ID to exempt from the test
	 * @param $journalId int
	 * @return boolean
	 */
	function suppFileExistsByPublicId($publicSuppFileId, $suppId, $journalId) {
		$result = &$this->retrieve(
			'SELECT COUNT(*) FROM article_supplementary_files f, articles a WHERE f.article_id = a.article_id AND f.public_supp_file_id = ? AND f.supp_id <> ? AND a.journal_id = ?', array($publicSuppFileId, $suppId, $journalId)
		);
		$returner = $result->fields[0] ? true : false;

		$result->Close();
		unset($result);

		return $returner;
	}
}

?>
