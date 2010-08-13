<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:39
         compiled from user/loginChangePassword.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'user/loginChangePassword.tpl', 13, false),array('function', 'translate', 'user/loginChangePassword.tpl', 20, false),array('function', 'fieldLabel', 'user/loginChangePassword.tpl', 24, false),array('modifier', 'assign', 'user/loginChangePassword.tpl', 13, false),array('modifier', 'escape', 'user/loginChangePassword.tpl', 25, false),)), $this); ?>

<?php $this->assign('pageTitle', "user.changePassword");  echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'changePassword'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'currentUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'currentUrl'));?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'savePassword'), $this);?>
">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.changePasswordInstructions"), $this);?>
</span></p>

<table class="data" width="100%">
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'username','required' => 'true','key' => "user.username"), $this);?>
</td>
	<td class="value"><input type="text" name="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" id="username" size="20" maxlength="32" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'oldPassword','required' => 'true','key' => "user.profile.oldPassword"), $this);?>
</td>
	<td class="value"><input type="password" name="oldPassword" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['oldPassword'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" id="oldPassword" size="20" maxlength="32" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'password','required' => 'true','key' => "user.profile.newPassword"), $this);?>
</td>
	<td class="value"><input type="password" id="password" name="password" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="32" class="textField" /></td>
</tr>
<tr valign="top">
	<td></td>
	<td class="value"><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.passwordLengthRestriction",'length' => $this->_tpl_vars['minPasswordLength']), $this);?>
</span></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'password2','required' => 'true','key' => "user.profile.repeatNewPassword"), $this);?>
</td>
	<td class="value"><input type="password" name="password2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" id="password2" size="20" maxlength="32" class="textField" /></td>
</tr>
</table>
<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','escape' => false), $this);?>
'" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>