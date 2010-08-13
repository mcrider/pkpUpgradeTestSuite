<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:35
         compiled from search/titleIndex.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'search/titleIndex.tpl', 27, false),array('function', 'url', 'search/titleIndex.tpl', 41, false),array('function', 'page_info', 'search/titleIndex.tpl', 70, false),array('function', 'page_links', 'search/titleIndex.tpl', 71, false),array('block', 'iterate', 'search/titleIndex.tpl', 33, false),array('modifier', 'escape', 'search/titleIndex.tpl', 41, false),array('modifier', 'strip_unsafe_html', 'search/titleIndex.tpl', 43, false),array('modifier', 'to_array', 'search/titleIndex.tpl', 49, false),)), $this); ?>

<?php $this->assign('pageTitle', "search.titleIndex"); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<br />

<?php if ($this->_tpl_vars['currentJournal']): ?>
	<?php $this->assign('numCols', 3);  else: ?>
	<?php $this->assign('numCols', 4);  endif; ?>

<table width="100%" class="listing">
<tr><td colspan="<?php echo $this->_tpl_vars['numCols']; ?>
" class="headseparator">&nbsp;</td></tr>
<tr class="heading" valign="bottom">
	<?php if (! $this->_tpl_vars['currentJournal']): ?><td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "journal.journal"), $this);?>
</td><?php endif; ?>
	<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.issue"), $this);?>
</td>
	<td width="<?php if (! $this->_tpl_vars['currentJournal']): ?>60%<?php else: ?>80%<?php endif; ?>" colspan="2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</td>
</tr>
<tr><td colspan="<?php echo $this->_tpl_vars['numCols']; ?>
" class="headseparator">&nbsp;</td></tr>

<?php $this->_tag_stack[] = array('iterate', array('from' => 'results','item' => 'result')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  $this->assign('publishedArticle', $this->_tpl_vars['result']['publishedArticle']);  $this->assign('article', $this->_tpl_vars['result']['article']);  $this->assign('section', $this->_tpl_vars['result']['section']);  $this->assign('issue', $this->_tpl_vars['result']['issue']);  $this->assign('issueAvailable', $this->_tpl_vars['result']['issueAvailable']);  $this->assign('journal', $this->_tpl_vars['result']['journal']); ?>
<tr valign="top">
	<?php if (! $this->_tpl_vars['currentJournal']): ?><td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath()), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td><?php endif; ?>
	<td><?php if ($this->_tpl_vars['issue']->getAccessStatus()): ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['journal'])), $this);?>
"><?php endif;  echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  if ($this->_tpl_vars['issue']->getAccessStatus()): ?></a><?php endif; ?></td>
	<td width="35%"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</td>
	<td width="25%" align="right">
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'article','op' => 'view','path' => $this->_tpl_vars['publishedArticle']->getBestArticleId($this->_tpl_vars['journal'])), $this);?>
" class="file"><?php if ($this->_tpl_vars['section']->getAbstractsDisabled()):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.details"), $this); else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this); endif; ?></a>
		<?php if (( $this->_tpl_vars['issue']->getAccessStatus() || $this->_tpl_vars['issueAvailable'] )): ?>
		<?php $_from = $this->_tpl_vars['publishedArticle']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galleyList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galleyList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['galley']):
        $this->_foreach['galleyList']['iteration']++;
?>
			&nbsp;
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'article','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['publishedArticle']->getBestArticleId($this->_tpl_vars['journal']))) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getGalleyId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getGalleyId()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
		<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
	</td>
</tr>
<tr>
	<td colspan="<?php echo $this->_tpl_vars['numCols']; ?>
" style="padding-left: 30px;font-style: italic;">
		<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authorList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authorList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['author']):
        $this->_foreach['authorList']['iteration']++;
?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  if (! ($this->_foreach['authorList']['iteration'] == $this->_foreach['authorList']['total'])): ?>,<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</td>
</tr>
<tr><td colspan="<?php echo $this->_tpl_vars['numCols']; ?>
" class="<?php if ($this->_tpl_vars['results']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td></tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['results']->wasEmpty()): ?>
<tr>
<td colspan="<?php echo $this->_tpl_vars['numCols']; ?>
" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.noResults"), $this);?>
</td>
</tr>
<tr><td colspan="<?php echo $this->_tpl_vars['numCols']; ?>
" class="endseparator">&nbsp;</td></tr>
<?php else: ?>
	<tr>
		<td <?php if (! $this->_tpl_vars['currentJournal']): ?>colspan="2" <?php endif; ?>align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['results']), $this);?>
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