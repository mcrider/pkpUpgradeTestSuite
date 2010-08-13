<?php

/**
 * @defgroup pages_article
 */
 
/**
 * @file pages/article/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_article
 * @brief Handle requests for article functions. 
 *
 */

// $Id: index.php,v 1.10 2009/12/10 00:57:44 asmecher Exp $

switch ($op) {
	case 'view':
	case 'viewPDFInterstitial':
	case 'viewDownloadInterstitial':
	case 'viewArticle':
	case 'viewRST':
	case 'viewFile':
	case 'download':
	case 'downloadSuppFile':
		define('HANDLER_CLASS', 'ArticleHandler');
		import('pages.article.ArticleHandler');
		break;
}

?>
