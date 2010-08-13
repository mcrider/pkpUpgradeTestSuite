<?php

/**
 * @defgroup plugins_generic_tinymce
 */
 
/**
 * @file plugins/generic/tinymce/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_tinymce
 * @brief Wrapper for TinyMCE plugin.
 *
 */

// $Id: index.php,v 1.9 2008/07/01 01:16:13 asmecher Exp $


require_once('TinyMCEPlugin.inc.php');

return new TinyMCEPlugin();

?> 
