<?php 

/**
 * @defgroup plugins_generic_customLocale
 */
 
/**
 * @file plugins/generic/customLocale/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_customLocale
 * @brief Wrapper for custom locale plugin. Plugin based on Translator plugin.
 *
 */

// $Id: index.php,v 1.4 2009/04/08 19:54:40 asmecher Exp $


require_once('CustomLocalePlugin.inc.php');

return new CustomLocalePlugin(); 

?> 
