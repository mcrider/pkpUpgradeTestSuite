{**
 * pageTagUrchin.tpl
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Google Analytics urchin.js (legacy) page tag.
 *
 * $Id: pageTagUrchin.tpl,v 1.3 2009/04/08 19:54:41 asmecher Exp $
 *}
<!-- Google Analytics -->
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "{$googleAnalyticsSiteId|escape}";
urchinTracker();
</script>
<!-- /Google Analytics -->

