<?php

/**
 * @file EditorSubmission.inc.php
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package submission
 * @class EditorSubmission
 *
 * EditorSubmission class.
 *
 * $Id: EditorSubmission.inc.php,v 1.7 2007/07/23 22:28:20 asmecher Exp $
 */

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
