{**
 * index.tpl
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Journal index page.
 *
 * $Id: journal.tpl,v 1.13 2005/06/24 21:51:49 alec Exp $
 *}

{assign var="pageTitleTranslated" value=$siteTitle}
{include file="common/header.tpl"}

<div>{$journalDescription}</div>

<br />

{if $homepageImage}
<div align="center"><img src="{$publicFilesDir}/{$homepageImage.uploadName}" width="{$homepageImage.width}" height="{$homepageImage.height}" border="0" alt="" /></div>
{/if}

<br /><br />

{$additionalHomeContent}

{if $issue}
	{* Display the table of contents or cover page of the current issue. *}
	<br/>&nbsp;
	<h3>{$issue->getIssueIdentification()}</h3>
	{include file="issue/view.tpl"}
{/if}

{include file="common/footer.tpl"}
