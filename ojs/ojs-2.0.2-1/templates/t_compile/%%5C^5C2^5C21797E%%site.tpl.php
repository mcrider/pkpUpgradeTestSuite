<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:11
         compiled from about/site.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'about/site.tpl', 15, false),array('modifier', 'escape', 'about/site.tpl', 21, false),array('function', 'translate', 'about/site.tpl', 18, false),array('block', 'iterate', 'about/site.tpl', 20, false),)), $this); ?>

<?php $this->assign('pageTitle', "about.aboutSite");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  if (! empty ( $this->_tpl_vars['about'] )): ?>
	<p><?php echo ((is_array($_tmp=$this->_tpl_vars['about'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
<?php endif; ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "journal.journals"), $this);?>
</h3>
<ul class="plain">
<?php $this->_tag_stack[] = array('iterate', array('from' => 'journals','item' => 'journal')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['indexUrl']; ?>
/<?php echo $this->_tpl_vars['journal']->getPath(); ?>
/about"><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></li>
<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack); ?>
</ul>

<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/aboutThisPublishingSystem"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.aboutThisPublishingSystem"), $this);?>
</a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>