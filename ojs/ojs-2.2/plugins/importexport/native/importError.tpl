{**
 * importError.tpl
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display an error message for an aborted import process.
 *
 * $Id: importError.tpl,v 1.5 2007/09/04 16:31:43 asmecher Exp $
 *}
{assign var="pageTitle" value="plugins.importexport.native.import.error"}
{include file="common/header.tpl"}

<p>{translate key="plugins.importexport.native.import.error.description"}</p>
{if $error}
	<!-- A single error occurred. -->
	<p>{translate key=$error}</p>
{else}
	<!-- Multiple errors occurred. List them. -->
	<ul>
	{foreach from=$errors item=error}
		<li>{translate key=$error[0] params=$error[1]}</li>
	{/foreach}
	</ul>
{/if}

{include file="common/footer.tpl"}
