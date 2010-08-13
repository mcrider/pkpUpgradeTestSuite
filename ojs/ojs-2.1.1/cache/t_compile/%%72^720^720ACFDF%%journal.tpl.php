<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:30
         compiled from index/journal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'index/journal.tpl', 20, false),array('function', 'translate', 'index/journal.tpl', 30, false),array('function', 'url', 'index/journal.tpl', 36, false),)), $this); ?>

<?php $this->assign('pageTitleTranslated', $this->_tpl_vars['siteTitle']);  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div><?php echo $this->_tpl_vars['journalDescription']; ?>
</div>

<br />

<?php if ($this->_tpl_vars['homepageImage']): ?>
<div align="center"><img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImage']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" width="<?php echo $this->_tpl_vars['homepageImage']['width']; ?>
" height="<?php echo $this->_tpl_vars['homepageImage']['height']; ?>
" border="0" alt="" /></div>
<?php endif; ?>

<br /><br />

<?php echo $this->_tpl_vars['additionalHomeContent']; ?>


<?php if ($this->_tpl_vars['enableAnnouncementsHomepage']): ?>
		<br />
	<center><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.announcementsHome"), $this);?>
</h3></center>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "announcement/list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
	<table width="100%">
		<tr>
			<td>&nbsp;</td>
		<tr>
			<td align="right"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'announcement'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.moreAnnouncements"), $this);?>
</a></td>
		</tr>
	</table>
<?php endif; ?>

<?php if ($this->_tpl_vars['issue']): ?>
		<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h3>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "issue/view.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>