<?php /* Smarty version 2.6.9, created on 2005-07-08 06:01:59
         compiled from manager/emails/emails.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/emails/emails.tpl', 18, false),array('modifier', 'escape', 'manager/emails/emails.tpl', 37, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.emails");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<br/>
<table class="listing" width="100%">
	<tr><td colspan="3" class="headseparator">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.emailTemplates"), $this);?>
</td>
		<td width="70%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.subject"), $this);?>
</td>
		<td width="15%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr><td colspan="3" class="headseparator">&nbsp;</td></tr>
<?php $_from = $this->_tpl_vars['emailTemplates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['emailTemplates'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['emailTemplates']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['emailTemplate']):
        $this->_foreach['emailTemplates']['iteration']++;
?>
	<tr valign="top">
		<td><?php echo $this->_tpl_vars['emailTemplate']->getEmailKey(); ?>
</td>
		<td><?php echo $this->_tpl_vars['emailTemplate']->getSubject(); ?>
</td>
		<td align="right">
			<nobr>
			<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/editEmail/<?php echo $this->_tpl_vars['emailTemplate']->getEmailKey(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>
			<?php if ($this->_tpl_vars['emailTemplate']->getCanDisable()): ?>
				<?php if ($this->_tpl_vars['emailTemplate']->getEnabled() == 1): ?>
					<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/disableEmail/<?php echo $this->_tpl_vars['emailTemplate']->getEmailKey(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.disable"), $this);?>
</a>
				<?php else: ?>
					<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/enableEmail/<?php echo $this->_tpl_vars['emailTemplate']->getEmailKey(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.enable"), $this);?>
</a>
				<?php endif; ?>
			<?php endif; ?>
			<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/resetEmail/<?php echo $this->_tpl_vars['emailTemplate']->getEmailKey(); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.confirmReset"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.reset"), $this);?>
</a>
			</nobr>
		</td>
	</tr>
	<tr>
		<td colspan="3" class="<?php if (($this->_foreach['emailTemplates']['iteration'] == $this->_foreach['emailTemplates']['total'])): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php endforeach; else: ?>
	<tr>
		<td colspan="3" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="3" class="endseparator">&nbsp;</td>
	</tr>
<?php endif; unset($_from); ?>
</table>

<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/resetAllEmails" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.confirmResetAll"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action" onclick=><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.resetAll"), $this);?>
</a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>