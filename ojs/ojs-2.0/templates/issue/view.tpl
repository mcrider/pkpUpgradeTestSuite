{**
 * archive.tpl
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Issue Archive.
 *
 * $Id: view.tpl,v 1.5 2005/05/16 05:24:52 kevin Exp $
 *}

{assign var="pageTitleTranslated" value=$issueTitle}
{assign var="pageCrumbTitleTranslated" value=$issueCrumbTitle}
{include file="common/header.tpl"}

{if !$showToc && $issue}
	<ul class="menu">
		<li><a href="{$requestPageUrl}/view/{$issueId}/showToc">{translate key="issue.toc"}</a></li>
	</ul>
	<br />
	<div><a href="{$requestPageUrl}/view/{$issueId}/showToc"><img src="{$coverPagePath}" border="0" alt="" /></a></div>
	<div>{$issue->getCoverPageDescription()}</div>
{else}
	{if $issue}<h3>{translate key="issue.toc"}</h3>{/if}
	{include file="issue/issue.tpl"}
{/if}

{include file="common/footer.tpl"}
