<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:53
         compiled from rtadmin/settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'rtadmin/settings.tpl', 17, false),array('function', 'html_options', 'rtadmin/settings.tpl', 21, false),)), $this); ?>

<?php $this->assign('pageTitle', "rt.admin.settings");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/rtadmin/saveSettings">

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.version"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.versionDescription"), $this);?>
</p>
<label for="version"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.version"), $this);?>
</label>&nbsp;&nbsp;<select name="version" id="version" class="selectMenu">
<option value=""><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.disable"), $this);?>
</option>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['versionOptions'],'selected' => $this->_tpl_vars['version']), $this);?>

</select>

<br /><br />

<div class="separator"></div>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.options"), $this);?>
</h3>
<table width="100%" class="data">
	<tr valign="top">
		<td class="label" width="3%"><input type="checkbox" name="captureCite" id="captureCite" <?php if ($this->_tpl_vars['captureCite']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value" width="97%">
			<label for="captureCite"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.captureCite"), $this);?>
</label><br />
			<label for="bibFormat"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.bibFormat"), $this);?>
</label>&nbsp;<select name="bibFormat" id="bibFormat" size="1" class="selectMenu"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['bibFormatOptions'],'selected' => $this->_tpl_vars['bibFormat']), $this);?>
</select>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><input type="checkbox" name="viewMetadata" id="viewMetadata" <?php if ($this->_tpl_vars['viewMetadata']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value"><label for="viewMetadata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.viewMetadata"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><input type="checkbox" name="supplementaryFiles" id="supplementaryFiles" <?php if ($this->_tpl_vars['supplementaryFiles']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value"><label for="supplementaryFiles"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.supplementaryFiles"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td class="label"><input type="checkbox" name="printerFriendly" id="printerFriendly" <?php if ($this->_tpl_vars['printerFriendly']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value"><label for="printerFriendly"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.printerFriendly"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td class="label"><input type="checkbox" name="authorBio" id="authorBio" <?php if ($this->_tpl_vars['authorBio']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value"><label for="authorBio"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.authorBio"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td class="label"><input type="checkbox" name="defineTerms" id="defineTerms" <?php if ($this->_tpl_vars['defineTerms']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value"><label for="defineTerms"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.defineTerms"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td class="label"><input type="checkbox" name="addComment" id="addComment" <?php if ($this->_tpl_vars['addComment']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value"><label for="addComment"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.addComment"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td class="label"><input type="checkbox" name="emailAuthor" id="emailAuthor" <?php if ($this->_tpl_vars['emailAuthor']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value"><label for="emailAuthor"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.emailAuthor"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td class="label"><input type="checkbox" name="emailOthers" id="emailOthers" <?php if ($this->_tpl_vars['emailOthers']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value"><label for="emailOthers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.emailOthers"), $this);?>
</label></td>
	</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_tpl_vars['pageUrl']; ?>
/rtadmin'" /></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>