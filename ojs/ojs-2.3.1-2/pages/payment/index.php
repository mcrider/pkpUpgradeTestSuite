<?php

/**
 * @defgroup pages_payment
 */
 
/**
 * @file pages/payment/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_payment
 * @brief Handle requests for interactions between the payment system and external
 * sites/systems.
 */

// $Id: index.php,v 1.5 2009/12/10 00:57:45 asmecher Exp $


switch ($op) {
	case 'plugin':
		define('HANDLER_CLASS', 'PaymentHandler');
		import('pages.payment.PaymentHandler');
		break;
}

?>
