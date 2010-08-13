<?php

/**
 * @defgroup rt_ojs
 */
 

/**
 * @file classes/rt/ojs/JournalRT.inc.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class JournalRT
 * @ingroup rt_ojs
 *
 * @brief OJS-specific Reading Tools end-user interface.
 */

// $Id: JournalRT.inc.php,v 1.10.2.1 2009/04/08 19:42:49 asmecher Exp $


import('rt.RT');
import('rt.ojs.RTDAO');

class JournalRT extends RT {
	var $journalId;
	var $enabled;

	function JournalRT($journalId) {
		$this->setJournalId($journalId);
	}

	// Getter/setter methods

	function getJournalId() {
		return $this->journalId;
	}

	function setJournalId($journalId) {
		$this->journalId = $journalId;
	}
}

?>
