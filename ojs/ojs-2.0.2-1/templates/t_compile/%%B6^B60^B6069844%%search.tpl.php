<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:18
         compiled from rtadmin/search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'rtadmin/search.tpl', 18, false),array('modifier', 'escape', 'rtadmin/search.tpl', 19, false),)), $this); ?>

<?php $this->assign('pageTitle', "rt.admin.searches.edit.editSearch");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/<?php if ($this->_tpl_vars['searchId']): ?>saveSearch/<?php echo $this->_tpl_vars['versionId']; ?>
/<?php echo $this->_tpl_vars['contextId']; ?>
/<?php echo $this->_tpl_vars['searchId'];  else: ?>createSearch/<?php echo $this->_tpl_vars['versionId']; ?>
/<?php echo $this->_tpl_vars['contextId']; ?>
/save<?php endif; ?>" method="post">
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
" class="button" onclick="document.location.href='<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/searches/<?php echo $this->_tpl_vars['versionId']; ?>
/<?php echo $this->_tpl_vars['contextId']; ?>
'" /></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>