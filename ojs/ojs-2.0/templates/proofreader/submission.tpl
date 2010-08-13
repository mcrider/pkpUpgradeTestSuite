{**
 * submission.tpl
 *
 * Copyright (c) 2003-2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Show the details of a submission.
 *
 *
 * $Id: submission.tpl,v 1.9 2005/02/26 23:20:42 kevin Exp $
 *}

{assign_translate var="pageTitleTranslated" key="submission.page.editing" id=$submission->getArticleId()}
{assign var="pageCrumbTitle" value="submission.editing"}

{include file="common/header.tpl"}

{include file="proofreader/submission/summary.tpl"}

<div class="separator"></div>

{include file="proofreader/submission/layout.tpl"}

<div class="separator"></div>

{include file="proofreader/submission/proofread.tpl"}

{include file="common/footer.tpl"}
