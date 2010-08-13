<?php

/**
 * EditorSubmission.inc.php
 *
 * Copyright (c) 2003-2006 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package submission
 *
 * EditorSubmission class.
 *
 * $Id: EditorSubmission.inc.php,v 1.5 2006/06/12 23:25:54 alec Exp $
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
