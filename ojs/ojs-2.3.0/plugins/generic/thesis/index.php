<?php

/**
 * @defgroup plugins_generic_thesis
 */
 
/**
 * @file plugins/generic/thesis/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_thesis
 * @brief Wrapper for Thesis Abstracts plugin.
 *
 */

// $Id: index.php,v 1.9 2009/04/08 19:54:42 asmecher Exp $


require_once('ThesisPlugin.inc.php');

return new ThesisPlugin();

?>
