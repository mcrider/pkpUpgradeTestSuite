<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:49
         compiled from help/topic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'help/topic.tpl', 13, false),array('function', 'eval', 'help/topic.tpl', 15, false),array('function', 'translate', 'help/topic.tpl', 17, false),)), $this); ?>

<?php $_from = $this->_tpl_vars['topic']->getSections(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sections'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sections']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['section']):
        $this->_foreach['sections']['iteration']++;
?>
	<a name="section<?php echo smarty_function_math(array('equation' => "counter - 1",'counter' => $this->_foreach['sections']['iteration']), $this);?>
"></a>
	<?php if ($this->_tpl_vars['section']->getTitle()): ?><h4><?php echo $this->_tpl_vars['section']->getTitle(); ?>
</h4><?php endif; ?>
	<div><?php echo smarty_function_eval(array('var' => $this->_tpl_vars['section']->getContent()), $this);?>
</div>
	<?php if ($this->_foreach['sections']['total'] > 1): ?>
		<?php if (! ($this->_foreach['sections']['iteration'] <= 1)): ?><div style="text-align:right;"><a href="#top" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.top"), $this);?>
</a></div><?php endif; ?>
		<?php if (! ($this->_foreach['sections']['iteration'] == $this->_foreach['sections']['total'])): ?><div class="separator"></div><?php endif; ?>
	<?php endif;  endforeach; endif; unset($_from); ?>

<?php if ($this->_tpl_vars['relatedTopics']): ?>
<h5><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.relatedTopics"), $this);?>
</h5>
<ul>
	<?php $_from = $this->_tpl_vars['relatedTopics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['relatedTopic']):
?>
	<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/help/view/<?php echo $this->_tpl_vars['relatedTopic']['id']; ?>
"><?php echo $this->_tpl_vars['relatedTopic']['title']; ?>
</a></li>
	<?php endforeach; endif; unset($_from); ?>
</ul>
<?php endif; ?>