<?php

/**
 * @defgroup plugins_citationFormats_cbe
 */
 
/**
 * @file plugins/citationFormats/cbe/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_citationFormats_cbe
 * @brief Wrapper for CBE citation plugin.
 *
 */

// $Id: index.php,v 1.5.2.1 2009/04/08 19:43:12 asmecher Exp $


require_once('CbeCitationPlugin.inc.php');

return new CbeCitationPlugin();

?>
