<?php

/**
 * @defgroup pages_sitemap
 */
 
/**
 * @file pages/sitemap/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_sitemap
 * @brief Produce a sitemap in XML format for submitting to search engines. 
 *
 */

// $Id: index.php,v 1.1 2009/05/22 16:43:42 mcrider Exp $


define('HANDLER_CLASS', 'SitemapHandler');

import('pages.sitemap.SitemapHandler');

?>
