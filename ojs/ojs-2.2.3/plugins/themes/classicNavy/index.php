<?php

/**
 * @defgroup plugins_themes_classicNavy
 */
 
/**
 * @file plugins/themes/classicNavy/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_classicNavy
 * @brief Wrapper for "classic navy" theme plugin.
 *
 */

// $Id: index.php,v 1.5.2.1 2009/04/08 19:43:27 asmecher Exp $


require_once('ClassicNavyThemePlugin.inc.php');

return new ClassicNavyThemePlugin();

?>
