<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:02
         compiled from rt/citeReferenceManager.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'rt/citeReferenceManager.tpl', 16, false),array('modifier', 'replace', 'rt/citeReferenceManager.tpl', 20, false),)), $this); ?>

	TY  - JOUR
<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
	AU  - <?php echo $this->_tpl_vars['author']->getFullName(true); ?>

<?php endforeach; endif; unset($_from); ?>
	PY  - <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>

	TI  - <?php echo $this->_tpl_vars['article']->getArticleTitle(); ?>

	JF  - <?php echo $this->_tpl_vars['journal']->getTitle(); ?>
; <?php echo $this->_tpl_vars['issue']->getIssueIdentification(); ?>

	Y2  - <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>

	KW  - <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getSubject())) ? $this->_run_mod_handler('replace', true, $_tmp, ';', ',') : smarty_modifier_replace($_tmp, ';', ',')); ?>

	N2  - <?php echo $this->_tpl_vars['article']->getArticleAbstract(); ?>

	UR  - <?php echo $this->_tpl_vars['pageUrl']; ?>
/article/view/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>

	