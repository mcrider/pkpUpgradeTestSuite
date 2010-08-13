{**
 * footer.tpl
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common footer for RT pages.
 *
 * $Id: footer.tpl,v 1.12 2007/09/04 16:31:47 asmecher Exp $
 *}
<br />

{if !$omitCloseButton}
<input type="button" onclick="window.close()" value="{translate key="common.close"}" class="button defaultButton" />
{/if}

{call_hook name="Templates::Rt::Footer::PageFooter"}
</div>
</div>
</div>
</div>
</body>
</html>
