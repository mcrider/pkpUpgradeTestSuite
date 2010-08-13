<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:36
         compiled from sectionEditor/createReviewerForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'sectionEditor/createReviewerForm.tpl', 15, false),array('function', 'fieldLabel', 'sectionEditor/createReviewerForm.tpl', 21, false),array('function', 'translate', 'sectionEditor/createReviewerForm.tpl', 25, false),array('function', 'html_options', 'sectionEditor/createReviewerForm.tpl', 81, false),array('modifier', 'to_array', 'sectionEditor/createReviewerForm.tpl', 15, false),array('modifier', 'escape', 'sectionEditor/createReviewerForm.tpl', 23, false),)), $this); ?>

<?php $this->assign('pageTitle', "sectionEditor.review.createReviewer");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createReviewer','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, 'create') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, 'create'))), $this);?>
">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table width="100%" class="data">
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
	<tr valign="top">
		<td class="label">&nbsp;</td>
		<td class="value"><input type="checkbox" name="sendNotify" id="sendNotify" value="1"<?php if ($this->_tpl_vars['sendNotify']): ?> checked="checked"<?php endif; ?> /> <label for="sendNotify"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.createUserSendNotify"), $this);?>
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
" size="20" maxlength="90" class="textField" /></td>
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
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'userUrl','key' => "user.url"), $this);?>
</td>
		<td class="value"><input type="text" name="userUrl" id="userUrl" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
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
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => $this->_tpl_vars['articleId'],'escape' => false), $this);?>
'" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>