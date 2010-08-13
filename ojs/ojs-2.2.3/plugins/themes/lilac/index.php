<?php

/**
 * @defgroup plugins_themes_lilac
 */
 
/**
 * @file plugins/themes/lilac/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_lilac
 * @brief Wrapper for "lilac" theme plugin.
 *
 */

// $Id: index.php,v 1.5.2.1 2009/04/08 19:43:27 asmecher Exp $


require_once('LilacThemePlugin.inc.php');

return new LilacThemePlugin();

?>
