<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:50
         compiled from manager/people/importUsers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/people/importUsers.tpl', 19, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.people.importUsers");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/importUsers/confirm" method="post" enctype="multipart/form-data">

<?php if ($this->_tpl_vars['error']): ?>
<p>
	<span class="formError"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ($this->_tpl_vars['error'])), $this);?>
</span>
</p>
<?php endif; ?>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.importUsers.importInstructions"), $this);?>
</p>

<table width="100%" class="data">
	<tr>
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.importUsers.dataFile"), $this);?>
</td>
		<td width="80%" class="value"><input type="file" name="userFile" id="userFile" class="uploadField" /></td>
	</tr>
	<tr>
		<td colspan="2" class="label"><input type="checkbox" name="sendNotify" id="sendNotify" value="1"<?php if ($this->_tpl_vars['sendNotify']): ?> checked="checked"<?php endif; ?> /> <label for="sendNotify"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.importUsers.sendNotify"), $this);?>
</label></td>
	</tr>
	<tr>
		<td colspan="2" class="label"><input type="checkbox" name="continueOnError" id="continueOnError" value="1"<?php if ($this->_tpl_vars['continueOnError']): ?> checked="checked"<?php endif; ?> /> <label for="continueOnError"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.importUsers.continueOnError"), $this);?>
</label></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td class="formField">&nbsp;</td>
	</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager'" /></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>