<?php

/**
 * @defgroup plugins_themes_classicGreen
 */
 
/**
 * @file plugins/themes/classicGreen/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_classicGreen
 * @brief Wrapper for "classic green" theme plugin.
 *
 */

// $Id: index.php,v 1.5.2.1 2009/04/08 19:43:27 asmecher Exp $


require_once('ClassicGreenThemePlugin.inc.php');

return new ClassicGreenThemePlugin();

?>
