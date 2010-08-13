<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:49
         compiled from issue/archive.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'iterate', 'issue/archive.tpl', 15, false),array('function', 'page_info', 'issue/archive.tpl', 30, false),array('function', 'page_links', 'issue/archive.tpl', 31, false),)), $this); ?>

<?php $this->assign('pageTitle', "archive.archives"); ?> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->_tag_stack[] = array('iterate', array('from' => 'issueGroups','item' => 'issues','key' => 'key')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
	<div>
	<h3><?php echo $this->_tpl_vars['key']; ?>
</h3>

	<?php $_from = $this->_tpl_vars['issues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['issue']):
?>
		<h4><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/view/<?php echo $this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['currentJournal']); ?>
"><?php echo $this->_tpl_vars['issue']->getIssueIdentification(); ?>
</a></h4>
	<?php endforeach; endif; unset($_from); ?>

	</div>

	<?php if (! $this->_tpl_vars['issueGroups']->eof()): ?>
	<div class="separator"></div>
	<?php endif;  $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack);  if (! $this->_tpl_vars['issueGroups']->wasEmpty()): ?>
	<?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['issueGroups']), $this);?>
&nbsp;&nbsp;&nbsp;&nbsp;
	<?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'issues','iterator' => $this->_tpl_vars['issueGroups']), $this);?>

<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>