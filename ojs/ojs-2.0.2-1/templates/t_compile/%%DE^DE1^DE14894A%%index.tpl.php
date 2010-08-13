<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:13
         compiled from editor/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'editor/index.tpl', 16, false),)), $this); ?>

<?php $this->assign('pageTitle', "editor.home");  $this->assign('pageCrumbTitle', "user.role.editor");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.submissions"), $this);?>
</h3>

<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/submissions/submissionsUnassigned"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsUnassigned"), $this);?>
</a>&nbsp;(<?php if ($this->_tpl_vars['submissionsCount'][0]): ?><strong><?php echo $this->_tpl_vars['submissionsCount'][0]; ?>
</strong><?php else: ?>0<?php endif; ?>)</li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/submissions/submissionsInReview"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInReview"), $this);?>
</a>&nbsp;(<?php if ($this->_tpl_vars['submissionsCount'][1]): ?><strong><?php echo $this->_tpl_vars['submissionsCount'][1]; ?>
</strong><?php else: ?>0<?php endif; ?>)</li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/submissions/submissionsInEditing"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInEditing"), $this);?>
</a>&nbsp;(<?php if ($this->_tpl_vars['submissionsCount'][2]): ?><strong><?php echo $this->_tpl_vars['submissionsCount'][2]; ?>
</strong><?php else: ?>0<?php endif; ?>)</li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/submissions/submissionsArchives"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsArchives"), $this);?>
</a></li>
</ul>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.issues"), $this);?>
</h3>

<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/createIssue"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.createIssue"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/schedulingQueue"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.long.submissionsInScheduling"), $this);?>
</a>&nbsp;(<?php if ($this->_tpl_vars['submissionsCount'][3]): ?><strong><?php echo $this->_tpl_vars['submissionsCount'][3]; ?>
</strong><?php else: ?>0<?php endif; ?>)</li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/notifyUsers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.notifyUsers"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/futureIssues"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.futureIssues"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/backIssues"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.issueArchive"), $this);?>
</a></li>
</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>