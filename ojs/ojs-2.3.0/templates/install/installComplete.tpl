{**
 * installComplete.tpl
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display confirmation of successful installation.
 * If necessary, will also display new config file contents if config file could not be written.
 *
 * $Id: installComplete.tpl,v 1.13 2009/04/08 19:54:51 asmecher Exp $
 *}
{strip}
{assign var="pageTitle" value="installer.ojsInstallation"}
{include file="core:install/installComplete.tpl"}
{/strip}