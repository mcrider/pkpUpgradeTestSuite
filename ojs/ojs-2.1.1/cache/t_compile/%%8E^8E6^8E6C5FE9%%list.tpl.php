<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:26
         compiled from announcement/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'iterate', 'announcement/list.tpl', 16, false),array('modifier', 'escape', 'announcement/list.tpl', 19, false),array('modifier', 'nl2br', 'announcement/list.tpl', 26, false),array('function', 'url', 'announcement/list.tpl', 27, false),array('function', 'translate', 'announcement/list.tpl', 27, false),)), $this); ?>

<table width="100%" class="listing">
	<tr>
		<td colspan="2" class="headseparator">&nbsp;</td>
	</tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'announcements','item' => 'announcement')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top">
	<?php if ($this->_tpl_vars['announcement']->getTypeId() != null): ?>
		<td width="80%"><h4><?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getTypeName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h4></td>
	<?php else: ?>
		<td width="80%"><h4><?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h4></td>
	<?php endif; ?>
		<td width="20%">&nbsp;</td>
	</tr>
	<tr valign="top">
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getDescriptionShort())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
		<td valign="bottom" align="right"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'announcement','op' => 'view','path' => $this->_tpl_vars['announcement']->getAnnouncementId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.viewLink"), $this);?>
</a></td>
	</tr>
	<tr>
		<td colspan="2" class="<?php if ($this->_tpl_vars['announcements']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['announcements']->wasEmpty()): ?>
	<tr>
		<td colspan="2" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.noneExist"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="endseparator">&nbsp;</td>
	</tr>
<?php endif; ?>
</table>