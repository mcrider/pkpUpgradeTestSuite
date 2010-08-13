<?php /* Smarty version 2.6.9, created on 2005-07-08 06:01:59
         compiled from index/journal.tpl */ ?>

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
/<?php echo $this->_tpl_vars['homepageImage']['uploadName']; ?>
" width="<?php echo $this->_tpl_vars['homepageImage']['width']; ?>
" height="<?php echo $this->_tpl_vars['homepageImage']['height']; ?>
" border="0" alt="" /></div>
<?php endif; ?>

<br /><br />

<?php echo $this->_tpl_vars['additionalHomeContent']; ?>


<?php if ($this->_tpl_vars['issue']): ?>
		<br/>&nbsp;
	<h3><?php echo $this->_tpl_vars['issue']->getIssueIdentification(); ?>
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