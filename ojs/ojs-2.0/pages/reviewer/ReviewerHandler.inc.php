<?php

/**
 * ReviewerHandler.inc.php
 *
 * Copyright (c) 2003-2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package pages.reviewer
 *
 * Handle requests for reviewer functions. 
 *
 * $Id: ReviewerHandler.inc.php,v 1.24 2005/05/03 21:40:52 alec Exp $
 */

import('pages.reviewer.SubmissionReviewHandler');
import('pages.reviewer.SubmissionCommentsHandler');

import('submission.reviewer.ReviewerAction');

class ReviewerHandler extends Handler {

	/**
	 * Display reviewer index page.
	 */
	function index($args) {
		ReviewerHandler::validate();
		ReviewerHandler::setupTemplate();

		$journal = &Request::getJournal();
		$user = &Request::getUser();
		$reviewerSubmissionDao = &DAORegistry::getDAO('ReviewerSubmissionDAO');
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

		$submissions = $reviewerSubmissionDao->getReviewerSubmissionsByReviewerId($user->getUserId(), $journal->getJournalId(), $active, $rangeInfo);

		$templateMgr = &TemplateManager::getManager();
		$templateMgr->assign('pageToDisplay', $page);
		$templateMgr->assign('submissions', $submissions);
		// FIXME Move this common code somewhere else
		$templateMgr->assign('reviewerRecommendationOptions',
			array(
				'' => 'common.chooseOne',
				SUBMISSION_REVIEWER_RECOMMENDATION_ACCEPT => 'reviewer.article.decision.accept',
				SUBMISSION_REVIEWER_RECOMMENDATION_PENDING_REVISIONS => 'reviewer.article.decision.pendingRevisions',
				SUBMISSION_REVIEWER_RECOMMENDATION_RESUBMIT_HERE => 'reviewer.article.decision.resubmitHere',
                                SUBMISSION_REVIEWER_RECOMMENDATION_RESUBMIT_ELSEWHERE => 'reviewer.article.decision.resubmitElsewhere',
				SUBMISSION_REVIEWER_RECOMMENDATION_DECLINE => 'reviewer.article.decision.decline',
				SUBMISSION_REVIEWER_RECOMMENDATION_SEE_COMMENTS => 'reviewer.article.decision.seeComments'
			)
		);

		import('issue.IssueAction');
		$issueAction = new IssueAction();
		$templateMgr->register_function('print_issue_id', array($issueAction, 'smartyPrintIssueId'));
		$templateMgr->assign('helpTopicId', 'editorial.reviewersRole.submissions');
		$templateMgr->display('reviewer/index.tpl');
	}
	
	/**
	 * Validate that user is a reviewer in the selected journal.
	 * Redirects to user index page if not properly authenticated.
	 */
	function validate() {
		parent::validate();
		$journal = &Request::getJournal();
		if (!isset($journal) || !Validation::isReviewer($journal->getJournalId())) {
			Validation::redirectLogin();
		}
	}
	
	/**
	 * Setup common template variables.
	 * @param $subclass boolean set to true if caller is below this handler in the hierarchy
	 */
	function setupTemplate($subclass = false, $articleId = 0, $parentPage = null, $showSidebar = true) {
		$templateMgr = &TemplateManager::getManager();
		$pageHierarchy = $subclass ? array(array('user', 'navigation.user'), array('reviewer', 'user.role.reviewer'))
				: array(array('user', 'navigation.user'), array('reviewer', 'user.role.reviewer'));
		$templateMgr->assign('pagePath', '/user/reviewer');

		import('submission.sectionEditor.SectionEditorAction');
		$submissionCrumb = SectionEditorAction::submissionBreadcrumb($articleId, $parentPage, 'reviewer');
		if (isset($submissionCrumb)) {
			$pageHierarchy = array_merge($pageHierarchy, $submissionCrumb);
		}
		$templateMgr->assign('pageHierarchy', $pageHierarchy);

		if ($showSidebar) {
			$templateMgr->assign('sidebarTemplate', 'reviewer/navsidebar.tpl');

			$journal = &Request::getJournal();
			$user = &Request::getUser();
			$reviewerSubmissionDao = &DAORegistry::getDAO('ReviewerSubmissionDAO');
			$submissionsCount = $reviewerSubmissionDao->getSubmissionsCount($user->getUserId(), $journal->getJournalId());
			$templateMgr->assign('submissionsCount', $submissionsCount);
		}
	}
	
	//
	// Submission Tracking
	//
	
	function submission($args) {
		SubmissionReviewHandler::submission($args);
	}

	function confirmReview($args) {
		SubmissionReviewHandler::confirmReview($args);
	}
	
	function recordRecommendation() {
		SubmissionReviewHandler::recordRecommendation();
	}
	
	function viewMetadata($args) {
		SubmissionReviewHandler::viewMetadata($args);
	}
	
	function uploadReviewerVersion() {
		SubmissionReviewHandler::uploadReviewerVersion();
	}

	function deleteReviewerVersion($args) {
		SubmissionReviewHandler::deleteReviewerVersion($args);
	}
	
	//
	// Misc.
	//

	function downloadFile($args) {
		SubmissionReviewHandler::downloadFile($args);
	}
	
	//
	// Submission Comments
	//
	
	function viewPeerReviewComments($args) {
		SubmissionCommentsHandler::viewPeerReviewComments($args);
	}
	
	function postPeerReviewComment() {
		SubmissionCommentsHandler::postPeerReviewComment();
	}

	function editComment($args) {
		SubmissionCommentsHandler::editComment($args);
	}
	
	function saveComment() {
		SubmissionCommentsHandler::saveComment();
	}
	
	function deleteComment($args) {
		SubmissionCommentsHandler::deleteComment($args);
	}
}

?>
