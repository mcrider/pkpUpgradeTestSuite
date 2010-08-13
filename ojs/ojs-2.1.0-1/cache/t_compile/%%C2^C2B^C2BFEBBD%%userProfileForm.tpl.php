<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:38
         compiled from manager/people/userProfileForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/people/userProfileForm.tpl', 12, false),array('function', 'translate', 'manager/people/userProfileForm.tpl', 50, false),array('function', 'fieldLabel', 'manager/people/userProfileForm.tpl', 65, false),array('function', 'html_options_translate', 'manager/people/userProfileForm.tpl', 68, false),array('function', 'html_options', 'manager/people/userProfileForm.tpl', 93, false),array('modifier', 'assign', 'manager/people/userProfileForm.tpl', 12, false),array('modifier', 'escape', 'manager/people/userProfileForm.tpl', 77, false),)), $this); ?>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'people','path' => 'all'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'currentUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'currentUrl'));?>

<?php $this->assign('pageTitle', "manager.people");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (! $this->_tpl_vars['userId']):  $this->assign('passwordRequired', 'true'); ?>

<?php echo '
<script type="text/javascript">
<!--
	function setGenerateRandom(value) {
		if (value) {
			document.userForm.password.value=\'********\';
			document.userForm.password2.value=\'********\';
			document.userForm.password.disabled=1;
			document.userForm.password2.disabled=1;
			document.userForm.sendNotify.checked=1;
			document.userForm.sendNotify.disabled=1;
		} else {
			document.userForm.password.disabled=0;
			document.userForm.password2.disabled=0;
			document.userForm.sendNotify.disabled=0;
			document.userForm.password.value=\'\';
			document.userForm.password2.value=\'\';
			document.userForm.password.focus();
		}
	}

	function enablePasswordFields() {
		document.userForm.password.disabled=0;
		document.userForm.password2.disabled=0;
	}
// -->
</script>
'; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['userCreated']): ?>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.userCreatedSuccessfully"), $this);?>
</p>
<?php endif; ?>

<h3><?php if ($this->_tpl_vars['userId']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.editProfile"), $this); else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.createUser"), $this); endif; ?></h3>

<form name="userForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateUser'), $this);?>
" onsubmit="enablePasswordFields()">
<?php if ($this->_tpl_vars['userId']): ?>
<input type="hidden" name="userId" value="<?php echo $this->_tpl_vars['userId']; ?>
" />
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table width="100%" class="data">
	<?php if (! $this->_tpl_vars['userId']): ?>
	<tr valign="top">	
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'enrollAs','key' => "manager.people.enrollUserAs"), $this);?>
</td>
		<td class="value">
			<select name="enrollAs[]" id="enrollAs" multiple="multiple" size="11" class="selectMenu">
			<?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['roleOptions'],'selected' => $this->_tpl_vars['enrollAs']), $this);?>

			</select>
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enrollUserAsDescription"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'username','required' => 'true','key' => "user.username"), $this);?>
</td>
		<td class="value">
			<input type="text" name="username" id="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="32" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.usernameRestriction"), $this);?>
</span>
		</td>
	</tr>
	<?php else: ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'username','key' => "user.username"), $this);?>
</td>
		<td class="value"><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</strong></td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['authSourceOptions']): ?>
	<tr valign="top">	
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'authId','key' => "manager.people.authSource"), $this);?>
</td>
		<td class="value"><select name="authId" id="authId" size="1" class="selectMenu">
			<option value=""></option>
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['authSourceOptions'],'selected' => $this->_tpl_vars['authId']), $this);?>

		</select></td>
	</tr>
	<?php endif; ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'password','required' => $this->_tpl_vars['passwordRequired'],'key' => "user.password"), $this);?>
</td>
		<td class="value">
			<input type="password" name="password" id="password" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="32" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.passwordLengthRestriction",'length' => $this->_tpl_vars['minPasswordLength']), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'password2','required' => $this->_tpl_vars['passwordRequired'],'key' => "user.register.repeatPassword"), $this);?>
</td>
		<td class="value"><input type="password" name="password2"  id="password2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="32" class="textField" /></td>
	</tr>
	<?php if ($this->_tpl_vars['userId']): ?>
	<tr valign="top">
		<td>&nbsp;</td>
		<td class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.passwordLengthRestriction",'length' => $this->_tpl_vars['minPasswordLength']), $this);?>
