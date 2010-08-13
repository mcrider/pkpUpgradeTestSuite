<?php

/**
 * @defgroup pages_announcement
 */
 
/**
 * @file pages/announcement/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_announcement
 * @brief Handle requests for public announcement functions. 
 *
 */

// $Id: index.php,v 1.11 2009/12/10 00:57:44 asmecher Exp $

switch ($op) {
	case 'index':
	case 'view':
		define('HANDLER_CLASS', 'AnnouncementHandler');
		import('pages.announcement.AnnouncementHandler');
		break;
}

?>
