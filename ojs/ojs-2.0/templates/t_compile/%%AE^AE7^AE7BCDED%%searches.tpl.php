<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:53
         compiled from rtadmin/searches.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'rtadmin/searches.tpl', 16, false),array('function', 'page_info', 'rtadmin/searches.tpl', 45, false),array('function', 'page_links', 'rtadmin/searches.tpl', 46, false),array('block', 'iterate', 'rtadmin/searches.tpl', 30, false),array('modifier', 'truncate', 'rtadmin/searches.tpl', 33, false),array('modifier', 'escape', 'rtadmin/searches.tpl', 34, false),)), $this); ?>

<?php $this->assign('pageTitle', "rt.searches");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/editContext/<?php echo $this->_tpl_vars['version']->getVersionId(); ?>
/<?php echo $this->_tpl_vars['context']->getContextId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.contexts.metadata"), $this);?>
</a></li>
	<li class="current"><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/searches/<?php echo $this->_tpl_vars['version']->getVersionId(); ?>
/<?php echo $this->_tpl_vars['context']->getContextId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.searches"), $this);?>
</a></li>
</ul>

<br />

<table class="listing" width="100%">
	<tr><td class="headseparator" colspan="3">&nbsp;</td></tr>
	<tr valign="top">
		<td class="heading" width="50%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.search.title"), $this);?>
</td>
		<td class="heading" width="30%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.search.url"), $this);?>
</td>
		<td class="heading" width="20%" align="right">&nbsp;</td>
	</tr>
	<tr><td class="headseparator" colspan="3">&nbsp;</td></tr>
	<?php $this->_tag_stack[] = array('iterate', array('from' => 'searches','item' => 'search')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
		<tr valign="top">
			<td><?php echo $this->_tpl_vars['search']->getTitle(); ?>
</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['search']->getUrl())) ? $this->_run_mod_handler('truncate', true, $_tmp, 30) : smarty_modifier_truncate($_tmp, 30)); ?>
</td>
			<td align="right"><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/moveSearch/<?php echo $this->_tpl_vars['version']->getVersionId(); ?>
/<?php echo $this->_tpl_vars['context']->getContextId(); ?>
/<?php echo $this->_tpl_vars['search']->getSearchId(); ?>
?dir=u" class="action">&uarr;</a>&nbsp;<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/moveSearch/<?php echo $this->_tpl_vars['version']->getVersionId(); ?>
/<?php echo $this->_tpl_vars['context']->getContextId(); ?>
/<?php echo $this->_tpl_vars['search']->getSearchId(); ?>
?dir=d" class="action">&darr;</a>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/editSearch/<?php echo $this->_tpl_vars['version']->getVersionId(); ?>
/<?php echo $this->_tpl_vars['context']->getContextId(); ?>
/<?php echo $this->_tpl_vars['search']->getSearchId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/deleteSearch/<?php echo $this->_tpl_vars['version']->getVersionId(); ?>
/<?php echo $this->_tpl_vars['context']->getContextId(); ?>
/<?php echo $this->_tpl_vars['search']->getSearchId(); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.searches.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></td>
		</tr>
		<tr><td class="<?php if ($this->_tpl_vars['searches']->eof()): ?>end<?php endif; ?>separator" colspan="3"></td></tr>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack); ?>
	<?php if ($this->_tpl_vars['searches']->wasEmpty()): ?>
		<tr valign="top">
			<td class="nodata" colspan="3"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
		</tr>
		<tr><td class="endseparator" colspan="3"></td></tr>
	<?php else: ?>
		<tr>
			<td align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['searches']), $this);?>
</td>
			<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'searches','iterator' => $this->_tpl_vars['searches']), $this);?>
</td>
		</tr>
	<?php endif; ?>
	</table>
<br/>

<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/createSearch/<?php echo $this->_tpl_vars['version']->getVersionId(); ?>
/<?php echo $this->_tpl_vars['context']->getContextId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.searches.createSearch"), $this);?>
</a><br/>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>