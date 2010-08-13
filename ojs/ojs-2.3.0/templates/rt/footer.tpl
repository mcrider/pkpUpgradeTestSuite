{**
 * footer.tpl
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common footer for RT pages.
 *
 * $Id: footer.tpl,v 1.14 2009/04/08 19:54:52 asmecher Exp $
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
