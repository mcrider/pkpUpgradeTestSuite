<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:18
         compiled from rt/citeProCite.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'rt/citeProCite.tpl', 14, false),array('modifier', 'date_format', 'rt/citeProCite.tpl', 16, false),)), $this); ?>

	TY  - JOUR
<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
	AU  - <?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName(true))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

<?php endforeach; endif; unset($_from); ?>
	PY  - <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>

	TI  - <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

	JF  - <?php echo $this->_tpl_vars['journal']->getTitle(); ?>
; <?php echo $this->_tpl_vars['issue']->getIssueIdentification(); ?>

	Y2  - <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>

	KW  - <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getSubject())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

	N2  - <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleAbstract())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

	UR  - <?php echo $this->_tpl_vars['pageUrl']; ?>
/article/view/<?php echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>

	