<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:00
         compiled from manager/people/email.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/people/email.tpl', 29, false),array('function', 'assign_translate', 'manager/people/email.tpl', 33, false),array('function', 'fieldLabel', 'manager/people/email.tpl', 43, false),array('modifier', 'escape', 'manager/people/email.tpl', 34, false),)), $this); ?>

<?php $this->assign('pageTitle', "email.compose");  $this->assign('pageCrumbTitle', "email.email");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" name="submit" action="<?php echo $this->_tpl_vars['formActionUrl']; ?>
">
<input type="hidden" name="continued" value="1">
<?php if ($this->_tpl_vars['hiddenFormParams']): ?>
	<?php $_from = $this->_tpl_vars['hiddenFormParams']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['hiddenFormParam']):
?>
		<input type="hidden" name="<?php echo $this->_tpl_vars['key']; ?>
" value="<?php echo $this->_tpl_vars['hiddenFormParam']; ?>
" />
	<?php endforeach; endif; unset($_from);  endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_from = $this->_tpl_vars['errorMessages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['message']):
?>
	<?php if (! $this->_tpl_vars['notFirstMessage']): ?>
		<?php $this->assign('notFirstMessage', 1); ?>
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.errorsOccurred"), $this);?>
</h4>
		<ul class="plain">
	<?php endif; ?>
	<?php if ($this->_tpl_vars['message']['type'] == MAIL_ERROR_INVALID_EMAIL): ?>
		<?php echo $this->_plugins['function']['assign_translate'][0][0]->smartyAssignTranslate(array('var' => 'message','key' => "email.invalid",'email' => ($this->_tpl_vars['message']['address'])), $this);?>

		<li><?php echo ((is_array($_tmp=$this->_tpl_vars['message'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</li>
	<?php endif;  endforeach; endif; unset($_from);  if ($this->_tpl_vars['notFirstMessage']): ?></ul><?php endif; ?>

<br/>

<table class="data" width="100%">
<tr valign="top">
	<td class="label" width="20%"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "to[]",'key' => "email.to"), $this);?>
</td>
	<td width="80%" class="value">
		<?php $_from = $this->_tpl_vars['to']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['toAddress']):
?>
			<input type="text" name="to[]" id="to[]" value="<?php if ($this->_tpl_vars['toAddress']['name'] != ''):  echo ((is_array($_tmp=$this->_tpl_vars['toAddress']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 &lt;<?php echo ((is_array($_tmp=$this->_tpl_vars['toAddress']['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&gt;<?php else:  echo $this->_tpl_vars['toAddress']['email'];  endif; ?>" size="40" maxlength="120" class="textField" /><br/>
		<?php endforeach; else: ?>
			<input type="text" name="to[]" id="to[]" size="40" maxlength="120" class="textField" />
		<?php endif; unset($_from); ?>

		<?php if ($this->_tpl_vars['blankTo']): ?>
			<input type="text" name="to[]" id="to[]" size="40" maxlength="120" class="textField" />
		<?php endif; ?>
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "cc[]",'key' => "email.cc"), $this);?>
</td>
	<td class="value">
		<?php $_from = $this->_tpl_vars['cc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ccAddress']):
?>
			<input type="text" name="cc[]" id="cc[]" value="<?php if ($this->_tpl_vars['ccAddress']['name'] != ''):  echo ((is_array($_tmp=$this->_tpl_vars['ccAddress']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 &lt;<?php echo ((is_array($_tmp=$this->_tpl_vars['ccAddress']['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&gt;<?php else:  echo $this->_tpl_vars['ccAddress']['email'];  endif; ?>" size="40" maxlength="120" class="textField" /><br/>
		<?php endforeach; else: ?>
			<input type="text" name="cc[]" id="cc[]" size="40" maxlength="120" class="textField" />
		<?php endif; unset($_from); ?>

		<?php if ($this->_tpl_vars['blankCc']): ?>
			<input type="text" name="cc[]" id="cc[]" size="40" maxlength="120" class="textField" />
		<?php endif; ?>
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "bcc[]",'key' => "email.bcc"), $this);?>
</td>
	<td class="value">
		<?php $_from = $this->_tpl_vars['bcc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bccAddress']):
?>
			<input type="text" name="bcc[]" id="bcc[]" value="<?php if ($this->_tpl_vars['bccAddress']['name'] != ''):  echo ((is_array($_tmp=$this->_tpl_vars['bccAddress']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 &lt;<?php echo ((is_array($_tmp=$this->_tpl_vars['bccAddress']['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&gt;<?php else:  echo $this->_tpl_vars['bccAddress']['email'];  endif; ?>" size="40" maxlength="120" class="textField" /><br/>
		<?php endforeach; else: ?>
			<input type="text" name="bcc[]" id="bcc[]" size="40" maxlength="120" class="textField" />
		<?php endif; unset($_from); ?>

		<?php if ($this->_tpl_vars['blankBcc']): ?>
			<input type="text" name="bcc[]" id="bcc[]" size="40" maxlength="120" class="textField" />
		<?php endif; ?>
	</td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td class="value">
		<input type="submit" name="blankTo" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.addToRecipient"), $this);?>
"/>
		<input type="submit" name="blankCc" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.addCcRecipient"), $this);?>
"/>
		<input type="submit" name="blankBcc" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.addBccRecipient"), $this);?>
"/>
	</td>
<tr valign="top">
	<td colspan="2">&nbsp;</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.from"), $this);?>
</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['from'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td class="value">
		<input type="submit" onClick="document.submit.action='<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/selectTemplate';" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.emailUsers.selectTemplate"), $this);?>
"/>
		</td>
	</td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subject','key' => "email.subject"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" id="subject" name="subject" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="120" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'body','key' => "email.body"), $this);?>
</td>
	<td class="value"><textarea name="body" cols="60" rows="15" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['body'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
</tr>
</table>

<p><input name="send" type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.send"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="history.go(-1)" /></p>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>