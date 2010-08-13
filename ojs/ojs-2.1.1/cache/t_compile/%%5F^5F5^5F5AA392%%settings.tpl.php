<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:26
         compiled from admin/settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'admin/settings.tpl', 15, false),array('function', 'fieldLabel', 'admin/settings.tpl', 20, false),array('function', 'html_options', 'admin/settings.tpl', 29, false),array('function', 'translate', 'admin/settings.tpl', 33, false),array('modifier', 'escape', 'admin/settings.tpl', 21, false),array('modifier', 'assign', 'admin/settings.tpl', 57, false),)), $this); ?>

<?php $this->assign('pageTitle', "admin.siteSettings");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form name="settings" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveSettings'), $this);?>
">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="data" width="100%">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'title','key' => "admin.settings.siteTitle",'required' => 'true'), $this);?>
</td>
		<td width="80%" class="value"><input type="text" id="title" name="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="120" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'intro','key' => "admin.settings.introduction"), $this);?>
</td>
		<td class="value"><textarea name="intro" id="intro" cols="40" rows="10" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['intro'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'redirect','key' => "admin.settings.journalRedirect"), $this);?>
</td>
		<td class="value"><select name="redirect" id="redirect" size="1" class="selectMenu"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['redirectOptions'],'selected' => $this->_tpl_vars['redirect']), $this);?>
</select></td>
	</tr>
	<tr valign="top">
		<td>&nbsp;</td>
		<td class="value"><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.settings.journalRedirectInstructions"), $this);?>
</span></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'about','key' => "admin.settings.aboutDescription"), $this);?>
</td>
		<td class="value"><textarea name="about" id="about" cols="40" rows="10" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['about'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'contactName','key' => "admin.settings.contactName",'required' => 'true'), $this);?>
</td>
		<td class="value"><input type="text" id="contactName" name="contactName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contactName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'contactEmail','key' => "admin.settings.contactEmail",'required' => 'true'), $this);?>
</td>
		<td class="value"><input type="text" id="contactEmail" name="contactEmail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contactEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'minPasswordLength','key' => "admin.settings.minPasswordLength",'required' => 'true'), $this);?>
</td>
		<td class="value"><input type="text" id="minPasswordLength" name="minPasswordLength" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['minPasswordLength'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="4" maxlength="2" class="textField" /> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.settings.passwordCharacters"), $this);?>
</td>
	</tr>
</table>

<br />

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.settings.oaiRegistration"), $this);?>
</h4>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'oai'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'oaiUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'oaiUrl'));?>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'index'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'siteUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'siteUrl'));?>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.settings.oaiRegistrationDescription",'siteUrl' => $this->_tpl_vars['siteUrl'],'oaiUrl' => $this->_tpl_vars['oaiUrl']), $this);?>
</p>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'admin','escape' => false), $this);?>
'" /></p>

</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>