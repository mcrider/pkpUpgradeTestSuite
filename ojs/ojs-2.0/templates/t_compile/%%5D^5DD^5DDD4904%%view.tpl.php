<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:49
         compiled from issue/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'issue/view.tpl', 18, false),)), $this); ?>

<?php $this->assign('pageTitleTranslated', $this->_tpl_vars['issueTitle']);  $this->assign('pageCrumbTitleTranslated', $this->_tpl_vars['issueCrumbTitle']);  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (! $this->_tpl_vars['showToc'] && $this->_tpl_vars['issue']): ?>
	<ul class="menu">
		<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/view/<?php echo $this->_tpl_vars['issueId']; ?>
/showToc"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</a></li>
	</ul>
	<br />
	<div><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/view/<?php echo $this->_tpl_vars['issueId']; ?>
/showToc"><img src="<?php echo $this->_tpl_vars['coverPagePath']; ?>
" border="0" alt="" /></a></div>
	<div><?php echo $this->_tpl_vars['issue']->getCoverPageDescription(); ?>
</div>
<?php else: ?>
	<?php if ($this->_tpl_vars['issue']): ?><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</h3><?php endif; ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "issue/issue.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>