<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:37
         compiled from manager/groups/groups.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/groups/groups.tpl', 18, false),array('function', 'translate', 'manager/groups/groups.tpl', 21, false),array('function', 'icon', 'manager/groups/groups.tpl', 44, false),array('function', 'page_info', 'manager/groups/groups.tpl', 63, false),array('function', 'page_links', 'manager/groups/groups.tpl', 64, false),array('modifier', 'assign', 'manager/groups/groups.tpl', 19, false),array('modifier', 'escape', 'manager/groups/groups.tpl', 44, false),array('block', 'iterate', 'manager/groups/groups.tpl', 40, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.groups");  $this->assign('pageId', "manager.groups");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<br/>

<form action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setBoardEnabled'), $this);?>
" method="post">
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'editorialTeam'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'aboutEditorialTeamUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'aboutEditorialTeamUrl'));?>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'manager','op' => 'people','path' => 'all'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'peopleManagementUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'peopleManagementUrl'));?>

	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.groups.enableBoard.description",'aboutEditorialTeamUrl' => $this->_tpl_vars['aboutEditorialTeamUrl']), $this);?>
<br/>
	<input type="radio" id="boardEnabledOff" <?php if (! $this->_tpl_vars['boardEnabled']): ?>checked="checked" <?php endif; ?>name="boardEnabled" value="0"/>&nbsp;<label for="boardEnabledOff"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.groups.disableBoard"), $this);?>
</label><br/>
	<input type="radio" id="boardEnabledOn" <?php if ($this->_tpl_vars['boardEnabled']): ?>checked="checked" <?php endif; ?>name="boardEnabled" value="1"/>&nbsp;<label for="boardEnabledOn"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.groups.enableBoard"), $this);?>
</label><br/>
	<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.record"), $this);?>
" class="button defaultButton"/>
</form>

<br />

<table width="100%" class="listing">
	<tr>
		<td colspan="2" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="75%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.groups.title"), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="headseparator">&nbsp;</td>
	</tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'groups','item' => 'group')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top">
		<td>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'manager','op' => 'email','toGroup' => $this->_tpl_vars['group']->getGroupId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

			<?php echo ((is_array($_tmp=$this->_tpl_vars['group']->getGroupTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&nbsp;<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

		</td>
		<td>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editGroup','path' => $this->_tpl_vars['group']->getGroupId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'groupMembership','path' => $this->_tpl_vars['group']->getGroupId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.groups.membership"), $this);?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteGroup','path' => $this->_tpl_vars['group']->getGroupId()), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.groups.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'moveGroup','d' => 'u','groupId' => $this->_tpl_vars['group']->getGroupId()), $this);?>
">&uarr;</a>&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'moveGroup','d' => 'd','groupId' => $this->_tpl_vars['group']->getGroupId()), $this);?>
">&darr;</a>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="<?php if ($this->_tpl_vars['groups']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['groups']->wasEmpty()): ?>
	<tr>
		<td colspan="2" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.groups.noneCreated"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="2" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['groups']), $this);?>
</td>
		<td colspan="3" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'groups','iterator' => $this->_tpl_vars['groups']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createGroup'), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.groups.create"), $this);?>
</a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>