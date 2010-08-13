{**
 * block.tpl
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site sidebar menu -- help pop-up link.
 *
 * $Id: block.tpl,v 1.3 2009/04/08 19:54:34 asmecher Exp $
 *}
<div class="block" id="sidebarHelp">
	<a class="blockTitle" href="javascript:openHelp('{if $helpTopicId}{get_help_id key="$helpTopicId" url="true"}{else}{url page="help"}{/if}')">{translate key="navigation.journalHelp"}</a>
</div>
