<?php

/**
 * @file classes/form/validation/FormValidatorAlphaNum.inc.php
 *
 * Copyright (c) 2000-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class FormValidatorAlphaNum
 * @ingroup form_validation
 * @see FormValidator
 *
 * @brief Form validation check for alphanumeric (plus interior dash/underscore) characters only.
 */

// $Id: FormValidatorAlphaNum.inc.php,v 1.3 2009/04/08 21:34:54 asmecher Exp $


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
