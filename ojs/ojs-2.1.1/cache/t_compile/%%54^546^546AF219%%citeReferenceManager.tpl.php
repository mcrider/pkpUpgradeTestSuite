<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:34
         compiled from rt/citeReferenceManager.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'rt/citeReferenceManager.tpl', 12, false),array('modifier', 'to_array', 'rt/citeReferenceManager.tpl', 12, false),array('modifier', 'assign', 'rt/citeReferenceManager.tpl', 12, false),array('modifier', 'escape', 'rt/citeReferenceManager.tpl', 18, false),array('modifier', 'date_format', 'rt/citeReferenceManager.tpl', 20, false),array('modifier', 'strip_tags', 'rt/citeReferenceManager.tpl', 21, false),array('modifier', 'replace', 'rt/citeReferenceManager.tpl', 24, false),)), $this); ?>
<?php if ($this->_tpl_vars['galleyId']): ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'articleUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'articleUrl'));?>

<?php else: ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['articleId']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'articleUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'articleUrl'));?>

<?php endif; ?>
TY  - JOUR
<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
AU  - <?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName(true))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

<?php endforeach; endif; unset($_from); ?>
PY  - <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>

TI  - <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>

JF  - <?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
; <?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

Y2  - <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>

KW  - <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getSubject())) ? $this->_run_mod_handler('replace', true, $_tmp, ';', ',') : smarty_modifier_replace($_tmp, ';', ',')))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

N2  - <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getArticleAbstract())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "\n", ' ') : smarty_modifier_replace($_tmp, "\n", ' ')))) ? $this->_run_mod_handler('replace', true, $_tmp, "\r", ' ') : smarty_modifier_replace($_tmp, "\r", ' ')); ?>

UR  - <?php echo $this->_tpl_vars['articleUrl']; ?>