<br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.profile.leavePasswordBlank"), $this);?>
</td>
	</tr>
	<?php else: ?>
	<tr valign="top">
		<td class="label">&nbsp;</td>
		<td class="value"><input type="checkbox" onclick="setGenerateRandom(this.checked)" name="generatePassword" id="generatePassword" value="1"<?php if ($this->_tpl_vars['generatePassword']): ?> checked="checked"<?php endif; ?> /> <label for="generatePassword"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.createUserGeneratePassword"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td class="label">&nbsp;</td>
		<td class="value"><input type="checkbox" name="sendNotify" id="sendNotify" value="1"<?php if ($this->_tpl_vars['sendNotify']): ?> checked="checked"<?php endif; ?> /> <label for="sendNotify"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.createUserSendNotify"), $this);?>
</label></td>
	</tr>
	<?php endif; ?>
	<tr valign="top">
		<td class="label">&nbsp;</td>
		<td class="value"><input type="checkbox" name="mustChangePassword" id="mustChangePassword" value="1"<?php if ($this->_tpl_vars['mustChangePassword']): ?> checked="checked"<?php endif; ?> /> <label for="mustChangePassword"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.userMustChangePassword"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'firstName','required' => 'true','key' => "user.firstName"), $this);?>
</td>
		<td class="value"><input type="text" name="firstName" id="firstName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="40" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'middleName','key' => "user.middleName"), $this);?>
</td>
		<td class="value"><input type="text" name="middleName" id="middleName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['middleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="40" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'lastName','required' => 'true','key' => "user.lastName"), $this);?>
</td>
		<td class="value"><input type="text" name="lastName" id="lastName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="60" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'initials','key' => "user.initials"), $this);?>
</td>
		<td class="value"><input type="text" name="initials" id="initials" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['initials'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="5" maxlength="5" class="textField" />&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.initialsExample"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'affiliation','key' => "user.affiliation"), $this);?>
</td>
		<td class="value"><input type="text" name="affiliation" id="affiliation" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['affiliation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'email','required' => 'true','key' => "user.email"), $this);?>
</td>
		<td class="value"><input type="text" name="email" id="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'phone','key' => "user.phone"), $this);?>
</td>
		<td class="value"><input type="text" name="phone" id="phone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['phone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'fax','key' => "user.fax"), $this);?>
</td>
		<td class="value"><input type="text" name="fax" id="fax" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['fax'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'interests','key' => "user.interests"), $this);?>
</td>
		<td class="value"><input type="text" name="interests" id="interests" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['interests'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'mailingAddress','key' => "common.mailingAddress"), $this);?>
</td>
		<td class="value"><textarea name="mailingAddress" id="mailingAddress" rows="3" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['mailingAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'country','key' => "common.country"), $this);?>
</td>
	<td class="value">
		<select name="country" id="country" class="selectMenu">
			<option value=""></option>
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['countries'],'selected' => $this->_tpl_vars['country']), $this);?>

		</select>
	</td>
</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'biography','key' => "user.biography"), $this);?>
<br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.biography.description"), $this);?>
</td>
		<td class="value"><textarea name="biography" id="biography" rows="5" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['biography'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
	<?php if ($this->_tpl_vars['profileLocalesEnabled'] && count ( $this->_tpl_vars['availableLocales'] ) > 1): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.workingLanguages"), $this);?>
</td>
		<td><?php $_from = $this->_tpl_vars['availableLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
?>
			<input type="checkbox" name="userLocales[]" id="userLocales-<?php echo $this->_tpl_vars['localeKey']; ?>
" value="<?php echo $this->_tpl_vars['localeKey']; ?>
"<?php if ($this->_tpl_vars['userLocales'] && in_array ( $this->_tpl_vars['localeKey'] , $this->_tpl_vars['userLocales'] )): ?> checked="checked"<?php endif; ?> /> <label for="userLocales-<?php echo $this->_tpl_vars['localeKey']; ?>
"><?php echo $this->_tpl_vars['localeName']; ?>
</label><br />
		<?php endforeach; endif; unset($_from); ?></td>
	</tr>
	<?php endif; ?>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <?php if (! $this->_tpl_vars['userId']): ?><input type="submit" name="createAnother" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.saveAndCreateAnotherUser"), $this);?>
" class="button" /> <?php endif; ?><input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'all','escape' => false), $this);?>
'" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>

<?php if ($this->_tpl_vars['generatePassword']):  echo '
	<script type="text/javascript">
		<!--
		setGenerateRandom(1);
		// -->
	</script>
'; ?>

<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>