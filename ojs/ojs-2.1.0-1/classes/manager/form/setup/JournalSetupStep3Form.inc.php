<?php

/**
 * JournalSetupStep3Form.inc.php
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package manager.form.setup
 *
 * Form for Step 3 of journal setup.
 *
 * $Id: JournalSetupStep3Form.inc.php,v 1.8 2005/12/27 20:13:06 alec Exp $
 */

import("manager.form.setup.JournalSetupForm");

class JournalSetupStep3Form extends JournalSetupForm {
	
	function JournalSetupStep3Form() {
		parent::JournalSetupForm(
			3,
			array(
				'authorGuidelines' => 'string',
				'submissionChecklist' => 'object',
				'copyrightNotice' => 'string',
				'copyrightNoticeAgree' => 'bool',
				'metaDiscipline' => 'bool',
				'metaDisciplineExamples' => 'string',
				'metaSubjectClass' => 'bool',
				'metaSubjectClassTitle' => 'string',
				'metaSubjectClassUrl' => 'string',
				'metaSubject' => 'bool',
				'metaSubjectExamples' => 'string',
				'metaCoverage' => 'bool',
				'metaCoverageGeoExamples' => 'string',
				'metaCoverageChronExamples' => 'string',
				'metaCoverageResearchSampleExamples' => 'string',
				'metaType' => 'bool',
				'metaTypeExamples' => 'string',
				'copySubmissionAckPrimaryContact' => 'bool',
				'copySubmissionAckSpecified' => 'bool',
				'copySubmissionAckAddress' => 'string'
			)
		);

		$this->addCheck(new FormValidatorEmail($this, 'copySubmissionAckAddress', 'optional', 'user.profile.form.emailRequired'));
	}
	
	/**
	 * Display the form
	 */
	function display() {
		import('mail.MailTemplate');
		$mail = &new MailTemplate('SUBMISSION_ACK');
		if ($mail->isEnabled()) {
			$templateMgr =& TemplateManager::getManager();
			$templateMgr->assign('submissionAckEnabled', true);
		}

		parent::display();
	}
}

?>
