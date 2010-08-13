<?php

/**
 * @defgroup pages_author
 */
 
/**
 * @file pages/author/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_author
 * @brief Handle requests for journal author functions. 
 *
 */

// $Id: index.php,v 1.10 2009/04/20 15:44:02 jalperin Exp $

switch ($op) {
	//
	// Article Submission
	//

	case 'submit':
	case 'saveSubmit':
	case 'submitSuppFile':
	case 'saveSubmitSuppFile':
	case 'deleteSubmitSuppFile':
	case 'expediteSubmission':
		define('HANDLER_CLASS', 'SubmitHandler');
		import('pages.author.SubmitHandler');
		break;
	//
	// Submission Tracking
	//
	case 'deleteArticleFile':
	case 'deleteSubmission':
	case 'submission':
	case 'editSuppFile':
	case 'setSuppFileVisibility':
	case 'saveSuppFile':
	case 'addSuppFile':
	case 'submissionReview':
	case 'submissionEditing':
	case 'uploadRevisedVersion':
	case 'viewMetadata':
	case 'saveMetadata':
	case 'removeArticleCoverPage':
	case 'uploadCopyeditVersion':
	case 'completeAuthorCopyedit':
	//
	// Misc.
	//
	case 'downloadFile':
	case 'viewFile':
	case 'download':
	//
	// Proofreading Actions
	//
	case 'authorProofreadingComplete':
	case 'proofGalley':
	case 'proofGalleyTop':
	case 'proofGalleyFile':
	// 
	// Payment Actions
	//
	case 'paySubmissionFee':
	case 'payFastTrackFee':
	case 'payPublicationFee':	
		define('HANDLER_CLASS', 'TrackSubmissionHandler');
		import('pages.author.TrackSubmissionHandler');
		break;
	//
	// Submission Comments
	//
	case 'viewEditorDecisionComments':
	case 'viewCopyeditComments':
	case 'postCopyeditComment':
	case 'emailEditorDecisionComment':
	case 'viewProofreadComments':
	case 'viewLayoutComments':
	case 'postLayoutComment':
	case 'postProofreadComment':
	case 'editComment':
	case 'saveComment':
	case 'deleteComment':
		define('HANDLER_CLASS', 'SubmissionCommentsHandler');
		import('pages.author.SubmissionCommentsHandler');
		break;
	default:	
		define('HANDLER_CLASS', 'AuthorHandler');
		import('pages.author.AuthorHandler');
}
?>