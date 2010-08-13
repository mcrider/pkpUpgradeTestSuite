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

// $Id: index.php,v 1.4 2009/04/08 19:54:33 asmecher Exp $


define('HANDLER_CLASS', 'PaymentHandler');

import('pages.payment.PaymentHandler');

?>
