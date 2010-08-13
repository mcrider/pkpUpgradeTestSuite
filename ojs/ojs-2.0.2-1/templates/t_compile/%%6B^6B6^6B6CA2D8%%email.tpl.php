<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:22
         compiled from user/email.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'user/email.tpl', 23, false),array('modifier', 'escape', 'user/email.tpl', 27, false),)), $this); ?>

<?php $this->assign('pageTitle', "email.compose"); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<br/>
<form method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/email">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><label for="to"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.to"), $this);?>
</label></td>
	<td width="80%" class="value">
		<?php if ($this->_tpl_vars['to'][0]): ?>
			<?php $_from = $this->_tpl_vars['to']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['toAddress']):
?>
				<input type="text" name="to[]" id="to" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['toAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="120" class="textField" /><br/>
			<?php endforeach; endif; unset($_from); ?>
		<?php else: ?>
			<input type="text" name="to[]" id="to" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['to'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="120" class="textField" />
		<?php endif; ?>

		<?php if ($this->_tpl_vars['blankTo']): ?>
			<input type="text" name="to[]" id="to" value="" size="40" maxlength="120" class="textField" />
		<?php endif; ?>
	</td>
</tr>
<tr valign="top">
	<td class="label"><label for="cc"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.cc"), $this);?>
</label></td>
	<td class="value">
		<?php if ($this->_tpl_vars['cc'][0]): ?>
			<?php $_from = $this->_tpl_vars['cc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ccAddress']):
?>
				<input type="text" name="cc[]" id="cc" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['ccAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="120" class="textField" /><br/>
			<?php endforeach; endif; unset($_from); ?>
		<?php else: ?>
			<input type="text" name="cc[]" id="cc" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['cc'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="120" class="textField" />
		<?php endif; ?>

		<?php if ($this->_tpl_vars['blankCc']): ?>
			<input type="text" name="cc[]" id="cc" value="" size="40" maxlength="120" class="textField" />
		<?php endif; ?>
	</td>
</tr>
<tr valign="top">
	<td class="label"><label for="bcc"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.bcc"), $this);?>
</label></td>
	<td class="value">
		<?php if ($this->_tpl_vars['bcc'][0]): ?>
			<?php $_from = $this->_tpl_vars['bcc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bccAddress']):
?>
				<input type="text" name="bcc[]" id="bcc" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['bccAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="120" class="textField" /><br/>
			<?php endforeach; endif; unset($_from); ?>
		<?php else: ?>
			<input type="text" name="bcc[]" id="bcc" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['bcc'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="120" class="textField" />
		<?php endif; ?>

		<?php if ($this->_tpl_vars['blankBcc']): ?>
			<input type="text" name="bcc[]" id="bcc" value="" size="40" maxlength="120" class="textField" />
		<?php endif; ?>
	</td>
</tr>
<tr valign="top">
	<td></td>
	<td class="value">
		<input type="submit" name="blankTo" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.addToRecipient"), $this);?>
"/>
		<input type="submit" name="blankCc" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.addCcRecipient"), $this);?>
"/>
		<input type="submit" name="blankBcc" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.addBccRecipient"), $this);?>
"/>
	</td>
<tr valign="top">
	<td colspan="3">&nbsp;</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.from"), $this);?>
</td>
	<td class="value" colspan="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 &lt;<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getEmail())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&gt;</td>
</tr>
</table>

<table width="100%" class="data">
<tr valign="top">
	<td width="20%" class="label"><label for="subject"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.subject"), $this);?>
</label></td>
	<td width="80%" class="value"><input type="text" name="subject" id="subject" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="120" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><label for="bodyfield"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.body"), $this);?>
</label></td>
	<td class="value"><textarea name="body" id="bodyfield" cols="60" rows="20" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['body'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.send"), $this);?>
" name="send" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="history.go(-1)" /></p>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>