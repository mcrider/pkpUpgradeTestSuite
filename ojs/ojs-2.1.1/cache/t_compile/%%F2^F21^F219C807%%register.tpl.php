<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:40
         compiled from user/register.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'user/register.tpl', 15, false),array('function', 'translate', 'user/register.tpl', 17, false),array('function', 'fieldLabel', 'user/register.tpl', 37, false),array('modifier', 'assign', 'user/register.tpl', 20, false),array('modifier', 'escape', 'user/register.tpl', 38, false),array('modifier', 'nl2br', 'user/register.tpl', 142, false),)), $this); ?>

<?php $this->assign('pageTitle', "user.register");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'registerUser'), $this);?>
">

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.completeForm"), $this);?>
</p>

<?php if (! $this->_tpl_vars['existingUser']): ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'register','existingUser' => 1), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.alreadyRegisteredOtherJournal",'registerUrl' => $this->_tpl_vars['url']), $this);?>
</p>
<?php else: ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'register'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.notAlreadyRegisteredOtherJournal",'registerUrl' => $this->_tpl_vars['url']), $this);?>
</p>
	<input type="hidden" name="existingUser" value="1"/>
<?php endif; ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.profile"), $this);?>
</h3>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['existingUser']): ?>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.loginToRegister"), $this);?>
</p>
<?php endif; ?>
	
<table class="data" width="100%">
<tr valign="top">	
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'username','required' => 'true','key' => "user.username"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" name="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" id="username" size="20" maxlength="32" class="textField" /></td>
</tr>
<?php if (! $this->_tpl_vars['existingUser']): ?>
<tr valign="top">
	<td></td>
	<td class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.usernameRestriction"), $this);?>
</td>
</tr>
<?php endif; ?>
	
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'password','required' => 'true','key' => "user.password"), $this);?>
</td>
	<td class="value"><input type="password" name="password" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" id="password" size="20" maxlength="32" class="textField" /></td>
</tr>

<?php if (! $this->_tpl_vars['existingUser']): ?>
<tr valign="top">
	<td></td>
	<td class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.passwordLengthRestriction",'length' => $this->_tpl_vars['minPasswordLength']), $this);?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'password2','required' => 'true','key' => "user.register.repeatPassword"), $this);?>
</td>
	<td class="value"><input type="password" name="password2" id="password2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="32" class="textField" /></td>
</tr>
	
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'firstName','required' => 'true','key' => "user.firstName"), $this);?>
</td>
	<td class="value"><input type="text" id="firstName" name="firstName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="40" class="textField" /></td>
</tr>
	
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'middleName','key' => "user.middleName"), $this);?>
</td>
	<td class="value"><input type="text" id="middleName" name="middleName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['middleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="40" class="textField" /></td>
</tr>
	
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'lastName','required' => 'true','key' => "user.lastName"), $this);?>
</td>
	<td class="value"><input type="text" id="lastName" name="lastName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="90" class="textField" /></td>
</tr>

<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'initials','key' => "user.initials"), $this);?>
</td>
	<td class="value"><input type="text" id="initials" name="initials" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['initials'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="5" maxlength="5" class="textField" />&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.initialsExample"), $this);?>
</td>
</tr>
	
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'affiliation','key' => "user.affiliation"), $this);?>
</td>
	<td class="value"><input type="text" id="affiliation" name="affiliation" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['affiliation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="255" class="textField" /></td>
</tr>
	
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'email','required' => 'true','key' => "user.email"), $this);?>
</td>
	<td class="value"><input type="text" id="email" name="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
</tr>
	
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'userUrl','key' => "user.url"), $this);?>
</td>
	<td class="value"><input type="text" id="userUrl" name="userUrl" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
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
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'mailingAddress','key' => "common.mailingAddress"), $this);?>
</td>
	<td class="value"><textarea name="mailingAddress" id="mailingAddress" rows="3" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['mailingAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
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
	<td class="value"><?php $_from = $this->_tpl_vars['availableLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
?>
		<input type="checkbox" name="userLocales[]" id="userLocales-<?php echo $this->_tpl_vars['localeKey']; ?>
" value="<?php echo $this->_tpl_vars['localeKey']; ?>
"<?php if (in_array ( $this->_tpl_vars['localeKey'] , $this->_tpl_vars['userLocales'] )): ?> checked="checked"<?php endif; ?> /> <label for="userLocales-<?php echo $this->_tpl_vars['localeKey']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['localeName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</label><br />
	<?php endforeach; endif; unset($_from); ?></td>
</tr>
<?php endif;  endif; ?>
	
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('suppressId' => 'true','name' => 'registerAs','key' => "user.register.registerAs"), $this);?>
</td>
	<td class="value"><?php if ($this->_tpl_vars['allowRegReader'] || $this->_tpl_vars['allowRegReader'] === null): ?><input type="checkbox" name="registerAsReader" id="registerAsReader" value="1"<?php if ($this->_tpl_vars['registerAsReader']): ?> checked="checked"<?php endif; ?> /> <label for="registerAsReader"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reader"), $this);?>
</label>: <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.readerDescription"), $this);?>
<br /><?php endif; ?>
	<?php if ($this->_tpl_vars['enableSubscriptions'] && $this->_tpl_vars['enableOpenAccessNotification']): ?><input type="checkbox" name="openAccessNotification" id="openAccessNotification" value="1"<?php if ($this->_tpl_vars['openAccessNotification']): ?> checked="checked"<?php endif; ?> /> <label for="openAccessNotification"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reader"), $this);?>
</label>: <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.openAccessNotificationDescription"), $this);?>
<br /><?php endif; ?>
	<?php if ($this->_tpl_vars['allowRegAuthor'] || $this->_tpl_vars['allowRegAuthor'] === null): ?><input type="checkbox" name="registerAsAuthor" id="registerAsAuthor" value="1"<?php if ($this->_tpl_vars['registerAsAuthor']): ?> checked="checked"<?php endif; ?> /> <label for="registerAsAuthor"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.author"), $this);?>
</label>: <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.authorDescription"), $this);?>
<br /><?php endif; ?>
	<?php if ($this->_tpl_vars['allowRegReviewer'] || $this->_tpl_vars['allowRegReviewer'] === null): ?><input type="checkbox" name="registerAsReviewer" id="registerAsReviewer" value="1"<?php if ($this->_tpl_vars['registerAsReviewer']): ?> checked="checked"<?php endif; ?> /> <label for="registerAsReviewer"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reviewer"), $this);?>
</label>: <?php if ($this->_tpl_vars['existingUser']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.reviewerDescriptionNoInterests"), $this); else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.reviewerDescription"), $this);?>
 <input type="text" name="interests" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['interests'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="255" class="textField" /><?php endif;  endif; ?></td>
</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'index','escape' => false), $this);?>
'" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php if ($this->_tpl_vars['privacyStatement']): ?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.privacyStatement"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['privacyStatement'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
<?php endif; ?>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>