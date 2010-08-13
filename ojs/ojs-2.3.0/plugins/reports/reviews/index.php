<?php

/**
 * @defgroup plugins_reports_reviews
 */
 
/**
 * @file index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Wrapper for review report plugin.
 *
 * @ingroup plugins_reports_reviews
 */

//$Id: index.php,v 1.1 2009/05/15 20:58:49 asmecher Exp $

require_once('ReviewReportPlugin.inc.php');

return new ReviewReportPlugin();

?>
