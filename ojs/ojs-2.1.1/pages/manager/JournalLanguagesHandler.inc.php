<?php

/**
 * JournalLanguagesHandler.inc.php
 *
 * Copyright (c) 2003-2006 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package pages.manager
 *
 * Handle requests for changing journal language settings. 
 *
 * $Id: JournalLanguagesHandler.inc.php,v 1.3 2006/06/12 23:26:15 alec Exp $
 */

class JournalLanguagesHandler extends ManagerHandler {

	/**
	 * Display form to edit language settings.
	 */
	function languages() {
		parent::validate();
		parent::setupTemplate(true);
		
		import('manager.form.LanguageSettingsForm');
		
		$settingsForm = &new LanguageSettingsForm();
		$settingsForm->initData();
		$settingsForm->display();
	}
	
	/**
	 * Save changes to language settings.
	 */
	function saveLanguageSettings() {
		parent::validate();
		parent::setupTemplate(true);
		
		import('manager.form.LanguageSettingsForm');
		
		$settingsForm = &new LanguageSettingsForm();
		$settingsForm->readInputData();
		
		if ($settingsForm->validate()) {
			$settingsForm->execute();
			
			$templateMgr = &TemplateManager::getManager();
			$templateMgr->assign(array(
				'currentUrl' => Request::url(null, null, 'languages'),
				'pageTitle' => 'common.languages',
				'message' => 'common.changesSaved',
				'backLink' => Request::url(null, Request::getRequestedPage()),
				'backLinkLabel' => 'manager.journalManagement'
			));
			$templateMgr->display('common/message.tpl');
			
		} else {
			$settingsForm->display();
		}
	}
	
}
?>
