<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:02
         compiled from rt/bio.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'rt/bio.tpl', 24, false),)), $this); ?>

<?php $this->assign('pageTitle', "rt.aboutAuthor"); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rt/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3>"<?php echo $this->_tpl_vars['article']->getArticleTitle(); ?>
"</h3>

<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
?>
<p>
	<i><?php echo $this->_tpl_vars['author']->getFullName(); ?>
</i><br />
	<?php if ($this->_tpl_vars['author']->getAffiliation()):  echo $this->_tpl_vars['author']->getAffiliation();  endif; ?>
</p>

<p><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getBiography())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<?php if (! ($this->_foreach['authors']['iteration'] == $this->_foreach['authors']['total'])): ?><div class="separator"></div><?php endif; ?>

<?php endforeach; endif; unset($_from); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rt/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>