<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:38
         compiled from manager/setup/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/setup/index.tpl', 15, false),array('function', 'url', 'manager/setup/index.tpl', 19, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.setup.journalSetup");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.stepsToJournalSite"), $this);?>
</h3>

<ol>
	<li>
		<h4><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setup','path' => '1'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.details"), $this);?>
</a></h4>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.details.description"), $this);?>
<br/>
		&nbsp;
	</li>
	<li>
		<h4><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setup','path' => '2'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.policies"), $this);?>
</a></h4>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.policies.description"), $this);?>
<br/>
		&nbsp;
	</li>
	<li>
		<h4><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setup','path' => '3'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.submissions"), $this);?>
</a></h4>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.submissions.description"), $this);?>
<br/>
		&nbsp;
	</li>
	<li>
		<h4><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setup','path' => '4'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.management"), $this);?>
</a></h4>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.management.description"), $this);?>
<br/>
		&nbsp;
	</li>
	<li>
		<h4><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setup','path' => '5'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.look"), $this);?>
</a></h4>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.look.description"), $this);?>
<br/>
		&nbsp;
	</li>
</ol>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>