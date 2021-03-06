<?php

/**
 * EmailTemplateForm.inc.php
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package manager.form
 *
 * Form for creating and modifying journal sections.
 *
 * $Id: EmailTemplateForm.inc.php,v 1.7 2005/04/25 20:38:11 alec Exp $
 */

import('form.Form');

class EmailTemplateForm extends Form {

	/** The key of the email template being edited */
	var $emailKey;
	
	/**
	 * Constructor.
	 * @param $emailKey string
	 */
	function EmailTemplateForm($emailKey) {
		parent::Form('manager/emails/emailTemplateForm.tpl');
		
		$this->emailKey = $emailKey;
		
		// Validation checks for this form
		$this->addCheck(new FormValidatorArray(&$this, 'subject', 'required', 'manager.emails.form.subjectRequired'));
		$this->addCheck(new FormValidatorArray(&$this, 'body', 'required', 'manager.emails.form.bodyRequired'));
	}
	
	/**
	 * Display the form.
	 */
	function display() {
		$templateMgr = &TemplateManager::getManager();
		
		if (isset($this->emailKey)) {
			$journal = &Request::getJournal();
			$emailTemplateDao = &DAORegistry::getDAO('EmailTemplateDAO');
			$emailTemplate = &$emailTemplateDao->getBaseEmailTemplate($this->emailKey, $journal->getJournalId());
			$templateMgr->assign('canDisable', $emailTemplate->getCanDisable());
			$templateMgr->assign('supportedLocales', $journal->getSupportedLocaleNames());
		}
		$templateMgr->assign('helpTopicId','journal.managementPages.emails');
		parent::display();
	}
	
	/**
	 * Initialize form data from current settings.
	 */
	function initData() {
		if (isset($this->emailKey)) {
			$journal = &Request::getJournal();
			$emailTemplateDao = &DAORegistry::getDAO('EmailTemplateDAO');
			$emailTemplate = &$emailTemplateDao->getLocaleEmailTemplate($this->emailKey, $journal->getJournalId());
			
			$subject = array();
			$body = array();
			foreach ($emailTemplate->getLocales() as $locale) {
				$subject[$locale] = $emailTemplate->getSubject($locale);
				$body[$locale] = $emailTemplate->getBody($locale);
			}
			
			if ($emailTemplate != null) {
				$this->_data = array(
					'emailId' => $emailTemplate->getEmailId(),
					'emailKey' => $emailTemplate->getEmailKey(),
					'subject' => $subject,
					'body' => $body,
					'enabled' => $emailTemplate->getEnabled()
				);
			}
		}
	}
	
	/**
	 * Assign form data to user-submitted data.
	 */
	function readInputData() {
		$this->readUserVars(array('emailId', 'subject', 'body', 'enabled', 'journalId', 'emailKey'));
	}
	
	/**
	 * Save email template.
	 */
	function execute() {
		$journal = &Request::getJournal();
			
		$emailTemplateDao = &DAORegistry::getDAO('EmailTemplateDAO');
		
		if (isset($this->emailKey)) {
			$emailTemplate = &$emailTemplateDao->getLocaleEmailTemplate($this->emailKey, $journal->getJournalId());
		
			$emailTemplate->setJournalId($journal->getJournalId());
			$emailTemplate->setEmailId($this->getData('emailId'));
			
			$supportedLocales = $journal->getSupportedLocaleNames();
			if (!empty($supportedLocales)) {
				foreach ($journal->getSupportedLocaleNames() as $localeKey => $localeName) {
					$emailTemplate->setSubject($localeKey, $this->_data['subject'][$localeKey]);
					$emailTemplate->setBody($localeKey, $this->_data['body'][$localeKey]);
				}
			} else {
				$localeKey = Locale::getLocale();
				$emailTemplate->setSubject($localeKey, $this->_data['subject'][$localeKey]);
				$emailTemplate->setBody($localeKey, $this->_data['body'][$localeKey]);
			}
			
			if ($emailTemplate->getCanDisable()) {
				$emailTemplate->setEnabled($this->getData('enabled'));
			}
			
			if ($emailTemplate->getEmailId() != null) {
				$emailTemplateDao->updateLocaleEmailTemplate($emailTemplate);
			} else {
				$emailTemplateDao->insertLocaleEmailTemplate($emailTemplate);
			}
		}
	}
	
}

?>
