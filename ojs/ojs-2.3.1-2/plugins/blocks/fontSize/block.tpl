{**
 * block.tpl
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site sidebar menu -- font size selector.
 *
 * $Id: block.tpl,v 1.5 2009/04/08 19:54:34 asmecher Exp $
 *}
<div class="block" id="sidebarFontSize">
	<span class="blockTitle">{translate key="plugins.block.fontSize.title"}</span>
	<a href="#" onclick="setFontSize('{translate|escape:"jsparam" key="plugins.block.fontSize.small"}');" class="icon">{icon path="$fontIconPath/" name="font_small"}</a>&nbsp;
	<a href="#" onclick="setFontSize('{translate|escape:"jsparam" key="plugins.block.fontSize.medium"}');" class="icon">{icon path="$fontIconPath/" name="font_medium"}</a>&nbsp;
	<a href="#" onclick="setFontSize('{translate|escape:"jsparam" key="plugins.block.fontSize.large"}');" class="icon">{icon path="$fontIconPath/" name="font_large"}</a>
</div>
