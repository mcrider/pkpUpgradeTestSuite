{**
 * footer.tpl
 *
 * Copyright (c) 2003-2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site footer.
 *
 * $Id: footer.tpl,v 1.9 2005/01/20 11:30:32 kevin Exp $
 *}

{if $pageFooter}
<br /><br />
{$pageFooter}
{/if}
</div>
</div>
</div>

<div id="footer">
	<div id="footerContent">
		{if $enableDebugStats}
		<div class="debugStats">
		{translate key="debug.executionTime"}: {$debugExecutionTime|string_format:"%.4f"}s<br />
		{translate key="debug.databaseQueries"}: {$debugNumDatabaseQueries}
		</div>
		{/if}
	</div>
</div>

</div>
</body>
</html>
