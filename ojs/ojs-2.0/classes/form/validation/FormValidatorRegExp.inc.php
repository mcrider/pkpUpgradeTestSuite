<?php

/**
 * FormValidatorRegExp.inc.php
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package form.validation
 *
 * Form validation check using a regular expression.
 *
 * $Id: FormValidatorRegExp.inc.php,v 1.3 2005/04/25 20:38:11 alec Exp $
 */

import ('form.validation.FormValidator');

class FormValidatorRegExp extends FormValidator {

	/** The regular expression to match against the field value */
	var $regExp;
	
	/**
	 * Constructor.
	 * @see FormValidator::FormValidator()
	 * @param $regExp string the regular expression (PCRE form)
	 */
	function FormValidatorRegExp($form, $field, $type, $message, $regExp) {
		parent::FormValidator(&$form, $field, $type, $message);
		$this->regExp = $regExp;
	}
	
	/**
	 * Check if field value is valid.
	 * Value is valid if it is empty and optional or matches regular expression.
	 * @return boolean
	 */
	function isValid() {
		return $this->isEmptyAndOptional() || String::regexp_match($this->regExp, $this->form->getData($this->field));
	}
	
}

?>
