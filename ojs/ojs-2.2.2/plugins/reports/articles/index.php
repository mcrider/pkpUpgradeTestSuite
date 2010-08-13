<?php

/**
 * @defgroup plugins_reports_article
 */
 
/**
 * @file plugins/reports/articles/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_reports_article
 * @brief Wrapper for article report plugin.
 *
 */

// $Id: index.php,v 1.2 2008/07/01 01:16:14 asmecher Exp $


require_once('ArticleReportPlugin.inc.php');

return new ArticleReportPlugin();

?>
