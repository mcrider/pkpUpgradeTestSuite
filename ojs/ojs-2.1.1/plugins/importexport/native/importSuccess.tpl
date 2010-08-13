{**
 * importSuccess.tpl
 *
 * Copyright (c) 2003-2006 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display a list of the successfully-imported entities.
 *
 * $Id: importSuccess.tpl,v 1.6 2006/06/12 23:26:21 alec Exp $
 *}

{assign var="pageTitle" value="plugins.importexport.native.import.success"}
{include file="common/header.tpl"}

<p>{translate key="plugins.importexport.native.import.success.description"}</p>

{if $issues}
<h3>{translate key="issue.issues"}</h3>
<ul>
	{foreach from=$issues item=issue}
		<li>{$issue->getIssueIdentification()|escape}</li>
	{/foreach}
	</ul>
{/if}

{if $articles}
<h3>{translate key="article.articles"}</h3>
<ul>
	{foreach from=$articles item=article}
		<li>{$article->getArticleTitle()|strip_unsafe_html}</li>
	{/foreach}
	</ul>
{/if}

{include file="common/footer.tpl"}
