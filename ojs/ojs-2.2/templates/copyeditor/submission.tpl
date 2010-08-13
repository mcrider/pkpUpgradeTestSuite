{**
 * submission.tpl
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Copyeditor's submission view.
 *
 * $Id: submission.tpl,v 1.15 2007/09/04 16:31:44 asmecher Exp $
 *}
{translate|assign:"pageTitleTranslated" key="submission.page.editing" id=$submission->getArticleId()}
{assign var="pageCrumbTitle" value="submission.editing"}
{include file="common/header.tpl"}

{include file="copyeditor/submission/summary.tpl"}

<div class="separator"></div>

{include file="copyeditor/submission/copyedit.tpl"}

<div class="separator"></div>

{include file="copyeditor/submission/layout.tpl"}

{include file="common/footer.tpl"}
