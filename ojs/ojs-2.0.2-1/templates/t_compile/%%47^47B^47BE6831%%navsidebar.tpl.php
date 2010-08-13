<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:19
         compiled from sectionEditor/navsidebar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/navsidebar.tpl', 13, false),)), $this); ?>

<div class="block">
	<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditor"), $this);?>
</span>
	<span class="blockSubtitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.submissions"), $this);?>
</span>
	<ul>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/sectionEditor/index/submissionsInReview"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInReview"), $this);?>
</a>&nbsp;(<?php if ($this->_tpl_vars['submissionsCount'][0]): ?><strong><?php echo $this->_tpl_vars['submissionsCount'][0]; ?>
</strong><?php else: ?>0<?php endif; ?>)</li>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/sectionEditor/index/submissionsInEditing"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInEditing"), $this);?>
</a>&nbsp;(<?php if ($this->_tpl_vars['submissionsCount'][1]): ?><strong><?php echo $this->_tpl_vars['submissionsCount'][1]; ?>
</strong><?php else: ?>0<?php endif; ?>)</li>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/sectionEditor/index/submissionsArchives"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsArchives"), $this);?>
</a></li>
	</ul>
</div>