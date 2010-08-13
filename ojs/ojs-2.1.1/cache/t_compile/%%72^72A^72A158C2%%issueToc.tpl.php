<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:29
         compiled from editor/issues/issueToc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'editor/issues/issueToc.tpl', 13, false),array('modifier', 'assign', 'editor/issues/issueToc.tpl', 43, false),array('modifier', 'strip_unsafe_html', 'editor/issues/issueToc.tpl', 86, false),array('modifier', 'truncate', 'editor/issues/issueToc.tpl', 86, false),array('function', 'url', 'editor/issues/issueToc.tpl', 22, false),array('function', 'translate', 'editor/issues/issueToc.tpl', 22, false),array('function', 'html_options', 'editor/issues/issueToc.tpl', 31, false),array('function', 'icon', 'editor/issues/issueToc.tpl', 97, false),)), $this); ?>

<?php if (! $this->_tpl_vars['noIssue']):  $this->assign('pageTitleTranslated', ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)));  $this->assign('pageCrumbTitleTranslated', ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification(false,true))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)));  else:  $this->assign('pageTitle', "editor.issues.noLiveIssues");  $this->assign('pageCrumbTitle', "editor.issues.noLiveIssues");  endif;  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createIssue'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.createIssue"), $this);?>
</a></li>
	<li<?php if ($this->_tpl_vars['unpublished']): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'futureIssues'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.futureIssues"), $this);?>
</a></li>
	<li<?php if (! $this->_tpl_vars['unpublished']): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'backIssues'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.issueArchive"), $this);?>
</a></li>
</ul>

<?php if (! $this->_tpl_vars['noIssue']): ?>
<br />

<form action="#">
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.issue"), $this);?>
: <select name="issue" class="selectMenu" onchange="if(this.options[this.selectedIndex].value > 0) location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'issueToc','path' => 'ISSUE_ID','escape' => false), $this);?>
'.replace('ISSUE_ID', this.options[this.selectedIndex].value)" size="1"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['issueOptions'],'selected' => $this->_tpl_vars['issueId']), $this);?>
</select>
</form>

<div class="separator"></div>

<ul class="menu">
	<li class="current"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'issueToc','path' => $this->_tpl_vars['issueId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'issueData','path' => $this->_tpl_vars['issueId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.issueData"), $this);?>
</a></li>
	<?php if ($this->_tpl_vars['unpublished']): ?><li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.previewIssue"), $this);?>
</a></li><?php endif; ?>
</ul>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</h3>
<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'resetSectionOrder','path' => $this->_tpl_vars['issueId']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

<?php if ($this->_tpl_vars['customSectionOrderingExists']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.resetSectionOrder",'url' => $this->_tpl_vars['url']), $this);?>
<br/><?php endif; ?>
<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateIssueToc','path' => $this->_tpl_vars['issueId']), $this);?>
" onsubmit="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.saveChanges"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')">

<?php $this->assign('numCols', 6);  if (( $this->_tpl_vars['issueAccess'] == 2 && $this->_tpl_vars['enableSubscriptions'] )):  $this->assign('numCols', $this->_tpl_vars['numCols']+1);  endif;  if ($this->_tpl_vars['enablePublicArticleId']):  $this->assign('numCols', $this->_tpl_vars['numCols']+1);  endif;  if ($this->_tpl_vars['enablePageNumber']):  $this->assign('numCols', $this->_tpl_vars['numCols']+1);  endif; ?>

<?php $_from = $this->_tpl_vars['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['section']):
?>
<h4><?php echo $this->_tpl_vars['section'][1];  if ($this->_tpl_vars['section'][4]): ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'moveSectionToc','path' => $this->_tpl_vars['issueId'],'d' => 'u','newPos' => $this->_tpl_vars['section'][4],'sectionId' => $this->_tpl_vars['section'][0]), $this);?>
" class="plain">&uarr;</a><?php else: ?>&uarr;<?php endif; ?> <?php if ($this->_tpl_vars['section'][5]): ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'moveSectionToc','path' => $this->_tpl_vars['issueId'],'d' => 'd','newPos' => $this->_tpl_vars['section'][5],'sectionId' => $this->_tpl_vars['section'][0]), $this);?>
" class="plain">&darr;</a><?php else: ?>&darr;<?php endif; ?></h4>

<table width="100%" class="listing">
	<tr>
		<td colspan="<?php echo $this->_tpl_vars['numCols']; ?>
" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="10%" colspan="2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.order"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.authors"), $this);?>
</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</td>
		<?php if (( $this->_tpl_vars['issueAccess'] == 2 && $this->_tpl_vars['enableSubscriptions'] )): ?><td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.access"), $this);?>
