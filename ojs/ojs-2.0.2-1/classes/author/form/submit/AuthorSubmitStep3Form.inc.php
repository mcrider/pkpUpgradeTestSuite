<?php

/**
 * AuthorSubmitStep3Form.inc.php
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package author.form.submit
 *
 * Form for Step 3 of author article submission.
 *
 * $Id: AuthorSubmitStep3Form.inc.php,v 1.8 2005/02/18 22:27:19 kevin Exp $
 */

import("author.form.submit.AuthorSubmitForm");

class AuthorSubmitStep3Form extends AuthorSubmitForm {
	
	/**
	 * Constructor.
	 */
	function AuthorSubmitStep3Form($articleId) {
		parent::AuthorSubmitForm($articleId, 3);

		// Validation checks for this form
	}
	
	/**
	 * Initialize form data from current article.
	 */
	function initData() {
		if (isset($this->article)) {
			$article = &$this->article;
			$this->_data = array(
			);
		}
	}
	
	/**
	 * Assign form data to user-submitted data.
	 */
	function readInputData() {
		$this->readUserVars(
			array(
			)
		);
	}
	
	/**
	 * Display the form.
	 */
	function display() {
		$templateMgr = &TemplateManager::getManager();
		
		// Get supplementary files for this article
		$articleFileDao = &DAORegistry::getDAO('ArticleFileDAO');
		if ($this->article->getSubmissionFileId() != null) {
			$templateMgr->assign('submissionFile', $articleFileDao->getArticleFile($this->article->getSubmissionFileId()));
		}
		parent::display();
	}
	
	/**
	 * Upload the submission file.
	 * @param $fileName string
	 * @return boolean
	 */
	function uploadSubmissionFile($fileName) {
		import("file.ArticleFileManager");
		
		$articleFileManager = new ArticleFileManager($this->articleId);
		$articleDao = &DAORegistry::getDAO('ArticleDAO');
			
		if ($articleFileManager->uploadedFileExists($fileName)) {
			// upload new submission file, overwriting previous if necessary
			$submissionFileId = $articleFileManager->uploadSubmissionFile($fileName, $this->article->getSubmissionFileId(), true);
		}

		if (isset($submissionFileId)) {
			$this->article->setSubmissionFileId($submissionFileId);
			return $articleDao->updateArticle($this->article);
			
		} else {
			return false;
		}
	}
	
	/**
	 * Save changes to article.
	 * @return int the article ID
	 */
	function execute() {
		// Update article
		$articleDao = &DAORegistry::getDAO('ArticleDAO');
		$article = &$this->article;
		
		if ($article->getSubmissionProgress() <= $this->step) {
			$article->stampStatusModified();
			$article->setSubmissionProgress($this->step + 1);
			$articleDao->updateArticle($article);
		}
		
		return $this->articleId;
	}
	
}

?>
