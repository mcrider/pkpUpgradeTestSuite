<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:35
         compiled from search/authorDetails.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'search/authorDetails.tpl', 26, false),array('function', 'translate', 'search/authorDetails.tpl', 28, false),array('modifier', 'escape', 'search/authorDetails.tpl', 26, false),array('modifier', 'strip_unsafe_html', 'search/authorDetails.tpl', 27, false),array('modifier', 'to_array', 'search/authorDetails.tpl', 31, false),)), $this); ?>

<?php $this->assign('pageTitle', "search.authorDetails");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_tpl_vars['lastName']; ?>
, <?php echo $this->_tpl_vars['firstName'];  if ($this->_tpl_vars['middleName']): ?> <?php echo $this->_tpl_vars['middleName'];  endif;  if ($this->_tpl_vars['affiliation']): ?> <?php echo $this->_tpl_vars['affiliation'];  endif; ?></h3>
<ul>
<?php $_from = $this->_tpl_vars['publishedArticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
	<?php $this->assign('issueId', $this->_tpl_vars['article']->getIssueId()); ?>
	<?php $this->assign('issue', $this->_tpl_vars['issues'][$this->_tpl_vars['issueId']]); ?>
	<?php $this->assign('issueUnavailable', $this->_tpl_vars['issuesUnavailable'][$this->_tpl_vars['issueId']]); ?>
	<?php $this->assign('sectionId', $this->_tpl_vars['article']->getSectionId()); ?>
	<?php $this->assign('section', $this->_tpl_vars['sections'][$this->_tpl_vars['sectionId']]); ?>
	<?php if ($this->_tpl_vars['issue']->getPublished()): ?>
	<li>

		<i><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId()), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a> - <?php echo ((is_array($_tmp=$this->_tpl_vars['section']->getSectionTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</i><br />
		<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
<br/>
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId()), $this);?>
" class="file"><?php if ($this->_tpl_vars['section']->getAbstractsDisabled()):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.details"), $this); else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this); endif; ?></a>
		<?php if (( ! $this->_tpl_vars['issueUnavailable'] || $this->_tpl_vars['article']->getAccessStatus() )): ?>
		<?php $_from = $this->_tpl_vars['article']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galleyList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galleyList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['galley']):
        $this->_foreach['galleyList']['iteration']++;
?>
			&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getBestArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getGalleyId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getGalleyId()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
		<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
	</li>
	<?php endif;  endforeach; endif; unset($_from); ?>
</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>