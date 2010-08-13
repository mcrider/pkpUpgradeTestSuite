<?php

/**
 * @defgroup pages_oai
 */
 
/**
 * @file pages/oai/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_oai
 * @brief Handle Open Archives Initiative protocol interaction requests. 
 *
 */

// $Id: index.php,v 1.10 2009/12/10 00:57:45 asmecher Exp $


switch ($op) {
	case 'index':
		define('HANDLER_CLASS', 'OAIHandler');
		import('pages.oai.OAIHandler');
		break;
}

?>
