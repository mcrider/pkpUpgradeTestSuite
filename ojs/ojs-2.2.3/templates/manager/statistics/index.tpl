{**
 * index.tpl
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display the statistics & reporting page.
 *
 * $Id: index.tpl,v 1.6.2.1 2009/04/08 19:43:33 asmecher Exp $
 *}
{assign var="pageTitle" value="manager.statistics"}
{include file="common/header.tpl"}

<br/>

{include file="manager/statistics/statistics.tpl"}

<div class="separator">&nbsp;</div>

<br/>

<a name="statistics"></a>
<h3>{translate key="manager.statistics.reports"}</h3>
<p>{translate key="manager.statistics.reports.description"}</p>

<ul class="plain">
{foreach from=$reportPlugins key=key item=plugin}
	<li>&#187; <a href="{url op="report" path=$plugin->getName()|escape}">{$plugin->getDisplayName()|escape}</a></li>
{/foreach}
</ul>

{include file="common/footer.tpl"}
