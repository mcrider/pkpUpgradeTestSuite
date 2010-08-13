<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:26
         compiled from announcement/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'announcement/index.tpl', 19, false),array('block', 'iterate', 'announcement/index.tpl', 28, false),array('function', 'url', 'announcement/index.tpl', 39, false),array('function', 'translate', 'announcement/index.tpl', 39, false),array('function', 'page_info', 'announcement/index.tpl', 54, false),array('function', 'page_links', 'announcement/index.tpl', 55, false),)), $this); ?>

<?php $this->assign('pageTitle', "announcement.announcements");  $this->assign('pageId', "announcement.announcements");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table width="100%" class="listing">
<?php if ($this->_tpl_vars['announcementsIntroduction'] != null): ?>
	<tr>
		<td colspan="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['announcementsIntroduction'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
<?php endif; ?>
	<tr>
		<td colspan="2" class="headseparator">&nbsp;</td>
	</tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'announcements','item' => 'announcement')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top">
	<?php if ($this->_tpl_vars['announcement']->getTypeId() != null): ?>
		<td width="80%"><h4><?php echo $this->_tpl_vars['announcement']->getTypeName(); ?>
: <?php echo $this->_tpl_vars['announcement']->getTitle(); ?>
</h4></td>
	<?php else: ?>
		<td width="80%"><h4><?php echo $this->_tpl_vars['announcement']->getTitle(); ?>
</h4></td>
	<?php endif; ?>
		<td width="20%">&nbsp;</td>
	</tr>
	<tr valign="top">
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getDescriptionShort())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
		<td valign="bottom" align="right"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'view','path' => $this->_tpl_vars['announcement']->getAnnouncementId()), $this);?>
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
<?php else: ?>
	<tr>
		<td align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['announcements']), $this);?>
</td>
		<td align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'announcements','iterator' => $this->_tpl_vars['announcements']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>