<?php /* Smarty version 2.6.9, created on 2005-07-08 06:01:56
         compiled from admin/journals.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'admin/journals.tpl', 22, false),array('function', 'page_info', 'admin/journals.tpl', 50, false),array('function', 'page_links', 'admin/journals.tpl', 51, false),array('block', 'iterate', 'admin/journals.tpl', 30, false),array('modifier', 'escape', 'admin/journals.tpl', 35, false),)), $this); ?>

<?php $this->assign('pageTitle', "journal.journals");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<br />

<table width="100%" class="listing">
	<tr>
		<td colspan="8" class="headseparator">&nbsp;</td>
	</tr>
	<tr valign="top" class="heading">
		<td width="35%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalTitle"), $this);?>
</td>
		<td width="35%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "journal.path"), $this);?>
</td>
		<td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.order"), $this);?>
</td>
		<td width="20%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="8" class="headseparator">&nbsp;</td>
	</tr>
	<?php $this->_tag_stack[] = array('iterate', array('from' => 'journals','item' => 'journal')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top">
		<td><a class="action" href="<?php echo $this->_tpl_vars['indexUrl']; ?>
/<?php echo $this->_tpl_vars['journal']->getPath(); ?>
/manager"><?php echo $this->_tpl_vars['journal']->getTitle(); ?>
</a></td>
		<td><?php echo $this->_tpl_vars['journal']->getPath(); ?>
</td>
		<td><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/admin/moveJournal?d=u&amp;journalId=<?php echo $this->_tpl_vars['journal']->getJournalId(); ?>
">&uarr;</a> <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/admin/moveJournal?d=d&amp;journalId=<?php echo $this->_tpl_vars['journal']->getJournalId(); ?>
">&darr;</a></td>
		<td align="right"><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/admin/editJournal/<?php echo $this->_tpl_vars['journal']->getJournalId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a> <a class="action" href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/admin/deleteJournal/<?php echo $this->_tpl_vars['journal']->getJournalId(); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.journals.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></td>
	</tr>
	<tr>
		<td colspan="4" class="<?php if (($this->_foreach['journals']['iteration'] == $this->_foreach['journals']['total'])): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack); ?>
	<?php if ($this->_tpl_vars['journals']->wasEmpty()): ?>
	<tr>
		<td colspan="4" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.journals.noneCreated"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="4" class="endseparator">&nbsp;</td>
	<tr>
	<?php else: ?>
		<tr>
			<td colspan="2" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['journals']), $this);?>
</td>
			<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'journals','iterator' => $this->_tpl_vars['journals']), $this);?>
</td>
		</tr>
	<?php endif; ?>
</table>

<p><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/admin/createJournal" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.journals.create"), $this);?>
</a> | <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/admin/importOJS1" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.journals.importOJS1"), $this);?>
</a></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>