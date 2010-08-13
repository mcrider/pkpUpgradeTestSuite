<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:13
         compiled from editor/navsidebar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'editor/navsidebar.tpl', 14, false),)), $this); ?>

<div class="block">
	<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editor"), $this);?>
</span>
	
	<span class="blockSubtitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.submissions"), $this);?>
</span>
	<ul>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/submissions/submissionsUnassigned"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsUnassigned"), $this);?>
</a>&nbsp;(<?php if ($this->_tpl_vars['submissionsCount'][0]): ?><strong><?php echo $this->_tpl_vars['submissionsCount'][0]; ?>
</strong><?php else: ?>0<?php endif; ?>)</li>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/submissions/submissionsInReview"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInReview"), $this);?>
</a>&nbsp;(<?php if ($this->_tpl_vars['submissionsCount'][1]): ?><strong><?php echo $this->_tpl_vars['submissionsCount'][1]; ?>
</strong><?php else: ?>0<?php endif; ?>)</li>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/submissions/submissionsInEditing"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInEditing"), $this);?>
</a>&nbsp;(<?php if ($this->_tpl_vars['submissionsCount'][2]): ?><strong><?php echo $this->_tpl_vars['submissionsCount'][2]; ?>
</strong><?php else: ?>0<?php endif; ?>)</li>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/submissions/submissionsArchives"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsArchives"), $this);?>
</a></li>
	</ul>
	
	<span class="blockSubtitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.issues"), $this);?>
</span>
	<ul>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/createIssue"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.createIssue"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/schedulingQueue"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInScheduling"), $this);?>
</a>&nbsp;(<?php if ($this->_tpl_vars['submissionsCount'][3]): ?><strong><?php echo $this->_tpl_vars['submissionsCount'][3]; ?>
</strong><?php else: ?>0<?php endif; ?>)</li>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/notifyUsers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.notifyUsers"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/futureIssues"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.futureIssues"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/backIssues"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.issueArchive"), $this);?>
</a></li>
	</ul>
</div>