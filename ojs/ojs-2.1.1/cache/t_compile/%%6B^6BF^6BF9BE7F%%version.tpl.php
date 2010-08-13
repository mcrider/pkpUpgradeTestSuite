<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:35
         compiled from rtadmin/version.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'rtadmin/version.tpl', 17, false),array('function', 'translate', 'rtadmin/version.tpl', 17, false),array('modifier', 'escape', 'rtadmin/version.tpl', 28, false),)), $this); ?>

<?php $this->assign('pageTitle', "rt.admin.versions.edit.editVersion");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['versionId']): ?>
	<ul class="menu">
		<li class="current"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editVersion','path' => $this->_tpl_vars['versionId']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.versions.metadata"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'contexts','path' => $this->_tpl_vars['versionId']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.contexts"), $this);?>
</a></li>
	</ul>
<?php endif; ?>

<br />

<form action="<?php if ($this->_tpl_vars['versionId']):  echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveVersion','path' => $this->_tpl_vars['versionId']), $this); else:  echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createVersion','path' => 'save'), $this); endif; ?>" method="post">
<table class="data" width="100%">
	<tr valign="top">
		<td class="label" width="20%"><label for="title"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.version.title"), $this);?>
</label></td>
		<td class="value" width="80%"><input type="text" class="textField" name="title" id="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="key"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.version.key"), $this);?>
</label></td>
		<td class="value"><input type="text" class="textField" name="key" id="key" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="locale"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.version.locale"), $this);?>
</label></td>
		<td class="value"><input type="text" class="textField" name="locale" id="locale" maxlength="5" size="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['locale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="description"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.version.description"), $this);?>
</label></td>
		<td class="value">
			<textarea class="textArea" name="description" id="description" rows="5" cols="60"><?php echo ((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
		</td>
	</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'versions','escape' => false), $this);?>
'" /></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>