<?php

/**
 * @defgroup plugins_generic_tinymce
 */
 
/**
 * @file plugins/generic/tinymce/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_tinymce
 * @brief Wrapper for TinyMCE plugin.
 *
 */

// $Id: index.php,v 1.10 2009/04/08 19:54:43 asmecher Exp $


require_once('TinyMCEPlugin.inc.php');

return new TinyMCEPlugin();

?> 
