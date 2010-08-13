<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:56
         compiled from user/profile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'fieldLabel', 'user/profile.tpl', 22, false),array('function', 'translate', 'user/profile.tpl', 39, false),array('modifier', 'escape', 'user/profile.tpl', 23, false),)), $this); ?>

<?php $this->assign('pageTitle', "user.profile.editProfile");  $this->assign('currentUrl', ($this->_tpl_vars['pageUrl'])."/user/profile");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/user/saveProfile">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'username','key' => "user.username"), $this);?>
</td>
	<td width="100%" class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'firstName','required' => 'true','key' => "user.firstName"), $this);?>
</td>
	<td class="value"><input type="text" name="firstName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="40" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'middleName','key' => "user.middleName"), $this);?>
</td>
	<td class="value"><input type="text" name="middleName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['middleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="40" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'lastName','required' => 'true','key' => "user.lastName"), $this);?>
</td>
	<td class="value"><input type="text" name="lastName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="90" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'initials','key' => "user.initials"), $this);?>
</td>
	<td class="value"><input type="text" name="initials" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['initials'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="5" maxlength="5" class="textField" />&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.initialsExample"), $this);?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'affiliation','key' => "user.affiliation"), $this);?>
</td>
	<td class="value"><input type="text" name="affiliation" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['affiliation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="255" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'email','required' => 'true','key' => "user.email"), $this);?>
</td>
	<td class="value"><input type="text" name="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'phone','key' => "user.phone"), $this);?>
</td>
	<td class="value"><input type="text" name="phone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['phone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'fax','key' => "user.fax"), $this);?>
</td>
	<td class="value"><input type="text" name="fax" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['fax'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'interests','key' => "user.interests"), $this);?>
</td>
	<td class="value"><input type="text" name="interests" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['interests'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="255" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'mailingAddress','key' => "common.mailingAddress"), $this);?>
</td>
	<td class="value"><textarea name="mailingAddress" rows="3" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['mailingAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'biography','key' => "user.biography"), $this);?>
<br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.biography.description"), $this);?>
</td>
	<td class="value"><textarea name="biography" rows="5" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['biography'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
</tr>
<?php if ($this->_tpl_vars['profileLocalesEnabled'] && count ( $this->_tpl_vars['availableLocales'] ) > 1): ?>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.workingLanguages"), $this);?>
</td>
	<td><?php $_from = $this->_tpl_vars['availableLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
?>
		<input type="checkbox" name="userLocales[]" id="userLocales[<?php echo $this->_tpl_vars['localeKey']; ?>
]" value="<?php echo $this->_tpl_vars['localeKey']; ?>
"<?php if (in_array ( $this->_tpl_vars['localeKey'] , $this->_tpl_vars['userLocales'] )): ?> checked="checked"<?php endif; ?> /> <label for="userLocales[<?php echo $this->_tpl_vars['localeKey']; ?>
]"><?php echo $this->_tpl_vars['localeName']; ?>
</label><br />
	<?php endforeach; endif; unset($_from); ?></td>
</tr>
<?php endif; ?>

<?php $_from = $this->_tpl_vars['journals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['journalNotifications'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['journalNotifications']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['thisJournalId'] => $this->_tpl_vars['thisJournal']):
        $this->_foreach['journalNotifications']['iteration']++;
?>
	<?php $this->assign('thisJournalId', $this->_tpl_vars['thisJournal']->getJournalId()); ?>
	<?php $this->assign('notificationEnabled', ($this->_tpl_vars['journalNotifications'][$this->_tpl_vars['thisJournalId']])); ?>
	<?php if (! $this->_tpl_vars['notFirstJournal']): ?>
		<?php $this->assign('notFirstJournal', 1); ?>
		<tr valign="top">
			<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.profile.form.notifications"), $this);?>
</td>
			<td class="value">
	<?php endif; ?>

		<input type="checkbox" name="journalNotify[]" <?php if ($this->_tpl_vars['notificationEnabled']): ?>checked="checked" <?php endif; ?>id="journalNotify[<?php echo $this->_tpl_vars['thisJournalId']; ?>
]" value="<?php echo $this->_tpl_vars['thisJournalId']; ?>
" /> <label for="journalNotify[<?php echo $this->_tpl_vars['thisJournalId']; ?>
]"><?php echo $this->_tpl_vars['thisJournal']->getTitle(); ?>
</label><br/>

	<?php if (($this->_foreach['journalNotifications']['iteration'] == $this->_foreach['journalNotifications']['total'])): ?>
			</td>
		</tr>
	<?php endif;  endforeach; endif; unset($_from); ?>

</table>
<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_tpl_vars['pageUrl']; ?>
/user'" /></p>
</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>