<?php

/**
 * @defgroup plugins_paymethod_manual
 */
 
/**
 * @file plugins/paymethod/manual/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_paymethod_manual
 * @brief Wrapper for manual payment plugin.
 *
 */

//$Id: index.php,v 1.5 2009/10/06 20:59:15 asmecher Exp $

require_once('ManualPaymentPlugin.inc.php');

return new ManualPaymentPlugin();

?> 
