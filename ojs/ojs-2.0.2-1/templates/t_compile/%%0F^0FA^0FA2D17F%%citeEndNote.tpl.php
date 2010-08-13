<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:18
         compiled from rt/citeEndNote.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'rt/citeEndNote.tpl', 12, false),array('modifier', 'date_format', 'rt/citeEndNote.tpl', 16, false),)), $this); ?>

<?php $this->assign('escapedArticleId', ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)));  $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
	%A <?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName(true))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

<?php endforeach; endif; unset($_from); ?>
	%D <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>

	%T <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

	%B <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>

	%9 <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getSubject())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

	%! <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

	%K <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getSubject())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

	%X <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleAbstract())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

	%U <?php echo $this->_tpl_vars['pageUrl']; ?>
/article/view/<?php echo $this->_tpl_vars['escapedArticleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>

	