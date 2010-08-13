<?php

/**
 * @file FormValidatorAlphaNum.inc.php
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package form.validation
 * @class FormValidatorAlphaNum
 *
 * Form validation check for alphanumeric (plus interior dash/underscore) characters only.
 *
 * $Id: FormValidatorAlphaNum.inc.php,v 1.7 2007/09/19 00:04:32 asmecher Exp $
 */

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
