<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:53
         compiled from search/searchResults.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'search/searchResults.tpl', 21, false),array('function', 'page_info', 'search/searchResults.tpl', 63, false),array('function', 'page_links', 'search/searchResults.tpl', 64, false),array('block', 'iterate', 'search/searchResults.tpl', 27, false),)), $this); ?>

<?php $this->assign('pageTitle', "search.searchResults"); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<br/>

<table width="100%" class="listing">
<tr><td colspan="4" class="headseparator">&nbsp;</td></tr>
<tr class="heading" valign="bottom">
	<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "journal.journal"), $this);?>
</td>
	<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.issue"), $this);?>
</td>
	<td width="60%" colspan="2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</td>
</tr>
<tr><td colspan="4" class="headseparator">&nbsp;</td></tr>

<?php $this->_tag_stack[] = array('iterate', array('from' => 'results','item' => 'result')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start();  $this->assign('publishedArticle', $this->_tpl_vars['result']['publishedArticle']);  $this->assign('article', $this->_tpl_vars['result']['article']);  $this->assign('issue', $this->_tpl_vars['result']['issue']);  $this->assign('issueAvailable', $this->_tpl_vars['result']['issueAvailable']);  $this->assign('journal', $this->_tpl_vars['result']['journal']); ?>
<tr valign="top">
	<td><a href="<?php echo $this->_tpl_vars['indexUrl']; ?>
/<?php echo $this->_tpl_vars['journal']->getPath(); ?>
"><?php echo $this->_tpl_vars['journal']->getTitle(); ?>
</a></td>
	<td><?php if ($this->_tpl_vars['issue']->getAccessStatus()): ?><a href="<?php echo $this->_tpl_vars['indexUrl']; ?>
/<?php echo $this->_tpl_vars['journal']->getPath(); ?>
/issue/view/<?php echo $this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['journal']); ?>
"><?php endif;  echo $this->_tpl_vars['issue']->getIssueIdentification();  if ($this->_tpl_vars['issue']->getAccessStatus()): ?></a><?php endif; ?></td>
	<td width="35%"><?php echo $this->_tpl_vars['article']->getArticleTitle(); ?>
</td>
	<td width="25%" align="right">
		<a href="<?php echo $this->_tpl_vars['indexUrl']; ?>
/<?php echo $this->_tpl_vars['journal']->getPath(); ?>
/article/view/<?php echo $this->_tpl_vars['publishedArticle']->getBestArticleId($this->_tpl_vars['journal']); ?>
" class="file"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.abstract"), $this);?>
</a>
		<?php if (( $this->_tpl_vars['issue']->getAccessStatus() || $this->_tpl_vars['issueAvailable'] )): ?>
		<?php $_from = $this->_tpl_vars['publishedArticle']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galleyList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galleyList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['galley']):
        $this->_foreach['galleyList']['iteration']++;
?>
			&nbsp;
			<a href="<?php echo $this->_tpl_vars['indexUrl']; ?>
/<?php echo $this->_tpl_vars['journal']->getPath(); ?>
/article/view/<?php echo $this->_tpl_vars['publishedArticle']->getBestArticleId($this->_tpl_vars['journal']); ?>
/<?php echo $this->_tpl_vars['galley']->getGalleyId(); ?>
" class="file"><?php echo $this->_tpl_vars['galley']->getLabel(); ?>
</a>
		<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
	</td>
</tr>
<tr>
	<td colspan="4" style="padding-left: 30px;font-style: italic;">
		<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authorList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authorList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['author']):
        $this->_foreach['authorList']['iteration']++;
?>
			<?php echo $this->_tpl_vars['author']->getFullName();  if (! ($this->_foreach['authorList']['iteration'] == $this->_foreach['authorList']['total'])): ?>,<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</td>
</tr>
<tr><td colspan="4" class="<?php if ($this->_tpl_vars['results']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td></tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['results']->wasEmpty()): ?>
<tr>
<td colspan="4" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.noResults"), $this);?>
</td>
</tr>
<tr><td colspan="4" class="endseparator">&nbsp;</td></tr>
<?php else: ?>
	<tr>
		<td colspan="2" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['results']), $this);?>
</td>
		<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('iterator' => $this->_tpl_vars['results'],'name' => 'search'), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>