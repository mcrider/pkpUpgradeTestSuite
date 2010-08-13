<?php /* Smarty version 2.6.9, created on 2005-07-08 06:01:59
         compiled from manager/emails/customEmailTemplateForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'fieldLabel', 'manager/emails/customEmailTemplateForm.tpl', 28, false),array('function', 'translate', 'manager/emails/customEmailTemplateForm.tpl', 37, false),array('modifier', 'escape', 'manager/emails/customEmailTemplateForm.tpl', 29, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.emails");  $this->assign('currentUrl', ($this->_tpl_vars['pageUrl'])."/manager/emails");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="<?php echo $this->_tpl_vars['formActionUrl']; ?>
">
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
<br/>
<table class="data" width="100%">
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

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.send"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="history.go(-1)" /></p>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>