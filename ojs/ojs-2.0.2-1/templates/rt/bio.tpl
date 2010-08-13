{**
 * bio.tpl
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Article reading tools -- author bio page.
 *
 * $Id: bio.tpl,v 1.5 2005/08/03 19:40:30 alec Exp $
 *}

{assign var=pageTitle value="rt.aboutAuthor"}

{include file="rt/header.tpl"}

<h3>"{$article->getArticleTitle()|escape}"</h3>

{foreach from=$article->getAuthors() item=author name=authors}
<p>
	<i>{$author->getFullName()|escape}</i><br />
	{if $author->getAffiliation()}{$author->getAffiliation()|escape}{/if}
</p>

<p>{$author->getBiography()|escape|nl2br}</p>

{if !$smarty.foreach.authors.last}<div class="separator"></div>{/if}

{/foreach}

{include file="rt/footer.tpl"}
