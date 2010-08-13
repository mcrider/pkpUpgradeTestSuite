<?php

/**
 * @defgroup pages_donations
 */
 
/**
 * @file pages/donations/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_donations
 * @brief Handle requests for journal donations 
 *
 *
 */

// $Id: index.php,v 1.5 2009/12/10 00:57:45 asmecher Exp $


switch ($op) {
	case 'index':
	case 'thankYou':
		define('HANDLER_CLASS', 'DonationsHandler');
		import('pages.donations.DonationsHandler');
		break;
}

?>
