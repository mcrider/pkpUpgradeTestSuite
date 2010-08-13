<?php

/**
 * @defgroup plugins_themes_night
 */
 
/**
 * @file plugins/themes/night/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_night
 * @brief Wrapper for "night" theme plugin.
 *
 */

// $Id: index.php,v 1.5 2008/07/01 01:16:14 asmecher Exp $


require_once('NightThemePlugin.inc.php');

return new NightThemePlugin();

?>
