<?php

/**
 * @file AuthSourceSettingsForm.inc.php
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package security.form
 * @class AuthSourceSettingsForm
 *
 * Form for editing authentication source settings.
 *
 * $Id: AuthSourceSettingsForm.inc.php,v 1.6 2007/09/19 00:04:34 asmecher Exp $
 */

import('form.Form');

class AuthSourceSettingsForm extends Form {

	/** The ID of the source being edited */
	var $authId;

	/** The associated plugin */
	var $plugin;

	/**
	 * Constructor.
	 * @param $authId int
	 */
	function AuthSourceSettingsForm($authId) {
		parent::Form('admin/auth/sourceSettings.tpl');
		$this->addCheck(new FormValidatorPost($this));
		$this->authId = $authId;
	}

	/**
	 * Display the form.
	 */
	function display() {
		$templateMgr = &TemplateManager::getManager();
		$templateMgr->assign('authId', $this->authId);
		$templateMgr->assign('helpTopicId', 'site.siteManagement');

		if (isset($this->plugin)) {
			$this->plugin->addLocaleData();
			$templateMgr->assign('pluginTemplate', $this->plugin->getSettingsTemplate());
		}

		parent::display();
	}

	/**
	 * Initialize form data from current settings.
	 */
	function initData() {
		$authDao = &DAORegistry::getDAO('AuthSourceDAO');
		$auth = &$authDao->getSource($this->authId);

		if ($auth != null) {
			$this->_data = array(
				'plugin' => $auth->getPlugin(),
				'title' => $auth->getTitle(),
				'settings' => $auth->getSettings()
			);
			$this->plugin = &$auth->getPluginClass();
		}
	}

	/**
	 * Assign form data to user-submitted data.
	 */
	function readInputData() {
		$this->readUserVars(array('title', 'settings'));
	}

	/**
	 * Save journal settings.
	 */
	function execute() {
		$authDao = &DAORegistry::getDAO('AuthSourceDAO');

		$auth = &new AuthSource();
		$auth->setAuthId($this->authId);
		$auth->setTitle($this->getData('title'));
		$auth->setSettings($this->getData('settings'));

		$authDao->updateSource($auth);
	}

}

?>
