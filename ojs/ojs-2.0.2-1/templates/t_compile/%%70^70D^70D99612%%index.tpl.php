<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:16
         compiled from manager/setup/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/setup/index.tpl', 15, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.setup.journalSetup");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.stepsToJournalSite"), $this);?>
</h3>

<ol>
	<li>
		<h4><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/setup/1"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.details"), $this);?>
</a></h4>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.details.description"), $this);?>
<br/>
		&nbsp;
	</li>
	<li>
		<h4><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/setup/2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.policies"), $this);?>
</a></h4>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.policies.description"), $this);?>
<br/>
		&nbsp;
	</li>
	<li>
		<h4><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/setup/3"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.submissions"), $this);?>
</a></h4>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.submissions.description"), $this);?>
<br/>
		&nbsp;
	</li>
	<li>
		<h4><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/setup/4"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.management"), $this);?>
</a></h4>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.management.description"), $this);?>
<br/>
		&nbsp;
	</li>
	<li>
		<h4><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/setup/5"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.look"), $this);?>
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