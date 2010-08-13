<?php

/**
 * @defgroup pages_rtadmin
 */
 
/**
 * @file pages/rtadmin/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_rtadmin
 * @brief Handle requests for RT admin functions. 
 *
 */

// $Id: index.php,v 1.15 2009/12/10 00:57:45 asmecher Exp $


switch ($op) {
	//
	// General
	//
	case 'settings':
	case 'saveSettings':
		define('HANDLER_CLASS', 'RTSetupHandler');
		import('pages.rtadmin.RTSetupHandler');
		break;
	//
	// Versions
	//
	case 'createVersion':
	case 'exportVersion':
	case 'importVersion':
	case 'restoreVersions':
	case 'versions':
	case 'editVersion':
	case 'deleteVersion':
	case 'saveVersion':
		define('HANDLER_CLASS', 'RTVersionHandler');		
		import('pages.rtadmin.RTVersionHandler');
		break;
	//
	// Contexts
	//
	case 'createContext':
	case 'contexts':
	case 'editContext':
	case 'saveContext':
	case 'deleteContext':
	case 'moveContext':
		define('HANDLER_CLASS', 'RTContextHandler');
		import('pages.rtadmin.RTContextHandler');
		break;
	//
	// Searches
	//
	case 'createSearch':
	case 'searches':
	case 'editSearch':
	case 'saveSearch':
	case 'deleteSearch':
	case 'moveSearch':
		define('HANDLER_CLASS', 'RTSearchHandler');		
		import('pages.rtadmin.RTSearchHandler');
		break;
	case 'index':
	case 'configureSharing':
	case 'saveConfigureSharing':
	case 'validateUrls':
		define('HANDLER_CLASS', 'RTAdminHandler');
		import('pages.rtadmin.RTAdminHandler');
		break;
}

?>
