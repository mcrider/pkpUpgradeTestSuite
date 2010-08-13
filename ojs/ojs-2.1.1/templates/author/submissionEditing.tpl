{**
 * submissionEditing.tpl
 *
 * Copyright (c) 2003-2006 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Author's submission editing.
 *
 * $Id: submissionEditing.tpl,v 1.23 2006/06/12 23:26:26 alec Exp $
 *}

{translate|assign:"pageTitleTranslated" key="submission.page.editing" id=$submission->getArticleId()}
{assign var="pageCrumbTitle" value="submission.editing"}
{include file="common/header.tpl"}

<ul class="menu">
	<li><a href="{url op="submission" path=$submission->getArticleId()}">{translate key="submission.summary"}</a></li>
	<li><a href="{url op="submissionReview" path=$submission->getArticleId()}">{translate key="submission.review"}</a></li>
	<li class="current"><a href="{url op="submissionEditing" path=$submission->getArticleId()}">{translate key="submission.editing"}</a></li>
</ul>

{include file="author/submission/summary.tpl"}

<div class="separator"></div>

{include file="author/submission/copyedit.tpl"}

<div class="separator"></div>

{include file="author/submission/layout.tpl"}

<div class="separator"></div>

{include file="author/submission/proofread.tpl"}

{include file="common/footer.tpl"}
