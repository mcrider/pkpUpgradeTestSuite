{**
 * view.tpl
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * View issue -- This displays the issue TOC or title page, as appropriate,
 * *without* header or footer HTML (see viewPage.tpl)
 *
 * $Id: view.tpl,v 1.6 2005/06/24 21:50:21 alec Exp $
 *}

{if !$showToc && $issue}
	<ul class="menu">
		<li><a href="{$pageUrl}/issue/view/{$issueId}/showToc">{translate key="issue.toc"}</a></li>
	</ul>
	<br />
	<div><a href="{$pageUrl}/issue/view/{$issueId}/showToc"><img src="{$coverPagePath}" border="0" alt="" /></a></div>
	<div>{$issue->getCoverPageDescription()}</div>
{else}
	{if $issue}<h3>{translate key="issue.toc"}</h3>{/if}
	{include file="issue/issue.tpl"}
{/if}