</td><?php endif; ?>
		<?php if ($this->_tpl_vars['enablePublicArticleId']): ?><td width="7%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.publicId"), $this);?>
</td><?php endif; ?>
		<?php if ($this->_tpl_vars['enablePageNumber']): ?><td width="7%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.pages"), $this);?>
</td><?php endif; ?>
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.remove"), $this);?>
</td>
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.proofed"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="<?php echo $this->_tpl_vars['numCols']; ?>
" class="headseparator">&nbsp;</td>
	</tr>

	<?php $this->assign('articleSeq', 0); ?>
	<?php $_from = $this->_tpl_vars['section'][2]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['currSection'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['currSection']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['currSection']['iteration']++;
?>

	<?php $this->assign('articleSeq', $this->_tpl_vars['articleSeq']+1); ?>
	<?php $this->assign('articleId', $this->_tpl_vars['article']->getArticleID()); ?>
	<tr>
		<td><?php echo $this->_tpl_vars['articleSeq']; ?>
.</td>
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'moveArticleToc','path' => $this->_tpl_vars['issueId'],'d' => 'u','sectionId' => $this->_tpl_vars['section'][0],'pubId' => $this->_tpl_vars['article']->getPubId()), $this);?>
" class="plain">&uarr;</a>&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'moveArticleToc','path' => $this->_tpl_vars['issueId'],'d' => 'd','sectionId' => $this->_tpl_vars['section'][0],'pubId' => $this->_tpl_vars['article']->getPubId()), $this);?>
" class="plain">&darr;</a></td>
		<td>
			<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authorList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authorList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['author']):
        $this->_foreach['authorList']['iteration']++;
?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  if (! ($this->_foreach['authorList']['iteration'] == $this->_foreach['authorList']['total'])): ?>,<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		</td>
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submission','path' => $this->_tpl_vars['articleId']), $this);?>
" class="action"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 60, "...") : smarty_modifier_truncate($_tmp, 60, "...")); ?>
</a></td>
		<?php if (( ( $this->_tpl_vars['issueAccess'] == 2 ) && $this->_tpl_vars['enableSubscriptions'] )): ?>
		<td><select name="accessStatus[<?php echo $this->_tpl_vars['article']->getPubId(); ?>
]" size="1" class="selectMenu"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['accessOptions'],'selected' => $this->_tpl_vars['article']->getAccessStatus()), $this);?>
</select></td>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['enablePublicArticleId']): ?>
		<td><input type="text" name="publishedArticles[<?php echo $this->_tpl_vars['article']->getArticleId(); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getPublicArticleId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="7" maxlength="255" class="textField" /></td>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['enablePageNumber']): ?><td><input type="text" name="pages[<?php echo $this->_tpl_vars['article']->getArticleId(); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getPages())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="7" maxlength="255" class="textField" /></td><?php endif; ?>
		<td><input type="checkbox" name="remove[<?php echo $this->_tpl_vars['article']->getArticleId(); ?>
]" value="<?php echo $this->_tpl_vars['article']->getPubId(); ?>
" /></td>
		<td>
			<?php if (in_array ( $this->_tpl_vars['article']->getArticleId() , $this->_tpl_vars['proofedArticleIds'] )): ?>
				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'checked'), $this);?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'unchecked'), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td colspan="<?php echo $this->_tpl_vars['numCols']; ?>
" class="<?php if (($this->_foreach['currSection']['iteration'] == $this->_foreach['currSection']['total'])): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>

	<?php endforeach; endif; unset($_from); ?>
</table>
<?php endforeach; else: ?>
<p><em><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.noArticles"), $this);?>
</em></p>

<div class="separator"></div>
<?php endif; unset($_from); ?>

<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <?php if ($this->_tpl_vars['unpublished']): ?><input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.publishIssue"), $this);?>
" onclick="confirmAction('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'publishIssue','path' => $this->_tpl_vars['issueId']), $this);?>
', '<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.confirmPublish"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="button" /><?php endif; ?>

</form>

<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>