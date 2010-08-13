{**
 * formErrors.tpl
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * List errors that occurred during form processing.
 *
 * $Id: formErrors.tpl,v 1.3 2005/02/14 05:35:00 kevin Exp $
 *}

{if $isError}
<p>
	<span class="formError">{translate key="form.errorsOccurred"}:</span>
	<ul class="formErrorList">
	{foreach key=field item=message from=$errors}
		<li>{translate key="$message"}</li>
	{/foreach}
	</ul>
</p>
{/if}
