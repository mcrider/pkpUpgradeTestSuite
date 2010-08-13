<?php

/**
 * FormValidatorAlphaNum.inc.php
 *
 * Copyright (c) 2003-2006 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package form.validation
 *
 * Form validation check for alphanumeric (plus interior dash/underscore) characters only.
 *
 * $Id: FormValidatorAlphaNum.inc.php,v 1.4 2006/06/12 23:25:50 alec Exp $
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
