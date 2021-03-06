<?php

/**
 * @defgroup plugins_themes_custom
 */
 
/**
 * @file plugins/themes/custom/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_custom
 * @brief Wrapper for "custom" theme plugin.
 *
 */

// $Id: index.php,v 1.3 2008/07/01 01:16:14 asmecher Exp $


require_once('CustomThemePlugin.inc.php');

return new CustomThemePlugin();

?>
