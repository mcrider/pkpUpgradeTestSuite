{**
 * error.tpl
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Generic error page.
 * Displays a simple error message and (optionally) a return link.
 *
 * $Id: error.tpl,v 1.2 2005/07/11 22:35:30 alec Exp $
 *}

{include file="common/header.tpl"}

<span class="errorText">{translate key=$errorMsg params=$errorParams}</span>

{if $backLink}
<br /><br />
&#187; <a href="{$backLink}">{translate key="$backLinkLabel"}</a>
{/if}

{include file="common/footer.tpl"}
