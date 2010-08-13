<?php

/**
 * @defgroup plugins_themes_classicBrown
 */

/**
 * @file plugins/themes/classicBrown/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_classicBrown
 *
 * @brief Wrapper for "classic brown" theme plugin.
 */

// $Id: index.php,v 1.7 2009/05/12 16:57:21 asmecher Exp $


require_once('ClassicBrownThemePlugin.inc.php');

return new ClassicBrownThemePlugin();

?>
