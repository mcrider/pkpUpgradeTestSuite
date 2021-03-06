<?php

/**
 * ProofreaderHandler.inc.php
 *
 * Copyright (c) 2003-2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package pages.proofreader
 *
 * Handle requests for proofreader functions. 
 *
 * $Id: ProofreaderHandler.inc.php,v 1.17 2005/05/03 21:40:52 alec Exp $
 */

import('pages.proofreader.SubmissionProofreadHandler');
import('pages.proofreader.SubmissionCommentsHandler');

import('submission.proofreader.ProofreaderAction');

class ProofreaderHandler extends Handler {

	/**
	 * Display proofreader index page.
	 */
	function index($args) {
		ProofreaderHandler::validate();
		ProofreaderHandler::setupTemplate();

		$journal = &Request::getJournal();
		$user = &Request::getUser();
		$proofreaderSubmissionDao = &DAORegistry::getDAO('ProofreaderSubmissionDAO');

		$rangeInfo = Handler::getRangeInfo('submissions');

		$page = isset($args[0]) ? $args[0] : '';
		switch($page) {
			case 'completed':
				$active = false;
				break;
			default:
				$page = 'active';
				$active = true;
		}

		$submissions = $proofreaderSubmissionDao->getSubmissions($user->getUserId(), $journal->getJournalId(), $active, $rangeInfo);

		$templateMgr = &TemplateManager::getManager();
		$templateMgr->assign('pageToDisplay', $page);
		$templateMgr->assign_by_ref('submissions', $submissions);

		import('issue.IssueAction');
		$issueAction = new IssueAction();
		$templateMgr->register_function('print_issue_id', array($issueAction, 'smartyPrintIssueId'));
		$templateMgr->assign('helpTopicId', 'editorial.proofreadersRole.submissions');
		$templateMgr->display('proofreader/index.tpl');
	}
	
	/**
	 * Validate that user is a proofreader in the selected journal.
	 * Redirects to user index page if not properly authenticated.
	 */
	function validate() {
		parent::validate();
		$journal = &Request::getJournal();
		if (!isset($journal) || !Validation::isProofreader($journal->getJournalId())) {
			Validation::redirectLogin();
		}
	}
	
	/**
	 * Setup common template variables.
	 * @param $subclass boolean set to true if caller is below this handler in the hierarchy
	 */
	function setupTemplate($subclass = false, $articleId = 0, $parentPage = null, $showSidebar = true) {
		$templateMgr = &TemplateManager::getManager();
		$pageHierarchy = $subclass ? array(array('user', 'navigation.user'), array('proofreader', 'user.role.proofreader'))
				: array(array('user', 'navigation.user'), array('proofreader', 'user.role.proofreader'));
		$templateMgr->assign('pagePath', '/user/proofreader');

		import('submission.sectionEditor.SectionEditorAction');
		$submissionCrumb = SectionEditorAction::submissionBreadcrumb($articleId, $parentPage, 'proofreader');
		if (isset($submissionCrumb)) {
			$pageHierarchy = array_merge($pageHierarchy, $submissionCrumb);
		}
		$templateMgr->assign('pageHierarchy', $pageHierarchy);

		if ($showSidebar) {
			$templateMgr->assign('sidebarTemplate', 'proofreader/navsidebar.tpl');

			$journal = &Request::getJournal();
			$user = &Request::getUser();
			$proofreaderSubmissionDao = &DAORegistry::getDAO('ProofreaderSubmissionDAO');
			$submissionsCount = $proofreaderSubmissionDao->getSubmissionsCount($user->getUserId(), $journal->getJournalId());
			$templateMgr->assign('submissionsCount', $submissionsCount);
		}

	}
	
	/**
	 * Display submission management instructions.
	 * @param $args (type)
	 */
	function instructions($args) {
		if (!isset($args[0]) || !ProofreaderAction::instructions($args[0], array('proof'))) {
			Request::redirect(Request::getRequestedPage());
		}
	}

	//
	// Submission Proofreading
	//

	function submission($args) {
		SubmissionProofreadHandler::submission($args);
	}

	function completeProofreader($args) {
		SubmissionProofreadHandler::completeProofreader($args);
	}
	
	//
	// Submission Comments
	//
	
	function viewProofreadComments($args) {
		SubmissionCommentsHandler::viewProofreadComments($args);
	}
	
	function postProofreadComment() {
		SubmissionCommentsHandler::postProofreadComment();
	}

	function viewLayoutComments($args) {
		SubmissionCommentsHandler::viewLayoutComments($args);
	}

	function postLayoutComment() {
		SubmissionCommentsHandler::postLayoutComment();
	}

	//
	// Misc.
	//

	function downloadFile($args) {
		SubmissionProofreadHandler::downloadFile($args);
	}

	function viewFile($args) {
		SubmissionProofreadHandler::viewFile($args);
	}
	
	function proofGalley($args) {
		SubmissionProofreadHandler::proofGalley($args);
	}
	
	function proofGalleyTop($args) {
		SubmissionProofreadHandler::proofGalleyTop($args);
	}
	
	function proofGalleyFile($args) {
		SubmissionProofreadHandler::proofGalleyFile($args);
	}	
	
}

?>
