<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:40
         compiled from file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/counter/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/counter/index.tpl', 15, false),array('function', 'url', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/counter/index.tpl', 18, false),array('function', 'call_hook', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/counter/index.tpl', 21, false),array('modifier', 'escape', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/counter/index.tpl', 19, false),)), $this); ?>

<?php $this->assign('pageTitle', "plugins.generic.counter");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.counter.description"), $this);?>
</p>

<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'browseLog'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.counter.browseLog"), $this);?>
</a></li>
	<li>&#187; <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.counter.1a.title"), $this); $_from = $this->_tpl_vars['years']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['year']):
?>&nbsp;&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'report','year' => $this->_tpl_vars['year']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['year'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><?php endforeach; endif; unset($_from); ?></li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'clearLog'), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.counter.confirmClear"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.counter.clearLog"), $this);?>
</a></li>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Template::Plugin::Generic::Counter::Index"), $this);?>

</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>