{**
 * progress.tpl
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Generic progress bar page.
 * Displays a simple message and progress bar.
 *
 * $Id: progress.tpl,v 1.6 2009/04/08 19:54:51 asmecher Exp $
 *}
{strip}
{include file="common/header.tpl"}
{/strip}

<p>{translate key=$message}</p>

<div class="progressbar">
  {call_progress_function}
</div>

{if $backLink}
<p>&#187; <a href="{$backLink}">{translate key="$backLinkLabel"}</a></p>
{/if}

{include file="common/footer.tpl"}
