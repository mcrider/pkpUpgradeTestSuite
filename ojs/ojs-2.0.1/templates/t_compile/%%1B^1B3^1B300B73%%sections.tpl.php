<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:00
         compiled from manager/sections/sections.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/sections/sections.tpl', 20, false),array('function', 'page_info', 'manager/sections/sections.tpl', 52, false),array('function', 'page_links', 'manager/sections/sections.tpl', 53, false),array('block', 'iterate', 'manager/sections/sections.tpl', 27, false),array('modifier', 'escape', 'manager/sections/sections.tpl', 34, false),)), $this); ?>

<?php $this->assign('pageTitle', "section.sections");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<br/>
<table width="100%" class="listing">
	<tr>
		<td class="headseparator" colspan="3">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="60%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "section.title"), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "section.abbreviation"), $this);?>
</td>
		<td width="15%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr>
		<td class="headseparator" colspan="3">&nbsp;</td>
	</tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'sections','item' => 'section','name' => 'sections')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top">
		<td><?php echo $this->_tpl_vars['section']->getTitle(); ?>
</td>
		<td><?php echo $this->_tpl_vars['section']->getAbbrev(); ?>
</td>
		<td align="right">
			<nobr>
			<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/editSection/<?php echo $this->_tpl_vars['section']->getSectionId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>
			<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/deleteSection/<?php echo $this->_tpl_vars['section']->getSectionId(); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a>
			<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/moveSection?d=u&amp;sectionId=<?php echo $this->_tpl_vars['section']->getSectionId(); ?>
">&uarr;</a> <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/moveSection?d=d&amp;sectionId=<?php echo $this->_tpl_vars['section']->getSectionId(); ?>
">&darr;</a>
			</nobr>
		</td>
	</tr>
	<tr>
		<td colspan="3" class="<?php if ($this->_tpl_vars['sections']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['sections']->wasEmpty()): ?>
	<tr>
		<td colspan="3" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.noneCreated"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="3" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['sections']), $this);?>
</td>
		<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'sections','iterator' => $this->_tpl_vars['sections']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<a class="action" href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/createSection"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.create"), $this);?>
</a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>