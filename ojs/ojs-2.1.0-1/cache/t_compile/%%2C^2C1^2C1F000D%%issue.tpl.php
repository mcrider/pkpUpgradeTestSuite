<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:36
         compiled from issue/issue.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'issue/issue.tpl', 13, false),array('modifier', 'strip_unsafe_html', 'issue/issue.tpl', 18, false),array('modifier', 'to_array', 'issue/issue.tpl', 23, false),array('function', 'url', 'issue/issue.tpl', 20, false),array('function', 'translate', 'issue/issue.tpl', 20, false),)), $this); ?>

<?php $_from = $this->_tpl_vars['publishedArticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sections'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sections']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sectionId'] => $this->_tpl_vars['section']):
        $this->_foreach['sections']['iteration']++;
 if ($this->_tpl_vars['section']['title']): ?><h4><?php echo ((is_array($_tmp=$this->_tpl_vars['section']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h4><?php endif; ?>

<?php $_from = $this->_tpl_vars['section']['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
<table width="100%">
<tr valign="top">
	<td width="75%"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</td>
	<td align="right" width="25%">
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal'])), $this);?>
" class="file"><?php if ($this->_tpl_vars['section']['abstractsDisabled']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.details"), $this); else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this); endif; ?></a>
		<?php if (( ! $this->_tpl_vars['subscriptionRequired'] || $this->_tpl_vars['article']->getAccessStatus() || $this->_tpl_vars['subscribedUser'] || $this->_tpl_vars['subscribedDomain'] )): ?>
		<?php $_from = $this->_tpl_vars['article']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galleyList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galleyList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['galley']):
        $this->_foreach['galleyList']['iteration']++;
?>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal']))) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getGalleyId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getGalleyId()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
		<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
	</td>
</tr>
<tr>
	<td style="padding-left: 30px;font-style: italic;">
		<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authorList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authorList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['author']):
        $this->_foreach['authorList']['iteration']++;
?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  if (! ($this->_foreach['authorList']['iteration'] == $this->_foreach['authorList']['total'])): ?>,<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</td>
	<td align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getPages())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
</table>
<?php endforeach; endif; unset($_from); ?>

<?php if (! ($this->_foreach['sections']['iteration'] == $this->_foreach['sections']['total'])): ?>
<div class="separator"></div>
<?php endif;  endforeach; endif; unset($_from); ?>