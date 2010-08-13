<?php

/**
 * @defgroup plugins_generic_coins
 */
 
/**
 * @file plugins/generic/coins/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_coins
 * @brief Wrapper for COinS plugin.
 *
 */

// $Id: index.php,v 1.2.2.1 2009/04/08 19:43:15 asmecher Exp $


require_once('CoinsPlugin.inc.php');

return new CoinsPlugin();

?>
