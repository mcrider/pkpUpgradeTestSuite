<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:31
         compiled from manager/people/searchUsers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/people/searchUsers.tpl', 16, false),array('function', 'translate', 'manager/people/searchUsers.tpl', 25, false),array('function', 'html_options_translate', 'manager/people/searchUsers.tpl', 40, false),array('function', 'icon', 'manager/people/searchUsers.tpl', 100, false),array('function', 'page_info', 'manager/people/searchUsers.tpl', 126, false),array('function', 'page_links', 'manager/people/searchUsers.tpl', 127, false),array('modifier', 'escape', 'manager/people/searchUsers.tpl', 25, false),array('modifier', 'to_array', 'manager/people/searchUsers.tpl', 99, false),array('modifier', 'assign', 'manager/people/searchUsers.tpl', 99, false),array('modifier', 'truncate', 'manager/people/searchUsers.tpl', 100, false),array('block', 'iterate', 'manager/people/searchUsers.tpl', 90, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.people.enrollment");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form name="disableUser" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'disableUser'), $this);?>
">
	<input type="hidden" name="reason" value=""/>
	<input type="hidden" name="userId" value=""/>
</form>

<script type="text/javascript">
<?php echo '
<!--
function confirmAndPrompt(userId) {
	var reason = prompt(\'';  echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.confirmDisable"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); echo '\');
	if (reason == null) return;

	document.disableUser.reason.value = reason;
	document.disableUser.userId.value = userId;

	document.disableUser.submit();
}
// -->
'; ?>

</script>

<form method="post" name="submit" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enrollSearch'), $this);?>
">
<input type="hidden" name="roleId" value="<?php echo $this->_tpl_vars['roleId']; ?>
"/>
	<select name="searchField" size="1" class="selectMenu">
		<?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['fieldOptions'],'selected' => $this->_tpl_vars['searchField']), $this);?>

	</select>
	<select name="searchMatch" size="1" class="selectMenu">
		<option value="contains"<?php if ($this->_tpl_vars['searchMatch'] == 'contains'): ?> selected="selected"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.contains"), $this);?>
</option>
		<option value="is"<?php if ($this->_tpl_vars['searchMatch'] == 'is'): ?> selected="selected"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.is"), $this);?>
</option>
	</select>
	<input type="text" size="15" name="search" class="textField" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['search'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />&nbsp;<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
" class="button" />
</form>

<p><?php $_from = $this->_tpl_vars['alphaList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['letter']):
?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enrollSearch','searchInitial' => $this->_tpl_vars['letter'],'roleId' => $this->_tpl_vars['roleId']), $this);?>
"><?php if ($this->_tpl_vars['letter'] == $this->_tpl_vars['searchInitial']): ?><strong><?php echo $this->_tpl_vars['letter']; ?>
</strong><?php else:  echo $this->_tpl_vars['letter'];  endif; ?></a> <?php endforeach; endif; unset($_from); ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enrollSearch','roleId' => $this->_tpl_vars['roleId']), $this);?>
"><?php if ($this->_tpl_vars['searchInitial'] == ''): ?><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this);?>
</strong><?php else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this); endif; ?></a></p>

<form name="enroll" action="<?php if ($this->_tpl_vars['roleId']):  echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enroll','path' => $this->_tpl_vars['roleId']), $this); else:  echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enroll'), $this); endif; ?>" method="post">
<?php if (! $this->_tpl_vars['roleId']): ?>
	<p>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enrollUserAs"), $this);?>
 <select name="roleId" size="1"  class="selectMenu">
		<option value=""></option>
		<option value="<?php echo @ROLE_ID_JOURNAL_MANAGER; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.manager"), $this);?>
</option>
		<option value="<?php echo @ROLE_ID_EDITOR; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editor"), $this);?>
</option>
		<option value="<?php echo @ROLE_ID_SECTION_EDITOR; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditor"), $this);?>
</option>
		<option value="<?php echo @ROLE_ID_LAYOUT_EDITOR; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditor"), $this);?>
</option>
		<option value="<?php echo @ROLE_ID_REVIEWER; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reviewer"), $this);?>
</option>
		<option value="<?php echo @ROLE_ID_COPYEDITOR; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.copyeditor"), $this);?>
</option>
		<option value="<?php echo @ROLE_ID_PROOFREADER; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreader"), $this);?>
</option>
		<option value="<?php echo @ROLE_ID_SUBSCRIPTION_MANAGER; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.subscriptionManager"), $this);?>
