<?php

/**
 * ProofreaderSubmissionDAO.inc.php
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package submission.proofreader
 *
 * Class for ProofreaderSubmission DAO.
 * Operations for retrieving and modifying ProofreaderSubmission objects.
 *
 * $Id: ProofreaderSubmissionDAO.inc.php,v 1.8 2005/06/30 17:24:29 alec Exp $
 */

import('submission.proofreader.ProofreaderSubmission');

class ProofreaderSubmissionDAO extends DAO {

	/** Helper DAOs */
	var $articleDao;
	var $articleCommentDao;
	var $editAssignmentDao;
	var $proofAssignmentDao;
	var $layoutAssignmentDao;
	var $galleyDao;
	var $suppFileDao;

	/**
	 * Constructor.
	 */
	function ProofreaderSubmissionDAO() {
		parent::DAO();
		
		$this->articleDao = &DAORegistry::getDAO('ArticleDAO');
		$this->articleCommentDao = &DAORegistry::getDAO('ArticleCommentDAO');
		$this->proofAssignmentDao = &DAORegistry::getDAO('ProofAssignmentDAO');
		$this->editAssignmentDao = DAORegistry::getDAO('EditAssignmentDAO');
		$this->layoutAssignmentDao = DAORegistry::getDAO('LayoutAssignmentDAO');
		$this->galleyDao = &DAORegistry::getDAO('ArticleGalleyDAO');
		$this->suppFileDao = DAORegistry::getDAO('SuppFileDAO');
	}
	
	/**
	 * Retrieve a proofreader submission by article ID.
	 * @param $articleId int
	 * @return ProofreaderSubmission
	 */
	function getSubmission($articleId, $journalId =  null) {
		if (isset($journalId)) {
			$result = &$this->retrieve(
				'SELECT a.*, s.abbrev as section_abbrev, s.title AS section_title
				FROM articles a
				LEFT JOIN sections s ON s.section_id = a.section_id
				WHERE article_id = ? AND a.journal_id = ?',
				array($articleId, $journalId)
			);
			
		} else {
			$result = &$this->retrieve(
				'SELECT a.*, s.abbrev as section_abbrev, s.title AS section_title
				FROM articles a
				LEFT JOIN sections s ON s.section_id = a.section_id
				WHERE article_id = ?',
				$articleId
			);
		}
		
		if ($result->RecordCount() == 0) {
			return null;
		} else {
			return $this->_returnSubmissionFromRow($result->GetRowAssoc(false));
		}
	}

	/**
	 * Internal function to return a ProofreaderSubmission object from a row.
	 * @param $row array
	 * @return ProofreaderSubmission
	 */
	function &_returnSubmissionFromRow(&$row) {
		$submission = &new ProofreaderSubmission();
		$this->articleDao->_articleFromRow($submission, $row);
		
		$submission->setMostRecentProofreadComment($this->articleCommentDao->getMostRecentArticleComment($row['article_id'], COMMENT_TYPE_PROOFREAD, $row['article_id']));
		$submission->setProofAssignment($this->proofAssignmentDao->getProofAssignmentByArticleId($row['article_id']));
		$submission->setSectionAbbrev($row['section_abbrev']);

		// Editor Assignment
		$submission->setEditor($this->editAssignmentDao->getEditAssignmentByArticleId($row['article_id']));

		// Layout reference information
		$submission->setLayoutAssignment($this->layoutAssignmentDao->getLayoutAssignmentByArticleId($row['article_id']));

		$submission->setGalleys($this->galleyDao->getGalleysByArticle($row['article_id']));

		$submission->setSuppFiles($this->suppFileDao->getSuppFilesByArticle($row['article_id']));

		$submission->setMostRecentLayoutComment($this->articleCommentDao->getMostRecentArticleComment($row['article_id'], COMMENT_TYPE_LAYOUT, $row['article_id']));

		return $submission;
	}
	
