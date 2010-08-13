<?php

/**
 * EditorSubmission.inc.php
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package submission
 *
 * EditorSubmission class.
 *
 * $Id: EditorSubmission.inc.php,v 1.4 2005/04/25 20:38:12 alec Exp $
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
