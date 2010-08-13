<?php /* Smarty version 2.6.9, created on 2005-07-08 06:01:59
         compiled from manager/emails/emailTemplateForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/emails/emailTemplateForm.tpl', 24, false),array('function', 'fieldLabel', 'manager/emails/emailTemplateForm.tpl', 27, false),array('modifier', 'escape', 'manager/emails/emailTemplateForm.tpl', 28, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.emails");  $this->assign('currentUrl', ($this->_tpl_vars['pageUrl'])."/manager/emails");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<br/>
<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/updateEmail">
<input type="hidden" name="emailId" value="<?php echo $this->_tpl_vars['emailId']; ?>
" />
<input type="hidden" name="journalId" value="<?php echo $this->_tpl_vars['journalId']; ?>
" />
<input type="hidden" name="emailKey" value="<?php echo $this->_tpl_vars['emailKey']; ?>
" />

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_from = $this->_tpl_vars['supportedLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.emailTemplate"), $this);?>
 (<?php echo $this->_tpl_vars['localeName']; ?>
)</h3>
<table class="data" width="100%">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subject','key' => "email.subject"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="subject[<?php echo $this->_tpl_vars['localeKey']; ?>
]" id="subject[<?php echo $this->_tpl_vars['localeKey']; ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'][$this->_tpl_vars['localeKey']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="75" maxlength="120" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'body','key' => "email.body"), $this);?>
</td>
		<td class="value"><textarea name="body[<?php echo $this->_tpl_vars['localeKey']; ?>
]" id="body[<?php echo $this->_tpl_vars['localeKey']; ?>
]" cols="75" rows="20" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['body'][$this->_tpl_vars['localeKey']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
</table>
<?php endforeach; else: ?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.emailTemplate"), $this);?>
</h3>
<table class="data" width="100%">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subject','key' => "email.subject"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="subject[<?php echo $this->_tpl_vars['currentLocale']; ?>
]" id="subject[<?php echo $this->_tpl_vars['currentLocale']; ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'][$this->_tpl_vars['currentLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="75" maxlength="120" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'body','key' => "email.body"), $this);?>
</td>
		<td class="value"><textarea name="body[<?php echo $this->_tpl_vars['currentLocale']; ?>
]" id="body[<?php echo $this->_tpl_vars['currentLocale']; ?>
]" cols="75" rows="20" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['body'][$this->_tpl_vars['currentLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
</table>
<?php endif; unset($_from); ?>

<?php if ($this->_tpl_vars['canDisable']): ?>
<p><input type="checkbox" name="enabled" id="emailEnabled" value="1"<?php if ($this->_tpl_vars['enabled']): ?> checked="checked"<?php endif; ?> /> <label for="emailEnabled"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.enabled"), $this);?>
</label></p>
<?php endif; ?>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/emails'" /></p>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>