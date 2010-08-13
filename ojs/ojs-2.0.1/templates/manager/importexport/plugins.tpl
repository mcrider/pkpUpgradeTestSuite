{**
 * plugins.tpl
 *
 * Copyright (c) 2003-2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * List available import/export plugins.
 *
 * $Id: plugins.tpl,v 1.1 2005/06/04 00:44:42 alec Exp $
 *}

{assign var="pageTitle" value="manager.importExport"}
{include file="common/header.tpl"}

<ul>
	{foreach from=$plugins item=plugin}
	<li><a href="{$pageUrl}/manager/importexport/plugin/{$plugin->getName()|escape}">{$plugin->getDisplayName()}</a>:&nbsp;{$plugin->getDescription()}</li>
	{/foreach}
</ul>

{include file="common/footer.tpl"}
