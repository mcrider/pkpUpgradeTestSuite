<?php

/**
 * @defgroup plugins_generic_thesis
 */
 
/**
 * @file plugins/generic/thesis/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_thesis
 * @brief Wrapper for Thesis Abstracts plugin.
 *
 */

// $Id: index.php,v 1.8 2008/07/01 01:16:13 asmecher Exp $


require_once('ThesisPlugin.inc.php');

return new ThesisPlugin();

?>
