<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:35
         compiled from rtadmin/search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'rtadmin/search.tpl', 15, false),array('function', 'translate', 'rtadmin/search.tpl', 18, false),array('modifier', 'to_array', 'rtadmin/search.tpl', 15, false),array('modifier', 'escape', 'rtadmin/search.tpl', 19, false),)), $this); ?>

<?php $this->assign('pageTitle', "rt.admin.searches.edit.editSearch");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form action="<?php if ($this->_tpl_vars['searchId']):  echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveSearch','path' => ((is_array($_tmp=$this->_tpl_vars['versionId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['contextId'], $this->_tpl_vars['searchId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['contextId'], $this->_tpl_vars['searchId']))), $this); else:  echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createSearch','path' => ((is_array($_tmp=$this->_tpl_vars['versionId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['contextId'], 'save') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['contextId'], 'save'))), $this); endif; ?>" method="post">
<table class="data" width="100%">
	<tr valign="top">
		<td class="label" width="20%"><label for="title"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.search.title"), $this);?>
</label></td>
		<td class="value" width="80%"><input type="text" class="textField" name="title" id="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="url"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.search.url"), $this);?>
</label></td>
		<td class="value"><input type="text" class="textField" name="url" id="url" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="searchUrl"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.search.searchUrl"), $this);?>
</label></td>
		<td class="value"><input type="text" class="textField" name="searchUrl" id="searchUrl" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['searchUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="searchPost"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.search.searchPost"), $this);?>
</label></td>
		<td class="value"><input type="text" class="textField" name="searchPost" id="searchPost" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['searchPost'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="description"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.context.description"), $this);?>
</label></td>
		<td class="value">
			<textarea class="textArea" name="description" id="description" rows="5" cols="60"><?php echo ((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
		</td>
	</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'searches','path' => ((is_array($_tmp=$this->_tpl_vars['versionId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['contextId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['contextId'])),'escape' => false), $this);?>
'" /></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>