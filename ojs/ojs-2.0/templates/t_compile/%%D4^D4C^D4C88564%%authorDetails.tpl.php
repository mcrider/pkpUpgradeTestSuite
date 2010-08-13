<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:53
         compiled from search/authorDetails.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'search/authorDetails.tpl', 29, false),)), $this); ?>

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
	<?php $this->assign('bestIssueId', $this->_tpl_vars['issue']->getBestIssueId()); ?>
	<?php $this->assign('issueUnavailable', $this->_tpl_vars['issuesUnavailable'][$this->_tpl_vars['issueId']]); ?>
	<?php $this->assign('sectionId', $this->_tpl_vars['article']->getSectionId()); ?>
	<?php $this->assign('section', $this->_tpl_vars['sections'][$this->_tpl_vars['sectionId']]); ?>
	<?php if ($this->_tpl_vars['issue']->getPublished()): ?>
	<li>

		<i><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/issue/view/<?php echo $this->_tpl_vars['bestIssueId']; ?>
"><?php echo $this->_tpl_vars['issue']->getIssueIdentification(); ?>
</a> - <?php echo $this->_tpl_vars['section']->getTitle(); ?>
</i><br />
		<?php echo $this->_tpl_vars['article']->getArticleTitle(); ?>
<br/>
		<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/article/view/<?php echo $this->_tpl_vars['article']->getBestArticleId(); ?>
" class="file"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.abstract"), $this);?>
</a>
		<?php if (( ! $this->_tpl_vars['issueUnavailable'] || $this->_tpl_vars['article']->getAccessStatus() )): ?>
		<?php $_from = $this->_tpl_vars['article']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galleyList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galleyList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['galley']):
        $this->_foreach['galleyList']['iteration']++;
?>
			&nbsp;<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/article/view/<?php echo $this->_tpl_vars['article']->getBestArticleId(); ?>
/<?php echo $this->_tpl_vars['galley']->getGalleyId(); ?>
" class="file"><?php echo $this->_tpl_vars['galley']->getLabel(); ?>
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