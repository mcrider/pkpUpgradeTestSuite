<?php /* Smarty version 2.6.9, created on 2005-07-08 06:01:58
         compiled from editor/issues/issueToc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'editor/issues/issueToc.tpl', 22, false),array('function', 'html_options', 'editor/issues/issueToc.tpl', 32, false),array('modifier', 'escape', 'editor/issues/issueToc.tpl', 44, false),array('modifier', 'truncate', 'editor/issues/issueToc.tpl', 77, false),)), $this); ?>

<?php if (! $this->_tpl_vars['noIssue']):  $this->assign('pageTitleTranslated', $this->_tpl_vars['issue']->getIssueIdentification());  $this->assign('pageCrumbTitleTranslated', $this->_tpl_vars['issue']->getIssueIdentification(false,true));  else:  $this->assign('pageTitle', "editor.issues.noLiveIssues");  $this->assign('pageCrumbTitle', "editor.issues.noLiveIssues");  endif;  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/createIssue"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.createIssue"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/schedulingQueue"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInScheduling"), $this);?>
</a></li>
	<li<?php if ($this->_tpl_vars['unpublished']): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/futureIssues"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.futureIssues"), $this);?>
</a></li>
	<li<?php if (! $this->_tpl_vars['unpublished']): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/backIssues"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.issueArchive"), $this);?>
</a></li>
</ul>

<?php if (! $this->_tpl_vars['noIssue']): ?>
<br />

<form>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.issue"), $this);?>
: <select name="issue" class="selectMenu" onchange="if(this.options[this.selectedIndex].value > 0) location.href='<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/issueToc/'+this.options[this.selectedIndex].value" size="1"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['issueOptions'],'selected' => $this->_tpl_vars['issueId']), $this);?>
</select>
</form>

<div class="separator"></div>

<ul class="menu">
	<li class="current"><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/issueToc/<?php echo $this->_tpl_vars['issueId']; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/issueData/<?php echo $this->_tpl_vars['issueId']; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.issueData"), $this);?>
</a></li>
</ul>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</h3>

<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/updateIssueToc/<?php echo $this->_tpl_vars['issueId']; ?>
" onsubmit="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.saveChanges"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')">

<?php $_from = $this->_tpl_vars['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['section']):
?>
<h4><?php echo $this->_tpl_vars['section'][1]; ?>
 <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/moveSectionToc/<?php echo $this->_tpl_vars['issueId']; ?>
?d=u&amp;sectionId=<?php echo $this->_tpl_vars['section'][0]; ?>
" class="plain">&uarr;</a> <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/moveSectionToc/<?php echo $this->_tpl_vars['issueId']; ?>
?d=d&amp;sectionId=<?php echo $this->_tpl_vars['section'][0]; ?>
" class="plain">&darr;</a></h4>

<table width="100%" class="listing">
	<tr>
		<td colspan="8" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="10%" colspan="2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.order"), $this);?>
</td>
		<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.authors"), $this);?>
</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</td>
		<?php if (( ( $this->_tpl_vars['issueAccess'] == 2 ) && $this->_tpl_vars['enableSubscriptions'] )): ?><td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.access"), $this);?>
</td><?php endif; ?>
		<?php if ($this->_tpl_vars['enablePublicArticleId']): ?><td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.publicId"), $this);?>
</td><?php endif; ?>
		<?php if ($this->_tpl_vars['enablePageNumber']): ?><td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.pages"), $this);?>
</td><?php endif; ?>
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.remove"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="8" class="headseparator">&nbsp;</td>
	</tr>

	<?php $_from = $this->_tpl_vars['section'][2]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['currSection'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['currSection']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['currSection']['iteration']++;
?>

	<?php $this->assign('articleId', $this->_tpl_vars['article']->getArticleID()); ?>
	<tr>
		<td><?php echo $this->_tpl_vars['article']->getSeq(); ?>
.</td>
		<td><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/moveArticleToc/<?php echo $this->_tpl_vars['issueId']; ?>
?d=u&amp;sectionId=<?php echo $this->_tpl_vars['section'][0]; ?>
&amp;pubId=<?php echo $this->_tpl_vars['article']->getPubId(); ?>
" class="plain">&uarr;</a>&nbsp;<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/moveArticleToc/<?php echo $this->_tpl_vars['issueId']; ?>
?d=d&amp;sectionId=<?php echo $this->_tpl_vars['section'][0]; ?>
&amp;pubId=<?php echo $this->_tpl_vars['article']->getPubId(); ?>
" class="plain">&darr;</a></td>
		<td>
			<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authorList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authorList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['author']):
        $this->_foreach['authorList']['iteration']++;
?>
				<?php echo $this->_tpl_vars['author']->getLastName();  if (! ($this->_foreach['authorList']['iteration'] == $this->_foreach['authorList']['total'])): ?>,<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		</td>
		<td><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submission/<?php echo $this->_tpl_vars['articleId']; ?>
" class="action"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('truncate', true, $_tmp, 60, "...") : smarty_modifier_truncate($_tmp, 60, "...")); ?>
</a></td>
		<?php if (( ( $this->_tpl_vars['issueAccess'] == 2 ) && $this->_tpl_vars['enableSubscriptions'] )): ?>
		<td><select name="accessStatus[<?php echo $this->_tpl_vars['article']->getPubId(); ?>
]" size="1" class="selectMenu"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['accessOptions'],'selected' => $this->_tpl_vars['article']->getAccessStatus()), $this);?>
</select></td>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['enablePublicArticleId']): ?>
		<td><input type="text" name="publishedArticles[<?php echo $this->_tpl_vars['article']->getArticleId(); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getPublicArticleId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="10" maxlength="255" class="textField" /></td>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['enablePageNumber']): ?><td width="12%"><input type="text" name="pages[<?php echo $this->_tpl_vars['article']->getArticleId(); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getPages())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="10" maxlength="255" class="textField" /></td><?php endif; ?>
		<td><input type="checkbox" name="remove[<?php echo $this->_tpl_vars['article']->getArticleId(); ?>
]" value="<?php echo $this->_tpl_vars['article']->getPubId(); ?>
" /></td>
	</tr>
	<tr>
		<td colspan="8" class="<?php if (($this->_foreach['currSection']['iteration'] == $this->_foreach['currSection']['total'])): ?>end<?php endif; ?>separator">&nbsp;</td>
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
" onclick="confirmAction('<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/publishIssue/<?php echo $this->_tpl_vars['issueId']; ?>
', '<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.confirmPublish"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="button" /><?php endif; ?>

</form>

<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>