	/**
	 * Update an existing proofreader submission.
	 * @param $submission ProofreaderSubmission
	 */
	function updateSubmission(&$submission) {
		// Only update proofread-specific data
		$proofreadAssignment = $submission->getProofAssignment();
		$this->proofAssignmentDao->updateProofAssignment($proofAssignment);
	}
	
	/**
	 * Get set of proofreader assignments assigned to the specified proofreader.
	 * @param $proofreaderId int
	 * @param $searchField int SUBMISSION_FIELD_... constant
	 * @param $searchMatch String 'is' or 'contains'
	 * @param $search String Search string
	 * @param $dateField int SUBMISSION_FIELD_DATE_... constant
	 * @param $dateFrom int Search from timestamp
	 * @param $dateTo int Search to timestamp
	 * @param $active boolean true to select active assignments, false to select completed assignments
	 * @return array ProofreaderSubmission
	 */
	function &getSubmissions($proofreaderId, $journalId, $searchField = null, $searchMatch = null, $search = null, $dateField = null, $dateFrom = null, $dateTo = null, $active = true, $rangeInfo = null) {
		$params = array($proofreaderId, $journalId);

		$searchSql = '';

		if (!empty($search)) switch ($searchField) {
			case SUBMISSION_FIELD_TITLE:
				if ($searchMatch === 'is') {
					$searchSql = ' AND (a.title = ? OR a.title_alt1 = ? OR a.title_alt2 = ?)';
				} else {
					$searchSql = ' AND (LOWER(a.title) LIKE LOWER(?) OR LOWER(a.title_alt1) LIKE LOWER(?) OR LOWER(a.title_alt2) LIKE LOWER(?))';
					$search = '%' . $search . '%';
				}
				$params[] = $params[] = $params[] = $search;
				break;
			case SUBMISSION_FIELD_AUTHOR:
				$first_last = $this->_dataSource->Concat('aa.first_name', '\' \'', 'aa.last_name');
				$first_middle_last = $this->_dataSource->Concat('aa.first_name', '\' \'', 'aa.middle_name', '\' \'', 'aa.last_name');
				$last_comma_first = $this->_dataSource->Concat('aa.last_name', '\', \'', 'aa.first_name');
				$last_comma_first_middle = $this->_dataSource->Concat('aa.last_name', '\', \'', 'aa.first_name', '\' \'', 'aa.middle_name');

				if ($searchMatch === 'is') {
					$searchSql = " AND (aa.last_name = ? OR $first_last = ? OR $first_middle_last = ? OR $last_comma_first = ? OR $last_comma_first_middle = ?)";
				} else {
					$searchSql = " AND (LOWER(aa.last_name) LIKE LOWER(?) OR LOWER($first_last) LIKE LOWER(?) OR LOWER($first_middle_last) LIKE LOWER(?) OR LOWER($last_comma_first) LIKE LOWER(?) OR LOWER($last_comma_first_middle) LIKE LOWER(?))";
					$search = '%' . $search . '%';
				}
				$params[] = $params[] = $params[] = $params[] = $params[] = $search;
				break;
			case SUBMISSION_FIELD_EDITOR:
				$first_last = $this->_dataSource->Concat('ed.first_name', '\' \'', 'ed.last_name');
				$first_middle_last = $this->_dataSource->Concat('ed.first_name', '\' \'', 'ed.middle_name', '\' \'', 'ed.last_name');
				$last_comma_first = $this->_dataSource->Concat('ed.last_name', '\', \'', 'ed.first_name');
				$last_comma_first_middle = $this->_dataSource->Concat('ed.last_name', '\', \'', 'ed.first_name', '\' \'', 'ed.middle_name');
				if ($searchMatch === 'is') {
					$searchSql = " AND (ed.last_name = ? OR $first_last = ? OR $first_middle_last = ? OR $last_comma_first = ? OR $last_comma_first_middle = ?)";
				} else {
					$searchSql = " AND (LOWER(ed.last_name) LIKE LOWER(?) OR LOWER($first_last) LIKE LOWER(?) OR LOWER($first_middle_last) LIKE LOWER(?) OR LOWER($last_comma_first) LIKE LOWER(?) OR LOWER($last_comma_first_middle) LIKE LOWER(?))";
					$search = '%' . $search . '%';
				}
				$params[] = $params[] = $params[] = $params[] = $params[] = $search;
				break;
		}

		if (!empty($dateFrom) || !empty($dateTo)) switch($dateField) {
			case SUBMISSION_FIELD_DATE_SUBMITTED:
				if (!empty($dateFrom)) {
					$searchSql .= ' AND a.date_submitted >= ?';
					$params[] = $dateFrom;
				}
				if (!empty($dateTo)) {
					$searchSql .= ' AND a.date_submitted <= ?';
					$params[] = $dateTo;
				}
				break;
			case SUBMISSION_FIELD_DATE_COPYEDIT_COMPLETE:
				if (!empty($dateFrom)) {
					$searchSql .= ' AND c.date_final_completed >= ?';
					$params[] = $dateFrom;
				}
				if (!empty($dateTo)) {
					$searchSql .= ' AND c.date_final_completed <= ?';
					$params[] = $dateTo;
				}
				break;
			case SUBMISSION_FIELD_DATE_LAYOUT_COMPLETE:
				if (!empty($dateFrom)) {
					$searchSql .= ' AND l.date_completed >= ?';
					$params[] = $dateFrom;
				}
				if (!empty($dateTo)) {
					$searchSql .= ' AND l.date_completed <= ?';
					$params[] = $dateTo;
				}
				break;
			case SUBMISSION_FIELD_DATE_PROOFREADING_COMPLETE:
				if (!empty($dateFrom)) {
					$searchSql .= ' AND p.date_proofreader_completed >= ?';
					$params[] = $dateFrom;
				}
				if (!empty($dateTo)) {
					$searchSql .= 'AND p.date_proofreader_completed <= ?';
					$params[] = $dateTo;
				}
				break;
		}
		$sql = 'SELECT DISTINCT
				a.*,
				s.abbrev as section_abbrev,
				s.title AS section_title
			FROM
				articles a,
				article_authors aa,
				proof_assignments p
				LEFT JOIN sections s ON s.section_id = a.section_id
				LEFT JOIN copyed_assignments c ON (c.article_id = a.article_id)
				LEFT JOIN edit_assignments e ON (e.article_id = a.article_id)
				LEFT JOIN users ed ON (e.editor_id = ed.user_id)
				LEFT JOIN layouted_assignments l ON (l.article_id = a.article_id)
			WHERE
				aa.article_id = a.article_id AND
				a.article_id = p.article_id AND
				p.proofreader_id = ? AND
				a.journal_id = ? AND
				p.date_proofreader_notified IS NOT NULL';
		
		if ($active) {
			$sql .= ' AND p.date_proofreader_completed IS NULL';
		} else {
			$sql .= ' AND p.date_proofreader_completed IS NOT NULL';		
		}

		$result = &$this->retrieveRange($sql . ' ' . $searchSql, $params, $rangeInfo);

		return new DAOResultFactory (&$result, &$this, '_returnSubmissionFromRow');
	}

	/**
	 * Get count of active and complete assignments
	 * @param proofreaderId int
	 * @param journalId int
	 */
	function getSubmissionsCount($proofreaderId, $journalId) {
		$submissionsCount = array();
		$submissionsCount[0] = 0;
		$submissionsCount[1] = 0;

		$sql = 'SELECT p.date_proofreader_completed FROM articles a, proof_assignments p LEFT JOIN sections s ON s.section_id = a.section_id WHERE a.article_id = p.article_id AND p.proofreader_id = ? AND a.journal_id = ? AND p.date_proofreader_notified IS NOT NULL';

		$result = &$this->retrieve($sql, array($proofreaderId, $journalId));

		while (!$result->EOF) {
			if ($result->fields['date_proofreader_completed'] == null) {
				$submissionsCount[0] += 1;
			} else {
				$submissionsCount[1] += 1;
			}
			$result->moveNext();
		}

		return $submissionsCount;
	}

}

?>
