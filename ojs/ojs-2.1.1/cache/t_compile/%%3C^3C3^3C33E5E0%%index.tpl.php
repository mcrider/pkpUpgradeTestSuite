<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:41
         compiled from file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/importexport/users/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/importexport/users/index.tpl', 17, false),array('function', 'plugin_url', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/importexport/users/index.tpl', 21, false),array('function', 'url', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/importexport/users/index.tpl', 59, false),)), $this); ?>

<?php $this->assign('pageTitle', "plugins.importexport.users.displayName");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<br/>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.users.export.exportUsers"), $this);?>
</h3>

<ul class="plain">
	<li>
		<form action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'exportByRole'), $this);?>
" method="post">
			&#187; <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.users.export.exportByRole"), $this);?>
<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;<select name="roles[]" size="5" multiple="multiple" class="selectMenu">
				<?php $_from = $this->_tpl_vars['roleOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roleKey'] => $this->_tpl_vars['roleOption']):
?>
					<?php if ($this->_tpl_vars['roleKey'] != ''): ?><option value="<?php echo $this->_tpl_vars['roleKey']; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['roleOption']), $this);?>
</option><?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			</select><br/>
			&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.users.export.exportUsers"), $this);?>
"/>

		</form>
		&nbsp;
	</li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'exportAll'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.users.export.exportAllUsers"), $this);?>
</a></li>
</ul>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.users.import.importUsers"), $this);?>
</h3>

<form action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'confirm'), $this);?>
" method="post" enctype="multipart/form-data">

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.users.import.instructions"), $this);?>
</p>

<table width="100%" class="data">
	<tr>
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.users.import.dataFile"), $this);?>
</td>
		<td width="80%" class="value"><input type="file" name="userFile" id="userFile" class="uploadField" /></td>
	</tr>
	<tr>
		<td colspan="2" class="label"><input type="checkbox" name="sendNotify" id="sendNotify" value="1"<?php if ($this->_tpl_vars['sendNotify']): ?> checked="checked"<?php endif; ?> /> <label for="sendNotify"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.users.import.sendNotify"), $this);?>
</label></td>
	</tr>
	<tr>
		<td colspan="2" class="label"><input type="checkbox" name="continueOnError" id="continueOnError" value="1"<?php if ($this->_tpl_vars['continueOnError']): ?> checked="checked"<?php endif; ?> /> <label for="continueOnError"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.users.import.continueOnError"), $this);?>
</label></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td class="formField">&nbsp;</td>
	</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'manager','path' => 'importexport','escape' => false), $this);?>
'" /></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>