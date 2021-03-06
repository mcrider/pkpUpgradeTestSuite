{**
 * citation.tpl
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Reference Manager citation format generator
 *
 * $Id: citation.tpl,v 1.3.2.1 2009/04/08 19:43:13 asmecher Exp $
 *}
{if $galleyId}
	{url|assign:"articleUrl" page="article" op="view" path=$articleId|to_array:$galleyId}
{else}
	{url|assign:"articleUrl" page="article" op="view" path=$articleId}
{/if}
TY  - JOUR
{foreach from=$article->getAuthors() item=author}
AU  - {$author->getFullName(true)|escape}
{/foreach}
PY  - {$article->getDatePublished()|date_format:"%Y"}
TI  - {$article->getArticleTitle()|strip_tags}
JF  - {$journal->getJournalTitle()|escape}{if $issue}; {$issue->getIssueIdentification()|escape}{/if}

Y2  - {$article->getDatePublished()|date_format:"%Y"}
KW  - {$article->getArticleSubject()|replace:';':','|escape}
N2  - {$article->getArticleAbstract()|strip_tags|replace:"\n":" "|replace:"\r":" "}
UR  - {$articleUrl}

