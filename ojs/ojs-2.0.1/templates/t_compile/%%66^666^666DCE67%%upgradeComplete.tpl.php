<?php /* Smarty version 2.6.9, created on 2005-07-08 06:01:59
         compiled from install/upgradeComplete.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'install/upgradeComplete.tpl', 16, false),array('modifier', 'escape', 'install/upgradeComplete.tpl', 31, false),)), $this); ?>

<?php $this->assign('pageTitle', "installer.ojsUpgrade");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.upgradeComplete",'version' => $this->_tpl_vars['newVersion']->getVersionString()), $this);?>


<?php if (! empty ( $this->_tpl_vars['notes'] )): ?>
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.releaseNotes"), $this);?>
</h4>
<?php $_from = $this->_tpl_vars['notes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['note']):
?>
<p><pre style="font-size: 125%"><?php echo $this->_tpl_vars['note']; ?>
</pre></p>
<?php endforeach; endif; unset($_from);  endif; ?>

<?php if ($this->_tpl_vars['writeConfigFailed']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.overwriteConfigFileInstructions"), $this);?>


<form>
<p>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.contentsOfConfigFile"), $this);?>
:<br />
<textarea name="config" cols="80" rows="20" class="textArea" style="font-family: Courier,'Courier New',fixed-width"><?php echo ((is_array($_tmp=$this->_tpl_vars['configFileContents'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
</p>
</form>
<?php endif; ?>

<?php if ($this->_tpl_vars['manualInstall']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.manualSQLInstructions"), $this);?>


<form>
<p>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.installerSQLStatements"), $this);?>
:<br />
<textarea name="sql" cols="80" rows="20" class="textArea" style="font-family: Courier,'Courier New',fixed-width"><?php $_from = $this->_tpl_vars['installSql']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sqlStmt']):
 echo ((is_array($_tmp=$this->_tpl_vars['sqlStmt'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
;


<?php endforeach; endif; unset($_from); ?></textarea>
</p>
</form>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>