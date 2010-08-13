<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:22
         compiled from file:/home/asmecher/cvs/ojs2/update/ojs2/ojs.Ougx7b/ojs-2.0.2-1/plugins/importexport/native/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/asmecher/cvs/ojs2/update/ojs2/ojs.Ougx7b/ojs-2.0.2-1/plugins/importexport/native/index.tpl', 17, false),)), $this); ?>

<?php $this->assign('pageTitle', "plugins.importexport.native.displayName");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<br/>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.native.export"), $this);?>
</h3>
<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pluginUrl']; ?>
/issues"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.native.export.issues"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pluginUrl']; ?>
/articles"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.native.export.articles"), $this);?>
</a></li>
</ul>

<br />

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.native.import"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.native.import.description"), $this);?>
</p>
<form action="<?php echo $this->_tpl_vars['pluginUrl']; ?>
/import" method="post" enctype="multipart/form-data">
<input type="file" class="uploadField" name="importFile" id="import" /> <input name="import" type="submit" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.import"), $this);?>
" />
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>