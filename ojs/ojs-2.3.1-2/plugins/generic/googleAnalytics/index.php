<?php

/**
 * @defgroup plugins_generic_googleAnalytics
 */
 
/**
 * @file plugins/generic/googleAnalytics/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_googleAnalytics
 * @brief Wrapper for Google Analytics plugin.
 *
 */

// $Id: index.php,v 1.6 2009/04/08 19:54:41 asmecher Exp $


require_once('GoogleAnalyticsPlugin.inc.php');

return new GoogleAnalyticsPlugin();

?>
