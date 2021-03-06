<?php

/**
 * @defgroup captcha
 */

/**
 * @file classes/captcha/Captcha.inc.php
 *
 * Copyright (c) 2000-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class Captcha
 * @ingroup captcha
 * @see CaptchaDAO, CaptchaManager
 *
 * @brief Class for Captcha verifiers.
 *
 */

// $Id: Captcha.inc.php,v 1.4 2009/05/11 23:35:04 asmecher Exp $


class Captcha extends DataObject {
	/**
	 * Constructor.
	 */
	function Captcha() {
		parent::DataObject();
	}

	/**
	 * get captcha id
	 * @return int
	 */
	function getCaptchaId() {
		trigger_error('Deprecated function.');
		return $this->getId();
	}

	/**
	 * set captcha id
	 * @param $captchaId int
	 */
	function setCaptchaId($captchaId) {
		trigger_error('Deprecated function.');
		return $this->setId($captchaId);
	}

	/**
	 * get session id
	 * @return int
	 */
	function getSessionId() {
		return $this->getData('sessionId');
	}

	/**
	 * set session id
	 * @param $sessionId int
	 */
	function setSessionId($sessionId) {
		return $this->setData('sessionId', $sessionId);
	}

	/**
	 * get value
	 * @return string
	 */
	function getValue() {
		return $this->getData('value');
	}

	/**
	 * set value
	 * @param $value string
	 */
	function setValue($value) {
		return $this->setData('value', $value);
	}

	/**
	 * get poster name
	 * @return string
	 */
	function getPosterName() {
		return $this->getData('posterName');
	}

	function setDateCreated($dateCreated) {
		return $this->setData('dateCreated', $dateCreated);
	}

 	/**
	 * get date created
	 * @return date
	 */
	function getDateCreated() {
		return $this->getData('dateCreated');
	}
}

?>
