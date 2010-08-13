{**
 * error.tpl
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Generic error page.
 * Displays a simple error message and (optionally) a return link.
 *
 * $Id: error.tpl,v 1.1 2004/02/02 06:47:12 kevin Exp $
 *}

{include file="common/header.tpl"}

<span class="errorText">{translate key=$errorMsg}</span>

{if $backLink}
<br /><br />
&#187; <a href="{$backLink}">{translate key="$backLinkLabel"}</a>
{/if}

{include file="common/footer.tpl"}
