<?php

/**
 * @defgroup pages_payment
 */
 
/**
 * @file pages/payment/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_payment
 * @brief Handle requests for interactions between the payment system and external
 * sites/systems.
 */

// $Id: index.php,v 1.3 2008/07/01 01:16:12 asmecher Exp $


define('HANDLER_CLASS', 'PaymentHandler');

import('pages.payment.PaymentHandler');

?>
