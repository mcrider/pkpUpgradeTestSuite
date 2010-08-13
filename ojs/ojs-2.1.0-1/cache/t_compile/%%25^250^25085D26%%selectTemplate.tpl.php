<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:38
         compiled from manager/people/selectTemplate.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/people/selectTemplate.tpl', 30, false),array('function', 'translate', 'manager/people/selectTemplate.tpl', 48, false),array('modifier', 'escape', 'manager/people/selectTemplate.tpl', 35, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.emails");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
<?php echo '
<!--
function submitForm(key) {
	document.submit.template.value = key;
	document.submit.submit();
	return true;
}
// -->
'; ?>

</script>

<br/>

<?php if ($this->_tpl_vars['locales']): ?>
<form action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'selectTemplate'), $this);?>
" method="post">
	<?php $_from = $this->_tpl_vars['persistAttachments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['temporaryFile']):
?>
		<input type="hidden" name="persistAttachments[]" value="<?php echo $this->_tpl_vars['temporaryFile']; ?>
" />
	<?php endforeach; endif; unset($_from); ?>
	<?php $_from = $this->_tpl_vars['to']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['toAddress']):
?>
		<input type="hidden" name="to[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['toAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
	<?php endforeach; endif; unset($_from); ?>
	<?php $_from = $this->_tpl_vars['cc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ccAddress']):
?>
		<input type="hidden" name="cc[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['ccAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
	<?php endforeach; endif; unset($_from); ?>
	<?php $_from = $this->_tpl_vars['bcc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bccAddress']):
?>
		<input type="hidden" name="bcc[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['bccAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
	<?php endforeach; endif; unset($_from); ?>
		<select class="selectMenu" name="locale">
			<?php $_from = $this->_tpl_vars['locales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['thisLocale']):
?>
			<option <?php if ($this->_tpl_vars['locale'] == $this->_tpl_vars['thisLocale']): ?>selected <?php endif; ?>value="<?php echo ((is_array($_tmp=$this->_tpl_vars['thisLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['localeNames'][$this->_tpl_vars['thisLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
		</select>
	&nbsp;<input type="submit" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.emailUsers.selectLocale"), $this);?>
" />
	<br/><br/>
</form>
<?php endif; ?>

<table class="listing" width="100%">
<tr><td colspan="5" class="headseparator">&nbsp;</td></tr>
<tr class="heading" valign="bottom">
	<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.emailTemplates"), $this);?>
</td>
	<td width="70%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.subject"), $this);?>
</td>
	<td width="15%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
</tr>
<tr><td colspan="5" class="headseparator">&nbsp;</td></tr>
<form action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email'), $this);?>
" name="submit" method="post">
<input type="hidden" name="usePostedAddresses" value="1"/>
<input type="hidden" name="template" value=""/>
<input type="hidden" name="locale" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['locale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
<?php $_from = $this->_tpl_vars['persistAttachments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['temporaryFile']):
?>
	<input type="hidden" name="persistAttachments[]" value="<?php echo $this->_tpl_vars['temporaryFile']; ?>
" />
<?php endforeach; endif; unset($_from);  $_from = $this->_tpl_vars['to']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['toAddress']):
?>
	<input type="hidden" name="to[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['toAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
<?php endforeach; endif; unset($_from);  $_from = $this->_tpl_vars['cc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ccAddress']):
?>
	<input type="hidden" name="cc[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['ccAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
<?php endforeach; endif; unset($_from);  $_from = $this->_tpl_vars['bcc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bccAddress']):
?>
	<input type="hidden" name="bcc[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['bccAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
<?php endforeach; endif; unset($_from);  $_from = $this->_tpl_vars['emailTemplates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['emailTemplates'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['emailTemplates']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['emailTemplate']):
        $this->_foreach['emailTemplates']['iteration']++;
?>
<tr valign="top">
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['emailTemplate']->getEmailKey())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['emailTemplate']->getSubject())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	<td align="right">
		<a href="javascript:submitForm('<?php echo ((is_array($_tmp=$this->_tpl_vars['emailTemplate']->getEmailKey())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
');" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.select"), $this);?>
</a>
	</td>
</tr>
<tr><td colspan="5" class="<?php if (($this->_foreach['emailTemplates']['iteration'] == $this->_foreach['emailTemplates']['total'])): ?>end<?php endif; ?>separator">&nbsp;</td></tr>
<?php endforeach; else: ?>
<tr><td colspan="5" class="endseparator">&nbsp;</td></tr>
<?php endif; unset($_from); ?>
</form>
</table>
<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'resetAllEmails'), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.confirmResetAll"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action" onclick=><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.resetAll"), $this);?>
</a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>