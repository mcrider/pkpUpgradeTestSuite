{**
 * view.tpl
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * View issue -- This displays the issue TOC or title page, as appropriate,
 * *without* header or footer HTML (see viewPage.tpl)
 *
 * $Id: view.tpl,v 1.9 2005/11/26 19:45:36 alec Exp $
 *}

{if !$showToc && $issue}
	<ul class="menu">
		<li><a href="{url op="view" path=$issueId|to_array:"showToc"}">{translate key="issue.toc"}</a></li>
	</ul>
	<br />
	{if $coverPagePath}<div><a href="{url op="view" path=$issueId|to_array:"showToc"}"><img src="{$coverPagePath|escape}" border="0" alt=""{if $width} width="{$width}"{/if}{if $height} height="{$height}"{/if}/></a></div>{/if}
	<div>{$issue->getCoverPageDescription()|escape|nl2br}</div>
{else}
	{if $issue}<h3>{translate key="issue.toc"}</h3>{/if}
	{include file="issue/issue.tpl"}
{/if}

