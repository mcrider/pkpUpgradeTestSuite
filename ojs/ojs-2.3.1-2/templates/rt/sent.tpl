{**
 * bio.tpl
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * RT Email Sent page.
 *
 * $Id: sent.tpl,v 1.10 2009/04/08 19:54:52 asmecher Exp $
 *}
{strip}
{assign var=pageTitle value="email.email"}
{include file="rt/header.tpl"}
{/strip}

<p>{translate key="rt.email.sent"}</p>

{include file="rt/footer.tpl"}
