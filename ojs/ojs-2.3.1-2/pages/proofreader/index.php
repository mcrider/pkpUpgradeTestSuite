<?php

/**
 * @defgroup pages_proofreader
 */
 
/**
 * @file pages/proofreader/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_proofreader
 * @brief Handle requests for proofreader functions. 
 *
 */

// $Id: index.php,v 1.11 2009/12/10 00:57:45 asmecher Exp $

switch ($op) {
	//
	// Submission Proofreading
	//
	case 'submission':
	case 'completeProofreader':
	//
	// Misc.
	//
	case 'downloadFile':
	case 'viewFile':
	case 'proofGalley':
	case 'proofGalleyTop':
	case 'proofGalleyFile':
	case 'viewMetadata':
		define('HANDLER_CLASS', 'SubmissionProofreadHandler');
		import('pages.proofreader.SubmissionProofreadHandler');
		break;
	//
	// Submission Comments
	//
	case 'viewProofreadComments':
	case 'postProofreadComment':
	case 'viewLayoutComments':
	case 'postLayoutComment':
	case 'editComment':
	case 'deleteComment':
	case 'saveComment':
		define('HANDLER_CLASS', 'SubmissionCommentsHandler');
		import('pages.proofreader.SubmissionCommentsHandler');
		break;
	case 'index':
	case 'instructions':
		define('HANDLER_CLASS', 'ProofreaderHandler');
		import('pages.proofreader.ProofreaderHandler');
}

?>
