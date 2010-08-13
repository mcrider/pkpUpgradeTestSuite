<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:49
         compiled from help/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'help/view.tpl', 20, false),array('function', 'get_help_id', 'help/view.tpl', 26, false),)), $this); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="sidebar">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help/toc.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<div id="main">

	<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.ojsHelp"), $this);?>
</h4>
	
	<div class="thickSeparator"></div>
	
	<div id="breadcrumb">
		<?php if ($this->_tpl_vars['topic']->getId() == "index/topic/000000"): ?>
			<a href="<?php echo $this->_plugins['function']['get_help_id'][0][0]->smartyGetHelpId(array('key' => "index.index",'url' => 'true'), $this);?>
" class="current"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.home"), $this);?>
</a>
		<?php else: ?>
			<a href="<?php echo $this->_plugins['function']['get_help_id'][0][0]->smartyGetHelpId(array('key' => "index.index",'url' => 'true'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.home"), $this);?>
</a>
			<?php $_from = $this->_tpl_vars['breadcrumbs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['breadcrumbs'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['breadcrumbs']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['breadcrumb']):
        $this->_foreach['breadcrumbs']['iteration']++;
?>
				<?php if ($this->_tpl_vars['breadcrumb'] != $this->_tpl_vars['topic']->getId()): ?>
				 &gt; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/help/view/<?php echo $this->_tpl_vars['breadcrumb']; ?>
"><?php echo $this->_tpl_vars['key']; ?>
</a>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>		
			&gt; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/help/view/<?php echo $this->_tpl_vars['topic']->getId(); ?>
" class="current"><?php echo $this->_tpl_vars['topic']->getTitle(); ?>
</a>
		<?php endif; ?>
	</div>
	
	<h2><?php echo $this->_tpl_vars['topic']->getTitle(); ?>
</h2>
	
	<div id="content">
		<div><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help/topic.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
	</div>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>