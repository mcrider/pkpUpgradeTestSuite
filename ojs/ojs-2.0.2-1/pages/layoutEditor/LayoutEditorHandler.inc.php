<?php

/**
 * LayoutEditorHandler.inc.php
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package pages.layoutEditor
 *
 * Handle requests for layout editor functions. 
 *
 * $Id: LayoutEditorHandler.inc.php,v 1.23 2005/09/01 03:21:49 kevin Exp $
 */

import('submission.layoutEditor.LayoutEditorAction');

class LayoutEditorHandler extends Handler {

	/**
	 * Display editor index page.
	 */
	function index($args) {
		LayoutEditorHandler::validate();
		LayoutEditorHandler::setupTemplate();

		$journal = &Request::getJournal();
		$user = &Request::getUser();
		$layoutEditorSubmissionDao = &DAORegistry::getDAO('LayoutEditorSubmissionDAO');

		$page = isset($args[0]) ? $args[0] : '';
		switch($page) {
			case 'completed':
				$active = false;
				break;
			default:
				$page = 'active';
				$active = true;
		}

		// Get the user's search conditions, if any
		$searchField = Request::getUserVar('searchField');
		$dateSearchField = Request::getUserVar('dateSearchField');
		$searchMatch = Request::getUserVar('searchMatch');
		$search = Request::getUserVar('search');

		$fromDate = Request::getUserDateVar('dateFrom', 1, 1);
		if ($fromDate !== null) $fromDate = date('Y-m-d H:i:s', $fromDate);
		$toDate = Request::getUserDateVar('dateTo', 32, 12, null, 23, 59, 59);
		if ($toDate !== null) $toDate = date('Y-m-d H:i:s', $toDate);

		$rangeInfo = Handler::getRangeInfo('submissions');
		$submissions = $layoutEditorSubmissionDao->getSubmissions($user->getUserId(), $journal->getJournalId(), $searchField, $searchMatch, $search, $dateSearchField, $fromDate, $toDate, $active, $rangeInfo);

		$templateMgr = &TemplateManager::getManager();
		$templateMgr->assign('pageToDisplay', $page);
		$templateMgr->assign_by_ref('submissions', $submissions);

		// Set search parameters
		$duplicateParameters = array(
			'searchField', 'searchMatch', 'search',
			'dateFromMonth', 'dateFromDay', 'dateFromYear',
			'dateToMonth', 'dateToDay', 'dateToYear',
			'dateSearchField'
		);
		foreach ($duplicateParameters as $param)
			$templateMgr->assign($param, Request::getUserVar($param));

		$templateMgr->assign('dateFrom', $fromDate);
		$templateMgr->assign('dateTo', $toDate);
		$templateMgr->assign('fieldOptions', Array(
			SUBMISSION_FIELD_TITLE => 'article.title',
			SUBMISSION_FIELD_AUTHOR => 'user.role.author',
			SUBMISSION_FIELD_EDITOR => 'user.role.editor'
		));
		$templateMgr->assign('dateFieldOptions', Array(
			SUBMISSION_FIELD_DATE_SUBMITTED => 'submissions.submitted',
			SUBMISSION_FIELD_DATE_COPYEDIT_COMPLETE => 'submissions.copyeditComplete',
			SUBMISSION_FIELD_DATE_LAYOUT_COMPLETE => 'submissions.layoutComplete',
			SUBMISSION_FIELD_DATE_PROOFREADING_COMPLETE => 'submissions.proofreadingComplete'
		));

		import('issue.IssueAction');
		$issueAction = new IssueAction();
		$templateMgr->register_function('print_issue_id', array($issueAction, 'smartyPrintIssueId'));
		$templateMgr->assign('helpTopicId', 'editorial.layoutEditorsRole.submissions');
		$templateMgr->display('layoutEditor/index.tpl');
	}
	
	/**
	 * Validate that user is a layout editor in the selected journal.
	 * Redirects to user index page if not properly authenticated.
	 */
	function validate() {
		parent::validate();
		$journal = &Request::getJournal();
		if (!isset($journal) || !Validation::isLayoutEditor($journal->getJournalId())) {
			Validation::redirectLogin();
		}
	}
	
	/**
	 * Setup common template variables.
	 * @param $subclass boolean set to true if caller is below this handler in the hierarchy
	 */
	function setupTemplate($subclass = false, $articleId = 0, $parentPage = null, $showSidebar = true) {
		$templateMgr = &TemplateManager::getManager();
		$pageHierarchy = $subclass ? array(array('user', 'navigation.user'), array('layoutEditor', 'user.role.layoutEditor'))
				: array(array('user', 'navigation.user'), array('layoutEditor', 'user.role.layoutEditor'));
		$templateMgr->assign('pagePath', '/user/layoutEditor');

		import('submission.sectionEditor.SectionEditorAction');
		$submissionCrumb = SectionEditorAction::submissionBreadcrumb($articleId, $parentPage, 'layoutEditor');
		if (isset($submissionCrumb)) {
			$pageHierarchy = array_merge($pageHierarchy, $submissionCrumb);
		}
		$templateMgr->assign('pageHierarchy', $pageHierarchy);

		if ($showSidebar) {
			$templateMgr->assign('sidebarTemplate', 'layoutEditor/navsidebar.tpl');

			$journal = &Request::getJournal();
			$user = &Request::getUser();
			$layoutEditorSubmissionDao = &DAORegistry::getDAO('LayoutEditorSubmissionDAO');
			$submissionsCount = $layoutEditorSubmissionDao->getSubmissionsCount($user->getUserId(), $journal->getJournalId());
			$templateMgr->assign('submissionsCount', $submissionsCount);
		}

	}
	
