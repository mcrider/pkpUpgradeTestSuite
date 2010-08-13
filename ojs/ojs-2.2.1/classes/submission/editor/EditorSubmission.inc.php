<?php

/**
 * @file classes/submission/editor/EditorSubmission.inc.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class EditorSubmission
 * @ingroup submission
 * @see EditorSubmissionDAO
 *
 * @brief EditorSubmission class.
 */

// $Id: EditorSubmission.inc.php,v 1.9 2008/07/01 01:16:11 asmecher Exp $


import('submission.sectionEditor.SectionEditorSubmission');

class EditorSubmission extends SectionEditorSubmission {

	/**
	 * Constructor.
	 */
	function EditorSubmission() {
		parent::SectionEditorSubmission();
	}
}

?>
