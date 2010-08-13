<?php

/**
 * FormError.inc.php
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package form
 *
 * Class to represent a form validation error.
 *
 * $Id: FormError.inc.php,v 1.1.1.1 2004/01/24 11:26:12 kevin Exp $
 */

class FormError {

	/** The name of the field */
	var $field;
	
	/** The error message */
	var $message;
	
	/**
	 * Constructor.
	 * @param $field string the name of the field
	 * @param $message string the error message (i18n key)
	 */
	function FormError($field, $message) {
		$this->field = $field;
		$this->message = $message;
	}
	
	/**
	 * Get the field associated with the error.
	 * @return string
	 */
	function getField() {
		return $this->field;
	}
	
	/**
	 * Get the error message (i18n key).
	 * @return string
	 */
	function getMessage() {
		return $this->message;
	}
	
}

?>
