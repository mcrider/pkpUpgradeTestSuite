<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:56
         compiled from user/changePassword.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'user/changePassword.tpl', 20, false),array('function', 'fieldLabel', 'user/changePassword.tpl', 24, false),array('modifier', 'escape', 'user/changePassword.tpl', 25, false),)), $this); ?>

<?php $this->assign('pageTitle', "user.changePassword");  $this->assign('currentUrl', ($this->_tpl_vars['pageUrl'])."/user/changePassword");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/user/savePassword">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.profile.changePasswordInstructions"), $this);?>
</span></p>

<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'oldPassword','key' => "user.profile.oldPassword"), $this);?>
</td>
	<td width="80%" class="value"><input type="password" name="oldPassword" id="oldPassword" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['oldPassword'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="32" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'password','key' => "user.profile.newPassword"), $this);?>
</td>
	<td class="value"><input type="password" name="password" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" id="password" size="20" maxlength="32" class="textField" /></td>
</tr>
<tr valign="top">
	<td></td>
	<td><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.passwordLengthRestriction",'length' => $this->_tpl_vars['minPasswordLength']), $this);?>
</span></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'password2','key' => "user.profile.repeatNewPassword"), $this);?>
</td>
	<td class="value"><input type="password" name="password2" id="password2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="32" class="textField" /></td>
</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_tpl_vars['pageUrl']; ?>
/user'" /></p>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>