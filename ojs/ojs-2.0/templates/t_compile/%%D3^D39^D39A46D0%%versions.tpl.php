<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:53
         compiled from rtadmin/versions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'rtadmin/versions.tpl', 20, false),array('function', 'page_info', 'rtadmin/versions.tpl', 40, false),array('function', 'page_links', 'rtadmin/versions.tpl', 41, false),array('block', 'iterate', 'rtadmin/versions.tpl', 25, false),array('modifier', 'escape', 'rtadmin/versions.tpl', 29, false),)), $this); ?>

<?php $this->assign('pageTitle', "rt.versions");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<br/>

<table class="listing" width="100%">
	<tr><td class="headseparator" colspan="3">&nbsp;</td></tr>
	<tr valign="top">
		<td class="heading" width="40%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.version.title"), $this);?>
</td>
		<td class="heading" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.version.locale"), $this);?>
</td>
		<td class="heading" width="40%" align="right">&nbsp;</td>
	</tr>
	<tr><td class="headseparator" colspan="3">&nbsp;</td></tr>
	<?php $this->_tag_stack[] = array('iterate', array('from' => 'versions','item' => 'version')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
		<tr valign="top">
			<td><?php echo $this->_tpl_vars['version']->getTitle(); ?>
</td>
			<td><?php echo $this->_tpl_vars['version']->getLocale(); ?>
</td>
			<td align="right"><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/validateUrls/<?php echo $this->_tpl_vars['version']->getVersionId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.validateUrls.validate"), $this);?>
</a>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/editVersion/<?php echo $this->_tpl_vars['version']->getVersionId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.versions.metadata"), $this);?>
</a>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/contexts/<?php echo $this->_tpl_vars['version']->getVersionId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.contexts"), $this);?>
</a>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/exportVersion/<?php echo $this->_tpl_vars['version']->getVersionId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.versions.export"), $this);?>
</a>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/deleteVersion/<?php echo $this->_tpl_vars['version']->getVersionId(); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.versions.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></td>
		</tr>
		<tr><td class="<?php if ($this->_tpl_vars['versions']->eof()): ?>end<?php endif; ?>separator" colspan="3"></td></tr>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack); ?>
	<?php if ($this->_tpl_vars['versions']->wasEmpty()): ?>
		<tr valign="top">
			<td class="nodata" colspan="3"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
		</tr>
		<tr><td class="endseparator" colspan="3"></td></tr>
	<?php else: ?>
		<tr>
			<td align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['versions']), $this);?>
</td>
			<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'versions','iterator' => $this->_tpl_vars['versions']), $this);?>
</td>
		</tr>
	<?php endif; ?>
	</table>
<br/>

<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/createVersion" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.versions.createVersion"), $this);?>
</a><br/>

<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/restoreVersions" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.versions.confirmRestore"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.versions.restoreVersions"), $this);?>
</a>

<br/>
<br/>

<form method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/importVersion" enctype="multipart/form-data">
	<input type="file" class="uploadField" name="versionFile" />
	<input type="submit" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.versions.importVersion"), $this);?>
" />
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>