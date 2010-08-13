<?php /* Smarty version 2.6.9, created on 2005-07-08 06:01:59
         compiled from manager/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/index.tpl', 15, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.journalManagement");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.managementPages"), $this);?>
</h3>

<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/setup"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/sections"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "section.sections"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/emails"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/languages"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.languages"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/rtadmin"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.readingTools"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/importexport"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.importExport"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/files"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.filesBrowser"), $this);?>
</a></li>
	<?php if ($this->_tpl_vars['subscriptionsEnabled']): ?>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/subscriptions"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptions"), $this);?>
</a></li>
	<?php endif; ?>
</ul>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.users"), $this);?>
</h3>

<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/all"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.allUsers"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/createUser"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.createUser"), $this);?>
</a></li>
</ul>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.roles"), $this);?>
</h3>

<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/managers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.managers"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/editors"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editors"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/sectionEditors"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditors"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/layoutEditors"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditors"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/reviewers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reviewers"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/copyeditors"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.copyeditors"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/proofreaders"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreaders"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/authors"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.authors"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/readers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.readers"), $this);?>
</a></li>
</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>