<?php

/**
 * @defgroup plugins_themes_classicBlue
 */
 
/**
 * @file plugins/themes/classicBlue/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_classicBlue
 * @brief Wrapper for "classic blue" theme plugin.
 *
 */

// $Id: index.php,v 1.5.2.1 2009/04/08 19:43:27 asmecher Exp $


require_once('ClassicBlueThemePlugin.inc.php');

return new ClassicBlueThemePlugin();

?>
