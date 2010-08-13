<?php

/**
 * @file classes/form/validation/FormValidatorAlphaNum.inc.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class FormValidatorAlphaNum
 * @ingroup form_validation
 * @see FormValidator
 *
 * @brief Form validation check for alphanumeric (plus interior dash/underscore) characters only.
 */

// $Id: FormValidatorAlphaNum.inc.php,v 1.9.2.1 2009/04/08 19:42:47 asmecher Exp $


import('form.validation.FormValidatorRegExp');

class FormValidatorAlphaNum extends FormValidatorRegExp {

	/**
	 * Constructor.
	 * @see FormValidatorRegExp::FormValidatorRegExp()
	 */
	function FormValidatorAlphaNum(&$form, $field, $type, $message) {
		parent::FormValidatorRegExp($form, $field, $type, $message,
			'/^[A-Z0-9]+([\-_][A-Z0-9]+)*$/i'
		);
	}

}

?>
