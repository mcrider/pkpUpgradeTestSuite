<?php

/**
 * @defgroup plugins_themes_desert
 */

/**
 * @file plugins/themes/desert/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_desert
 * @brief Wrapper for "desert" theme plugin.
 *
 */

// $Id: index.php,v 1.7 2009/05/12 16:57:21 asmecher Exp $


require_once('DesertThemePlugin.inc.php');

return new DesertThemePlugin();

?>
