<?php

/**
 * @defgroup plugins_citationFormats_proCite
 */
 
/**
 * @file plugins/citationFormats/refWorks/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_citationFormats_proCite
 * @brief Wrapper for RefWorks citation plugin.
 *
 */

// $Id: index.php,v 1.3.2.1 2009/04/08 19:43:13 asmecher Exp $


require_once('RefWorksCitationPlugin.inc.php');

return new RefWorksCitationPlugin();

?>
