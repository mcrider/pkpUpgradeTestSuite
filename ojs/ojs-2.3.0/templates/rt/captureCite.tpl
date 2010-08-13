{**
 * captureCite.tpl
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Article reading tools -- Capture Citation
 *
 * $Id: captureCite.tpl,v 1.20 2009/05/26 01:31:18 mcrider Exp $
 *}
{strip}
{assign var=pageTitle value="rt.captureCite"}
{include file="rt/header.tpl"}
{/strip}

{if $galleyId}
	{url|assign:"articleUrl" page="article" op="view" path=$articleId|to_array:$galleyId}
{else}
	{url|assign:"articleUrl" page="article" op="view" path=$articleId}
{/if}
<div id="captureCite">
<h3>{$article->getLocalizedTitle()|strip_unsafe_html}</h3>

<form action="#">
<label for="citeType">{translate key="rt.captureCite.format"}</label>&nbsp;&nbsp;<select onchange="document.location='{url path=$articleId|to_array:$galleyId:"REPLACE"}'.replace('REPLACE', this.options[this.selectedIndex].value)">
	{foreach from=$citationPlugins item=thisCitationPlugin}
		<option {if $citationPlugin && $citationPlugin->getName() == $thisCitationPlugin->getName()}selected="selected" {/if}value="{$thisCitationPlugin->getName()|escape}">{$thisCitationPlugin->getCitationFormatName()|escape}</option>
	{/foreach}
</select>
	
</form>

{call_hook name="Template::RT::CaptureCite"}
</div>
<div class="separator"></div>

{include file="rt/footer.tpl"}
