<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:13
         compiled from copyeditor/navsidebar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'copyeditor/navsidebar.tpl', 13, false),)), $this); ?>

<div class="block">
	<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.copyeditor"), $this);?>
</span>
	<span class="blockSubtitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.submissions"), $this);?>
</span>
	<ul>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/copyeditor/index/active"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.active"), $this);?>
</a>&nbsp;(<?php if ($this->_tpl_vars['submissionsCount'][0]): ?><strong><?php echo $this->_tpl_vars['submissionsCount'][0]; ?>
</strong><?php else: ?>0<?php endif; ?>)</li>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/copyeditor/index/completed"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.completed"), $this);?>
</a>&nbsp;(<?php if ($this->_tpl_vars['submissionsCount'][1]): ?><strong><?php echo $this->_tpl_vars['submissionsCount'][1]; ?>
</strong><?php else: ?>0<?php endif; ?>)</li>
	</ul>
</div>