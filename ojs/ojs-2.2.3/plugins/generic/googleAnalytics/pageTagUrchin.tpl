{**
 * pageTagUrchin.tpl
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Google Analytics urchin.js (legacy) page tag.
 *
 * $Id: pageTagUrchin.tpl,v 1.2.2.1 2009/04/08 19:43:16 asmecher Exp $
 *}
<!-- Google Analytics -->
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "{$googleAnalyticsSiteId|escape}";
urchinTracker();
</script>
<!-- /Google Analytics -->

