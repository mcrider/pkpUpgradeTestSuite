<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:50
         compiled from manager/files/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/files/index.tpl', 15, false),array('function', 'icon', 'manager/files/index.tpl', 43, false),array('modifier', 'default', 'manager/files/index.tpl', 45, false),array('modifier', 'date_format', 'manager/files/index.tpl', 46, false),array('modifier', 'escape', 'manager/files/index.tpl', 53, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.filesBrowser");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.files.indexOfDir",'dir' => "/".($this->_tpl_vars['currentDir'])), $this);?>
</h3>

<?php if ($this->_tpl_vars['currentDir']): ?>
<p><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/files/<?php echo $this->_tpl_vars['parentDir']; ?>
" class="action">&lt; <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.files.parentDir"), $this);?>
</a></p>
<?php endif; ?>

<table width="100%" class="listing">
	<tr>
		<td class="headseparator" colspan="6">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td></td>
		<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.type"), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateModified"), $this);?>
</td>
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.size"), $this);?>
</td>
		<td width="20%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr>
		<td class="headseparator" colspan="6">&nbsp;</td>
	</tr>
	<?php $_from = $this->_tpl_vars['files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['files'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['files']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['file']):
        $this->_foreach['files']['iteration']++;
?>
	<?php if ($this->_tpl_vars['currentDir']): ?>
		<?php $this->assign('filePath', ($this->_tpl_vars['currentDir'])."/".($this->_tpl_vars['file']['name'])); ?>
	<?php else: ?>
		<?php $this->assign('filePath', $this->_tpl_vars['file']['name']); ?>
	<?php endif; ?>
	<tr valign="top">
		<td><?php if ($this->_tpl_vars['file']['isDir']):  echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'folder'), $this); else:  echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'letter'), $this); endif; ?></td>
		<td><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/files/<?php echo $this->_tpl_vars['filePath']; ?>
"><?php echo $this->_tpl_vars['file']['name']; ?>
</a></td>
		<td><?php echo ((is_array($_tmp=@$this->_tpl_vars['file']['mimetype'])) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['file']['mtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
</td>
		<td><?php echo ((is_array($_tmp=@$this->_tpl_vars['file']['size'])) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td align="right">
			<nobr>
			<?php if (! $this->_tpl_vars['file']['isDir']): ?>
			<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/files/<?php echo $this->_tpl_vars['filePath']; ?>
?download=1" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.download"), $this);?>
</a>
			<?php endif; ?>
			<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/fileDelete/<?php echo $this->_tpl_vars['filePath']; ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.files.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a>
			</nobr>
		</td>
	</tr>
	<tr>
		<td colspan="6" class="<?php if (($this->_foreach['files']['iteration'] == $this->_foreach['files']['total'])): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php endforeach; else: ?>
	<tr>
		<td colspan="6" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.files.emptyDir"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="6" class="endseparator">&nbsp;</td>
	</tr>
<?php endif; unset($_from); ?>
</table>

<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/fileUpload/<?php echo $this->_tpl_vars['currentDir']; ?>
" enctype="multipart/form-data">
	<input type="file" size="20" name="file" class="uploadField" />
	<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.files.uploadFile"), $this);?>
" class="button" />
</form>

<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/fileMakeDir/<?php echo $this->_tpl_vars['currentDir']; ?>
" enctype="multipart/form-data">
	<input type="text" size="20" maxlength="255" name="dirName" class="textField" />
	<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.files.createDir"), $this);?>
" class="button" />
</form>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.files.note"), $this);?>
</p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>