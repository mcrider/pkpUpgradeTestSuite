{**
 * pageTagGa.tpl
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Google Analytics ga.js page tag.
 *
 * $Id: pageTagGa.tpl,v 1.2 2008/06/11 18:55:13 asmecher Exp $
 *}
<!-- Google Analytics -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("{$googleAnalyticsSiteId|escape}");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<!-- /Google Analytics -->

