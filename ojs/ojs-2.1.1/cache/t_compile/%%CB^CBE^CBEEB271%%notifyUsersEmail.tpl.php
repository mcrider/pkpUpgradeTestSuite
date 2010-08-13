<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:29
         compiled from editor/notifyUsersEmail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'editor/notifyUsersEmail.tpl', 5, false),array('function', 'url', 'editor/notifyUsersEmail.tpl', 6, false),array('modifier', 'strip_tags', 'editor/notifyUsersEmail.tpl', 13, false),)), $this); ?>
<?php echo $this->_tpl_vars['body']; ?>


<?php echo $this->_tpl_vars['journal']->getTitle(); ?>

<?php echo $this->_tpl_vars['issue']->getIssueIdentification(); ?>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>

<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId()), $this);?>


<?php $_from = $this->_tpl_vars['publishedArticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sections'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sections']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sectionId'] => $this->_tpl_vars['section']):
        $this->_foreach['sections']['iteration']++;
 if ($this->_tpl_vars['section']['title']):  echo $this->_tpl_vars['section']['title'];  endif; ?>

--------
<?php $_from = $this->_tpl_vars['section']['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
 echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp));  if ($this->_tpl_vars['article']->getPages()): ?> (<?php echo $this->_tpl_vars['article']->getPages(); ?>
)<?php endif; ?>

<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authorList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authorList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['author']):
        $this->_foreach['authorList']['iteration']++;
?>
	<?php echo $this->_tpl_vars['author']->getFullName();  if (! ($this->_foreach['authorList']['iteration'] == $this->_foreach['authorList']['total'])): ?>,<?php endif;  endforeach; endif; unset($_from); ?>


<?php endforeach; endif; unset($_from); ?>

<?php endforeach; endif; unset($_from);  echo '{$templateSignature}'; ?>
