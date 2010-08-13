<?php

/**
 * JournalSetupStep4Form.inc.php
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package manager.form.setup
 *
 * Form for Step 4 of journal setup.
 *
 * $Id: JournalSetupStep4Form.inc.php,v 1.6 2005/06/27 05:52:44 kevin Exp $
 */

import("manager.form.setup.JournalSetupForm");

class JournalSetupStep4Form extends JournalSetupForm {
	
	function JournalSetupStep4Form() {
		parent::JournalSetupForm(
			4,
			array(
				'publicationFormat' => 'int',
				'initialVolume' => 'int',
				'initialNumber' => 'int',
				'initialYear' => 'int',
				'pubFreqPolicy' => 'string',
				'useCopyeditors' => 'bool',
				'copyeditInstructions' => 'string',
				'useLayoutEditors' => 'bool',
				'layoutInstructions' => 'string',
				'useProofreaders' => 'bool',
				'proofInstructions' => 'string',
				'enableSubscriptions' => 'bool',
				'subscriptionName' => 'string',
				'subscriptionEmail' => 'string',
				'subscriptionPhone' => 'string',
				'subscriptionFax' => 'string',
				'subscriptionMailingAddress' => 'string',
				'subscriptionAdditionalInformation' => 'string',
				'volumePerYear' => 'int',
				'issuePerVolume' => 'int',
				'enablePublicIssueId' => 'bool',
				'enablePublicArticleId' => 'bool',
				'enablePageNumber' => 'bool'
			)
		);
	}
	
}

?>
