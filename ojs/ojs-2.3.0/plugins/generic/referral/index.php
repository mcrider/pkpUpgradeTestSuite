<?php

/**
 * @defgroup plugins_generic_referral
 */
 
/**
 * @file plugins/generic/referral/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_referral
 * @brief Wrapper for referral plugin.
 *
 */

// $Id: index.php,v 1.2 2009/04/08 19:54:42 asmecher Exp $


require_once('ReferralPlugin.inc.php');

return new ReferralPlugin();

?>
