<?php

/**
 * @defgroup pages_search
 */
 
/**
 * @file pages/search/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_search
 * @brief Handle search requests. 
 *
 */

// $Id: index.php,v 1.10 2009/12/10 00:57:45 asmecher Exp $


switch ($op) {
	case 'index':
	case 'search':
	case 'advanced':
	case 'authors':
	case 'titles':
	case 'results':
	case 'advancedResults':
		define('HANDLER_CLASS', 'SearchHandler');
		import('pages.search.SearchHandler');
		break;
}

?>
