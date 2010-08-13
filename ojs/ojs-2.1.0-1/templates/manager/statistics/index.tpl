{**
 * index.tpl
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display the statistics & reporting page.
 *
 * $Id: index.tpl,v 1.1 2005/11/26 19:45:40 alec Exp $
 *}

{assign var="pageTitle" value="manager.statistics"}
{include file="common/header.tpl"}
<br/>

{include file="manager/statistics/statistics.tpl"}

<div class="separator">&nbsp;</div>

<br/>

{include file="manager/statistics/reportGenerator.tpl"}

{include file="common/footer.tpl"}