</option>
		<option value="<?php echo @ROLE_ID_AUTHOR; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.author"), $this);?>
</option>
		<option value="<?php echo @ROLE_ID_READER; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reader"), $this);?>
</option>
	</select>
	</p>
	<script type="text/javascript">
	<!--
	function enrollUser(userId) {
		var fakeUrl = '<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enroll','path' => 'ROLE_ID','userId' => 'USER_ID'), $this);?>
';
		fakeUrl = fakeUrl.replace('ROLE_ID', document.enroll.roleId.options[document.enroll.roleId.selectedIndex].value);
		fakeUrl = fakeUrl.replace('USER_ID', userId);
		location.href = fakeUrl;
	}
	// -->
	</script>
<?php endif; ?>

<table width="100%" class="listing">
<tr><td colspan="5" class="headseparator">&nbsp;</td></tr>
<tr class="heading" valign="bottom">
	<td width="5%">&nbsp;</td>
	<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.username"), $this);?>
</td>
	<td width="30%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.name"), $this);?>
</td>
	<td width="30%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.email"), $this);?>
</td>
	<td width="10%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
</tr>
<tr><td colspan="5" class="headseparator">&nbsp;</td></tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'users','item' => 'user')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  $this->assign('userid', $this->_tpl_vars['user']->getUserId());  $this->assign('stats', $this->_tpl_vars['statistics'][$this->_tpl_vars['userid']]); ?>
<tr valign="top">
	<td><input type="checkbox" name="users[]" value="<?php echo $this->_tpl_vars['user']->getUserId(); ?>
" /></td>
	<td><a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'userProfile','path' => $this->_tpl_vars['userid']), $this);?>
"><?php echo $this->_tpl_vars['user']->getUsername(); ?>
</a></td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFullName(true))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	<td class="nowrap">
		<?php $this->assign('emailString', ($this->_tpl_vars['user']->getFullName())." <".($this->_tpl_vars['user']->getEmail()).">"); ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email','to' => ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('to_array', true, $_tmp) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

		<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['user']->getEmail())) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...") : smarty_modifier_truncate($_tmp, 20, "...")))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&nbsp;<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

	</td>
	<td align="right" class="nowrap">
		<?php if ($this->_tpl_vars['roleId']): ?>
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enroll','path' => $this->_tpl_vars['roleId'],'userId' => $this->_tpl_vars['user']->getUserId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enroll"), $this);?>
</a>
		<?php else: ?>
		<a href="javascript:enrollUser(<?php echo $this->_tpl_vars['user']->getUserId(); ?>
)" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enroll"), $this);?>
</a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['thisUser']->getUserId() != $this->_tpl_vars['user']->getUserId()): ?>
			<?php if ($this->_tpl_vars['user']->getDisabled()): ?>
				|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enableUser','path' => $this->_tpl_vars['user']->getUserId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enable"), $this);?>
</a>
			<?php else: ?>
				|&nbsp;<a href="javascript:confirmAndPrompt(<?php echo $this->_tpl_vars['user']->getUserId(); ?>
)" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.disable"), $this);?>
</a>
			<?php endif; ?>
		<?php endif; ?>
	</td>
</tr>
<tr><td colspan="5" class="<?php if ($this->_tpl_vars['users']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td></tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['users']->wasEmpty()): ?>
	<tr>
	<td colspan="5" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
	<tr><td colspan="5" class="endseparator">&nbsp;</td></tr>
<?php else: ?>
	<tr>
		<td colspan="3" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['users']), $this);?>
</td>
		<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'users','iterator' => $this->_tpl_vars['users'],'searchField' => $this->_tpl_vars['searchField'],'searchMatch' => $this->_tpl_vars['searchMatch'],'search' => $this->_tpl_vars['search'],'dateFromDay' => $this->_tpl_vars['dateFromDay'],'dateFromYear' => $this->_tpl_vars['dateFromYear'],'dateFromMonth' => $this->_tpl_vars['dateFromMonth'],'dateToDay' => $this->_tpl_vars['dateToDay'],'dateToYear' => $this->_tpl_vars['dateToYear'],'dateToMonth' => $this->_tpl_vars['dateToMonth']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enrollSelected"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'manager','escape' => false), $this);?>
'" />

</form>


<?php if ($this->_tpl_vars['backLink']): ?>
<a href="<?php echo $this->_tpl_vars['backLink']; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ($this->_tpl_vars['backLinkLabel'])), $this);?>
</a>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>