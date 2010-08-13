<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:31
         compiled from manager/groups/memberships.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/groups/memberships.tpl', 17, false),array('function', 'translate', 'manager/groups/memberships.tpl', 17, false),array('function', 'page_info', 'manager/groups/memberships.tpl', 55, false),array('function', 'page_links', 'manager/groups/memberships.tpl', 56, false),array('block', 'iterate', 'manager/groups/memberships.tpl', 34, false),array('modifier', 'escape', 'manager/groups/memberships.tpl', 37, false),array('modifier', 'to_array', 'manager/groups/memberships.tpl', 39, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.groups.membership");  $this->assign('pageId', "manager.groups");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editGroup','path' => $this->_tpl_vars['group']->getGroupId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.groups.editTitle"), $this);?>
</a></li>
	<li class="current"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'groupMembership','path' => $this->_tpl_vars['group']->getGroupId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.groups.membership"), $this);?>
</a></li>
</ul>

<br/>

<table width="100%" class="listing">
	<tr>
		<td colspan="2" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="85%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.name"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="headseparator">&nbsp;</td>
	</tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'memberships','item' => 'membership')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->assign('user', $this->_tpl_vars['membership']->getUser()); ?>
	<tr valign="top">
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
		<td>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteMembership','path' => ((is_array($_tmp=$this->_tpl_vars['membership']->getGroupId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['membership']->getUserId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['membership']->getUserId()))), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.groups.membership.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'moveMembership','d' => 'u','groupId' => $this->_tpl_vars['group']->getGroupId(),'userId' => $this->_tpl_vars['user']->getUserId()), $this);?>
">&uarr;</a>&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'moveMembership','d' => 'd','groupId' => $this->_tpl_vars['group']->getGroupId(),'userId' => $this->_tpl_vars['user']->getUserId()), $this);?>
">&darr;</a>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="<?php if ($this->_tpl_vars['memberships']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['memberships']->wasEmpty()): ?>
	<tr>
		<td colspan="2" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.groups.membership.noneCreated"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['memberships']), $this);?>
</td>
		<td align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'membership','iterator' => $this->_tpl_vars['memberships']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'addMembership','path' => $this->_tpl_vars['group']->getGroupId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.groups.membership.addMember"), $this);?>
</a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>