	/**
	 * Display submission management instructions.
	 * @param $args (type)
	 */
	function instructions($args) {
		import('submission.proofreader.ProofreaderAction');
		if (!isset($args[0]) || !ProofreaderAction::instructions($args[0], array('layout', 'proof'))) {
			Request::redirect(Request::getRequestedPage());
		}
	}
	
	
	//
	// Submission Layout Editing
	//
	
	function submission($args) {
		import('pages.layoutEditor.SubmissionLayoutHandler');
		SubmissionLayoutHandler::submission($args);
	}
	
	function submissionEditing($args) {
		import('pages.layoutEditor.SubmissionLayoutHandler');
		SubmissionLayoutHandler::submission($args);
	}
	
	function completeAssignment($args) {
		import('pages.layoutEditor.SubmissionLayoutHandler');
		SubmissionLayoutHandler::completeAssignment($args);
	}
	
	function uploadGalley() {
		import('pages.layoutEditor.SubmissionLayoutHandler');
		SubmissionLayoutHandler::uploadGalley();
	}
	
	function editGalley($args) {
		import('pages.layoutEditor.SubmissionLayoutHandler');
		SubmissionLayoutHandler::editGalley($args);
	}
	
	function saveGalley($args) {
		import('pages.layoutEditor.SubmissionLayoutHandler');
		SubmissionLayoutHandler::saveGalley($args);
	}

	function deleteGalley($args) {
		import('pages.layoutEditor.SubmissionLayoutHandler');
		SubmissionLayoutHandler::deleteGalley($args);
	}
	
	function orderGalley() {
		import('pages.layoutEditor.SubmissionLayoutHandler');
		SubmissionLayoutHandler::orderGalley();
	}
	
	function proofGalley($args) {
		import('pages.layoutEditor.SubmissionLayoutHandler');
		SubmissionLayoutHandler::proofGalley($args);
	}
	
	function proofGalleyTop($args) {
		import('pages.layoutEditor.SubmissionLayoutHandler');
		SubmissionLayoutHandler::proofGalleyTop($args);
	}
	
	function proofGalleyFile($args) {
		import('pages.layoutEditor.SubmissionLayoutHandler');
		SubmissionLayoutHandler::proofGalleyFile($args);
	}
	
	function uploadSuppFile() {
		import('pages.layoutEditor.SubmissionLayoutHandler');
		SubmissionLayoutHandler::uploadSuppFile();
	}

	function editSuppFile($args) {
		import('pages.layoutEditor.SubmissionLayoutHandler');
		SubmissionLayoutHandler::editSuppFile($args);
	}
	
	function saveSuppFile($args) {
		import('pages.layoutEditor.SubmissionLayoutHandler');
		SubmissionLayoutHandler::saveSuppFile($args);
	}

	function deleteSuppFile($args) {
		import('pages.layoutEditor.SubmissionLayoutHandler');
		SubmissionLayoutHandler::deleteSuppFile($args);
	}
	
	function orderSuppFile() {
		import('pages.layoutEditor.SubmissionLayoutHandler');
		SubmissionLayoutHandler::orderSuppFile();
	}
	
	function downloadFile($args) {
		import('pages.layoutEditor.SubmissionLayoutHandler');
		SubmissionLayoutHandler::downloadFile($args);
	}
	
	function viewFile($args) {
		import('pages.layoutEditor.SubmissionLayoutHandler');
		SubmissionLayoutHandler::viewFile($args);
	}

	//
	// Proofreading Actions
	//

	function layoutEditorProofreadingComplete($args) {
		import('pages.layoutEditor.SubmissionLayoutHandler');
		SubmissionLayoutHandler::layoutEditorProofreadingComplete($args);
	}
	
	
	//
	// Submission Comments
	//
	
	function viewLayoutComments($args) {
		import('pages.layoutEditor.SubmissionCommentsHandler');
		SubmissionCommentsHandler::viewLayoutComments($args);
	}
	
	function postLayoutComment() {
		import('pages.layoutEditor.SubmissionCommentsHandler');
		SubmissionCommentsHandler::postLayoutComment();
	}
	
	function viewProofreadComments($args) {
		import('pages.layoutEditor.SubmissionCommentsHandler');
		SubmissionCommentsHandler::viewProofreadComments($args);
	}
	
	function postProofreadComment() {
		import('pages.layoutEditor.SubmissionCommentsHandler');
		SubmissionCommentsHandler::postProofreadComment();
	}
	
	function editComment($args) {
		import('pages.layoutEditor.SubmissionCommentsHandler');
		SubmissionCommentsHandler::editComment($args);
	}
	
	function saveComment() {
		import('pages.layoutEditor.SubmissionCommentsHandler');
		SubmissionCommentsHandler::saveComment();
	}
	
	function deleteComment($args) {
		import('pages.layoutEditor.SubmissionCommentsHandler');
		SubmissionCommentsHandler::deleteComment($args);
	}
	
}

?>
