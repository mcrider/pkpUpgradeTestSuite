<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:02
         compiled from rt/citeEndNote.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'rt/citeEndNote.tpl', 15, false),)), $this); ?>

<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
	%A <?php echo $this->_tpl_vars['author']->getFullName(true); ?>

<?php endforeach; endif; unset($_from); ?>
	%D <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>

	%T <?php echo $this->_tpl_vars['article']->getArticleTitle(); ?>

	%B <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>

	%9 <?php echo $this->_tpl_vars['article']->getSubject(); ?>

	%! <?php echo $this->_tpl_vars['article']->getArticleTitle(); ?>

	%K <?php echo $this->_tpl_vars['article']->getSubject(); ?>

	%X <?php echo $this->_tpl_vars['article']->getArticleAbstract(); ?>

	%U <?php echo $this->_tpl_vars['pageUrl']; ?>
/article/view/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>

	