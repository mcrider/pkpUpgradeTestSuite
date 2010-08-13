<?php 

/**
 * @defgroup plugins_generic_translator
 */
 
/**
 * @file plugins/generic/translator/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_translator
 * @brief Wrapper for translation maintenance plugin.
 *
 */

// $Id: index.php,v 1.8 2008/07/01 01:16:13 asmecher Exp $


require_once('TranslatorPlugin.inc.php');

return new TranslatorPlugin(); 

?> 
