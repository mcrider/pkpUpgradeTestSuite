<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:31
         compiled from manager/emails/emailTemplateForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/emails/emailTemplateForm.tpl', 19, false),array('function', 'fieldLabel', 'manager/emails/emailTemplateForm.tpl', 38, false),array('function', 'translate', 'manager/emails/emailTemplateForm.tpl', 45, false),array('modifier', 'escape', 'manager/emails/emailTemplateForm.tpl', 20, false),)), $this); ?>

<?php if (! $this->_tpl_vars['isNewTemplate']): ?>
	<?php $this->assign('pageTitle', "manager.emails.editEmail");  else: ?>
	<?php $this->assign('pageTitle', "manager.emails.createEmail");  endif;  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateEmail'), $this);?>
">
<input type="hidden" name="emailId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['emailId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
<input type="hidden" name="journalId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['journalId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
<?php if (! $this->_tpl_vars['isNewTemplate']): ?>
	<input type="hidden" name="emailKey" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['emailKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
<?php endif; ?>

<?php if ($this->_tpl_vars['description']): ?>
	<p><?php echo ((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
<?php endif; ?>

<br/>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="data" width="100%">

<?php if ($this->_tpl_vars['isNewTemplate']): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'emailKey','key' => "manager.emails.emailKey"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="emailKey" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['emailKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" id="emailKey" size="20" maxlength="120" class="textField" /><br/>&nbsp;</td>
	</tr>
<?php endif; ?>

<?php $_from = $this->_tpl_vars['supportedLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
?>
	<tr valign="top"><td colspan="2">
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.emailTemplate"), $this);?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['localeName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
)</h3>
	</td></tr>

	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "subject-".($this->_tpl_vars['localeKey']),'key' => "email.subject"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="subject[<?php echo $this->_tpl_vars['localeKey']; ?>
]" id="subject-<?php echo $this->_tpl_vars['localeKey']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'][$this->_tpl_vars['localeKey']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="70" maxlength="120" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "body-".($this->_tpl_vars['localeKey']),'key' => "email.body"), $this);?>
</td>
		<td class="value"><textarea name="body[<?php echo $this->_tpl_vars['localeKey']; ?>
]" id="body-<?php echo $this->_tpl_vars['localeKey']; ?>
" cols="70" rows="20" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['body'][$this->_tpl_vars['localeKey']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
<?php endforeach; else: ?>
<tr valign="top"><td colspan="2">
	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.emailTemplate"), $this);?>
</h3>
</td></tr>

	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "subject-".($this->_tpl_vars['currentLocale']),'key' => "email.subject"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="subject[<?php echo $this->_tpl_vars['currentLocale']; ?>
]" id="subject-<?php echo $this->_tpl_vars['currentLocale']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'][$this->_tpl_vars['currentLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="70" maxlength="120" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "body-".($this->_tpl_vars['currentLocale']),'key' => "email.body"), $this);?>
</td>
		<td class="value"><textarea name="body[<?php echo $this->_tpl_vars['currentLocale']; ?>
]" id="body-<?php echo $this->_tpl_vars['currentLocale']; ?>
" cols="70" rows="20" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['body'][$this->_tpl_vars['currentLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
<?php endif; unset($_from); ?>
</table>

<?php if ($this->_tpl_vars['canDisable']): ?>
<p><input type="checkbox" name="enabled" id="emailEnabled" value="1"<?php if ($this->_tpl_vars['enabled']): ?> checked="checked"<?php endif; ?> /> <label for="emailEnabled"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.enabled"), $this);?>
</label></p>
<?php endif; ?>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'emails','escape' => false), $this);?>
'" /> <input type="reset" class="button" /></p>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>