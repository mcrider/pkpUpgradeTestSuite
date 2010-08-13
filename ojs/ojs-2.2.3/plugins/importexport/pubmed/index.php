<?php

/**
 * @defgroup plugins_importexport_pubmed
 */
 
/**
 * @file plugins/importexport/pubmed/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_importexport_pubmed
 * @brief Wrapper for PubMed export plugin.
 *
 */

// $Id: index.php,v 1.8.2.1 2009/04/08 19:43:24 asmecher Exp $


require_once('PubMedExportPlugin.inc.php');

return new PubMedExportPlugin();

?>
