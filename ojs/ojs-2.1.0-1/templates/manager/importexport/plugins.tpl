{**
 * plugins.tpl
 *
 * Copyright (c) 2003-2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * List available import/export plugins.
 *
 * $Id: plugins.tpl,v 1.3 2005/11/26 19:45:40 alec Exp $
 *}

{assign var="pageTitle" value="manager.importExport"}
{include file="common/header.tpl"}

<ul>
	{foreach from=$plugins item=plugin}
	<li><a href="{url op="importexport" path="plugin"|to_array:$plugin->getName()}">{$plugin->getDisplayName()|escape}</a>:&nbsp;{$plugin->getDescription()|escape}</li>
	{/foreach}
</ul>

{include file="common/footer.tpl"}
