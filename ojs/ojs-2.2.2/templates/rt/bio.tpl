{**
 * bio.tpl
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Article reading tools -- author bio page.
 *
 * $Id: bio.tpl,v 1.16 2008/06/11 18:55:21 asmecher Exp $
 *}
{assign var=pageTitle value="rt.authorBio"}
{include file="rt/header.tpl"}

<h3>{$article->getArticleTitle()|strip_unsafe_html}</h3>

{foreach from=$article->getAuthors() item=author name=authors}
<p>
	<em>{$author->getFullName()|escape}</em><br />
	{if $author->getUrl()}<a href="{$author->getUrl()|escape:"quotes"}">{$author->getUrl()|escape}</a><br/>{/if}
	{if $author->getAffiliation()}{$author->getAffiliation()|escape}{/if}
	{if $author->getCountry()}<br/>{$author->getCountryLocalized()|escape}{/if}
</p>

<p>{$author->getAuthorBiography()|strip_unsafe_html|nl2br}</p>

{if !$smarty.foreach.authors.last}<div class="separator"></div>{/if}

{/foreach}

{include file="rt/footer.tpl"}
