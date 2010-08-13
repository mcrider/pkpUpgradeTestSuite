<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:37
         compiled from sectionEditor/navsidebar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/navsidebar.tpl', 13, false),array('function', 'url', 'sectionEditor/navsidebar.tpl', 16, false),)), $this); ?>

<div class="block">
	<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditor"), $this);?>
</span>
	<span class="blockSubtitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.submissions"), $this);?>
</span>
	<ul>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'index','path' => 'submissionsInReview'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInReview"), $this);?>
</a>&nbsp;(<?php if ($this->_tpl_vars['submissionsCount'][0]):  echo $this->_tpl_vars['submissionsCount'][0];  else: ?>0<?php endif; ?>)</li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'index','path' => 'submissionsInEditing'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInEditing"), $this);?>
</a>&nbsp;(<?php if ($this->_tpl_vars['submissionsCount'][1]):  echo $this->_tpl_vars['submissionsCount'][1];  else: ?>0<?php endif; ?>)</li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'index','path' => 'submissionsArchives'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsArchives"), $this);?>
</a></li>
	</ul>
</div>