<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:15
         compiled from issue/archive.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'iterate', 'issue/archive.tpl', 15, false),array('modifier', 'escape', 'issue/archive.tpl', 25, false),array('function', 'page_info', 'issue/archive.tpl', 33, false),array('function', 'page_links', 'issue/archive.tpl', 34, false),array('function', 'translate', 'issue/archive.tpl', 36, false),)), $this); ?>

<?php $this->assign('pageTitle', "archive.archives"); ?> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->_tag_stack[] = array('iterate', array('from' => 'issues','item' => 'issue')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
	<?php if ($this->_tpl_vars['issue']->getYear() != $this->_tpl_vars['lastYear']): ?>
		<?php if (! $this->_tpl_vars['notFirstYear']): ?>
			<?php $this->assign('notFirstYear', 1); ?>
		<?php else: ?>
			</div>
			<br />
			<div class="separator"></div>
		<?php endif; ?>
		<div>
		<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getYear())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h3>
		<?php $this->assign('lastYear', $this->_tpl_vars['issue']->getYear()); ?>
	<?php endif; ?>
	<h4><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/view/<?php echo $this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['currentJournal']); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></h4>
<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['notFirstYear']): ?></div><?php endif; ?>

<?php if (! $this->_tpl_vars['issues']->wasEmpty()): ?>
	<?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['issues']), $this);?>
&nbsp;&nbsp;&nbsp;&nbsp;
	<?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'issues','iterator' => $this->_tpl_vars['issues']), $this);?>

<?php else: ?>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "current.noCurrentIssueDesc"), $this);?>

<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>