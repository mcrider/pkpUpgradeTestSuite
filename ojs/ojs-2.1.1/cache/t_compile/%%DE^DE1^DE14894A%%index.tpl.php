<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:29
         compiled from editor/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'editor/index.tpl', 16, false),array('function', 'url', 'editor/index.tpl', 19, false),array('function', 'call_hook', 'editor/index.tpl', 23, false),)), $this); ?>

<?php $this->assign('pageTitle', "editor.home");  $this->assign('pageCrumbTitle', "user.role.editor");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.submissions"), $this);?>
</h3>

<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissions','path' => 'submissionsUnassigned'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsUnassigned"), $this);?>
</a>&nbsp;(<?php if ($this->_tpl_vars['submissionsCount'][0]):  echo $this->_tpl_vars['submissionsCount'][0];  else: ?>0<?php endif; ?>)</li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissions','path' => 'submissionsInReview'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInReview"), $this);?>
</a>&nbsp;(<?php if ($this->_tpl_vars['submissionsCount'][1]):  echo $this->_tpl_vars['submissionsCount'][1];  else: ?>0<?php endif; ?>)</li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissions','path' => 'submissionsInEditing'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInEditing"), $this);?>
</a>&nbsp;(<?php if ($this->_tpl_vars['submissionsCount'][2]):  echo $this->_tpl_vars['submissionsCount'][2];  else: ?>0<?php endif; ?>)</li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissions','path' => 'submissionsArchives'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsArchives"), $this);?>
</a></li>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Editor::Index::Submissions"), $this);?>

</ul>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.issues"), $this);?>
</h3>

<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createIssue'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.createIssue"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'notifyUsers'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.notifyUsers"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'futureIssues'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.futureIssues"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'backIssues'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.issueArchive"), $this);?>
</a></li>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Editor::Index::Issues"), $this);?>

</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>