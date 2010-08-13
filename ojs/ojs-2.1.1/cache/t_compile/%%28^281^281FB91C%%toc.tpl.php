<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:29
         compiled from help/toc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'help/toc.tpl', 13, false),array('function', 'translate', 'help/toc.tpl', 14, false),array('modifier', 'explode', 'help/toc.tpl', 25, false),)), $this); ?>

<div style="padding-top: 0.5em;">
	<form action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'search'), $this);?>
" method="post" style="display: inline">
	<input type="text" name="keyword" size="16" maxlength="60" value="<?php echo $this->_tpl_vars['helpSearchKeyword']; ?>
" class="textField" />&nbsp;<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
" class="button" />
	</form>
</div>

<br />

<div><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'toc'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.toc"), $this);?>
</a></div>

<br />

<?php if ($this->_tpl_vars['toc']->getParentTopicId() && $this->_tpl_vars['toc']->getParentTopicId() != $this->_tpl_vars['topic']->getId()):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.contents"), $this);?>
&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['toc']->getParentTopicId())) ? $this->_run_mod_handler('explode', true, $_tmp, "/") : $this->_plugins['modifier']['explode'][0][0]->smartyExplode($_tmp, "/"))), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.upALevel"), $this);?>
</a>
<br />
<?php endif; ?>

<div class="block">
	<span class="blockTitle"><?php echo $this->_tpl_vars['toc']->getTitle(); ?>
</span>
	<ul>
		<?php $_from = $this->_tpl_vars['toc']->getTopics(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['currTopic']):
?>
			<?php if ($this->_tpl_vars['currTopic']->getId() == $this->_tpl_vars['topic']->getId()): ?>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['currTopic']->getId())) ? $this->_run_mod_handler('explode', true, $_tmp, "/") : $this->_plugins['modifier']['explode'][0][0]->smartyExplode($_tmp, "/"))), $this);?>
" class="current"><?php echo $this->_tpl_vars['currTopic']->getTitle(); ?>
</a>
			<?php if ($this->_tpl_vars['subToc']): ?>
			<ul>
			<?php $_from = $this->_tpl_vars['subToc']->getTopics(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['currSubTopic']):
?>
				<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['currSubTopic']->getId())) ? $this->_run_mod_handler('explode', true, $_tmp, "/") : $this->_plugins['modifier']['explode'][0][0]->smartyExplode($_tmp, "/"))), $this);?>
"><?php echo $this->_tpl_vars['currSubTopic']->getTitle(); ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
			<?php endif; ?>
			</li>
			<?php else: ?>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['currTopic']->getId())) ? $this->_run_mod_handler('explode', true, $_tmp, "/") : $this->_plugins['modifier']['explode'][0][0]->smartyExplode($_tmp, "/"))), $this);?>
"><?php echo $this->_tpl_vars['currTopic']->getTitle(); ?>
</a></li>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>
