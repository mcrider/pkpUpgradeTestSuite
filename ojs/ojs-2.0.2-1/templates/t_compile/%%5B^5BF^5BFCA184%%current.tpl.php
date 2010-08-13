<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:15
         compiled from issue/current.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'issue/current.tpl', 19, false),array('modifier', 'escape', 'issue/current.tpl', 23, false),array('modifier', 'nl2br', 'issue/current.tpl', 23, false),)), $this); ?>

<?php $this->assign('pageTitleTranslated', $this->_tpl_vars['issueTitle']);  $this->assign('pageCrumbTitleTranslated', $this->_tpl_vars['issueCrumbTitle']);  $this->assign('currentUrl', ($this->_tpl_vars['pageUrl'])."/issue/current");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (! $this->_tpl_vars['showToc'] && $this->_tpl_vars['issue']): ?>
	<ul class="menu">
		<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/current/showToc"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</a></li>
	</ul>
	<br />
	<?php if ($this->_tpl_vars['coverPagePath']): ?><div><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/current/showToc"><img src="<?php echo $this->_tpl_vars['coverPagePath']; ?>
" border="0" alt=""<?php if ($this->_tpl_vars['height']): ?> height="<?php echo $this->_tpl_vars['height']; ?>
"<?php endif;  if ($this->_tpl_vars['width']): ?> width="<?php echo $this->_tpl_vars['width']; ?>
"<?php endif; ?> /></a></div><?php endif; ?>
	<div><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issue']->getCoverPageDescription())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
<?php elseif ($this->_tpl_vars['issue']): ?>
	<?php if ($this->_tpl_vars['issue']): ?><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</h3><?php endif; ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "issue/issue.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  else: ?>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "current.noCurrentIssueDesc"), $this);?>

<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>