<?php /* Smarty version 2.6.9, created on 2005-07-08 06:01:59
         compiled from index/site.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'index/site.tpl', 17, false),array('block', 'iterate', 'index/site.tpl', 20, false),array('function', 'translate', 'index/site.tpl', 29, false),)), $this); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<br />

<?php if ($this->_tpl_vars['intro']): ?>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['intro'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
<?php endif; ?>

<?php $this->_tag_stack[] = array('iterate', array('from' => 'journals','item' => 'journal')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
<br />

<h3><?php echo $this->_tpl_vars['journal']->getTitle(); ?>
</h3>

<?php if ($this->_tpl_vars['journal']->getDescription()): ?>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getDescription())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
<?php endif; ?>

<p><a href="<?php echo $this->_tpl_vars['indexUrl']; ?>
/<?php echo $this->_tpl_vars['journal']->getPath(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "site.journalView"), $this);?>
</a> | <a href="<?php echo $this->_tpl_vars['indexUrl']; ?>
/<?php echo $this->_tpl_vars['journal']->getPath(); ?>
/issue/current" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "site.journalCurrent"), $this);?>
</a> | <a href="<?php echo $this->_tpl_vars['indexUrl']; ?>
/<?php echo $this->_tpl_vars['journal']->getPath(); ?>
/user/register" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "site.journalRegister"), $this);?>
</a></p>
<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>