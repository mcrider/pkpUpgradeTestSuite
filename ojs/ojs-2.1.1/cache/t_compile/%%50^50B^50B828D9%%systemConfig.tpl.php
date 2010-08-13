<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:26
         compiled from admin/systemConfig.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'admin/systemConfig.tpl', 15, false),array('function', 'translate', 'admin/systemConfig.tpl', 16, false),array('modifier', 'escape', 'admin/systemConfig.tpl', 23, false),)), $this); ?>

<?php $this->assign('pageTitle', "admin.systemConfiguration");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveSystemConfig'), $this);?>
">
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.editSystemConfigInstructions"), $this);?>
</p>

<?php $_from = $this->_tpl_vars['configData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sectionName'] => $this->_tpl_vars['sectionData']):
?>
<h3><?php echo $this->_tpl_vars['sectionName']; ?>
</h3>
<table class="data" width="100%">
<?php $_from = $this->_tpl_vars['sectionData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['settingName'] => $this->_tpl_vars['settingValue']):
?>
<tr valign="top">	
	<td width="20%" class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['settingName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	<td width="80%" class="value"><input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['sectionName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
[<?php echo ((is_array($_tmp=$this->_tpl_vars['settingName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]" value="<?php if ($this->_tpl_vars['settingValue'] === true): ?>On<?php elseif ($this->_tpl_vars['settingValue'] === false): ?>Off<?php else:  echo ((is_array($_tmp=$this->_tpl_vars['settingValue'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif; ?>" size="40" class="textField" /></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>

<br />
<?php endforeach; endif; unset($_from); ?>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.saveSystemConfig"), $this);?>
" class="button defaultButton" /> <input name="display" type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.displayNewSystemConfig"), $this);?>
" class="button" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'systemInfo','escape' => false), $this);?>
'" /></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>