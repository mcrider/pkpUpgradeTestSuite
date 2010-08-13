<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:31
         compiled from manager/emails/emails.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/emails/emails.tpl', 18, false),array('function', 'url', 'manager/emails/emails.tpl', 32, false),array('function', 'page_info', 'manager/emails/emails.tpl', 60, false),array('function', 'page_links', 'manager/emails/emails.tpl', 61, false),array('block', 'iterate', 'manager/emails/emails.tpl', 25, false),array('modifier', 'escape', 'manager/emails/emails.tpl', 27, false),array('modifier', 'truncate', 'manager/emails/emails.tpl', 27, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.emails");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<br/>
<table class="listing" width="100%">
	<tr><td colspan="5" class="headseparator">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.emailTemplates"), $this);?>
</td>
		<td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.sender"), $this);?>
</td>
		<td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.recipient"), $this);?>
</td>
		<td width="50%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.subject"), $this);?>
</td>
		<td width="15%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr><td colspan="5" class="headseparator">&nbsp;</td></tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'emailTemplates','item' => 'emailTemplate')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top">
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['emailTemplate']->getEmailKey())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...") : smarty_modifier_truncate($_tmp, 20, "...")); ?>
</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['emailTemplate']->getFromRoleName()), $this);?>
</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['emailTemplate']->getToRoleName()), $this);?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['emailTemplate']->getSubject())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 50, "...") : smarty_modifier_truncate($_tmp, 50, "...")); ?>
</td>
		<td align="right" class="nowrap">
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editEmail','path' => $this->_tpl_vars['emailTemplate']->getEmailKey()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>
			<?php if ($this->_tpl_vars['emailTemplate']->getCanDisable() && ! $this->_tpl_vars['emailTemplate']->isCustomTemplate()): ?>
				<?php if ($this->_tpl_vars['emailTemplate']->getEnabled() == 1): ?>
					|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'disableEmail','path' => $this->_tpl_vars['emailTemplate']->getEmailKey()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.disable"), $this);?>
</a>
				<?php else: ?>
					|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enableEmail','path' => $this->_tpl_vars['emailTemplate']->getEmailKey()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.enable"), $this);?>
</a>
				<?php endif; ?>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['emailTemplate']->isCustomTemplate()): ?>
				|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteCustomEmail','path' => $this->_tpl_vars['emailTemplate']->getEmailKey()), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a>
			<?php else: ?>
				|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'resetEmail','path' => $this->_tpl_vars['emailTemplate']->getEmailKey()), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.confirmReset"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.reset"), $this);?>
</a>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td colspan="5" class="<?php if (! $this->_tpl_vars['emailTemplates']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['emailTemplates']->wasEmpty()): ?>
	<tr>
		<td colspan="5" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="5" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="3" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['emailTemplates']), $this);?>
</td>
		<td align="right" colspan="2"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'emails','iterator' => $this->_tpl_vars['emailTemplates']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<br />

<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createEmail'), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.createEmail"), $this);?>
</a><br />
<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'resetAllEmails'), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.confirmResetAll"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.resetAll"), $this);?>
</a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>