<?php /* Smarty version 2.6.9, created on 2005-07-08 06:01:56
         compiled from admin/importOJS1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'admin/importOJS1.tpl', 22, false),array('function', 'fieldLabel', 'admin/importOJS1.tpl', 33, false),array('modifier', 'escape', 'admin/importOJS1.tpl', 24, false),)), $this); ?>

<?php $this->assign('pageTitle', "admin.journals.importOJS1");  $this->assign('helpTopicId', "site.siteManagement");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/admin/doImportOJS1">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['importError']): ?>
<p>
	<span class="formError"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.journals.importErrors"), $this);?>
:</span>
	<ul class="formErrorList">
		<li><?php echo ((is_array($_tmp=$this->_tpl_vars['importError'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</li>
	</ul>
</p>
<?php endif; ?>

<p><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.journals.importOJS1Instructions"), $this);?>
</span></p>

<table class="data" width="100%">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'title','key' => "journal.path",'required' => 'true'), $this);?>
</td>
		<td width="80%" class="value">
			<input type="text" id="journalPath" name="journalPath" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['journalPath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="16" maxlength="32" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.journal.pathImportInstructions"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'title','key' => "admin.journal.importPath",'required' => 'true'), $this);?>
</td>
		<td class="value">
			<input type="text" id="importPath" name="importPath" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['importPath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.journal.importPathInstructions"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.options"), $this);?>
</td>
		<td class="value">
			<input type="checkbox" name="options[]" id="options[importSubscriptions]" value="importSubscriptions"<?php if ($this->_tpl_vars['options'] && in_array ( 'importSubscriptions' , $this->_tpl_vars['options'] )): ?> checked="checked"<?php endif; ?> /> <label for="options[importSubscriptions]"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.journals.importSubscriptions"), $this);?>
</label>
		</td>
	</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.import"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_tpl_vars['pageUrl']; ?>
/admin/journals'" /></p>

</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>