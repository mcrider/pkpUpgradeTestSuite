<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:16
         compiled from manager/people/searchUsers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'ord', 'manager/people/searchUsers.tpl', 13, false),array('modifier', 'escape', 'manager/people/searchUsers.tpl', 27, false),array('modifier', 'chr', 'manager/people/searchUsers.tpl', 51, false),array('modifier', 'truncate', 'manager/people/searchUsers.tpl', 98, false),array('function', 'translate', 'manager/people/searchUsers.tpl', 27, false),array('function', 'html_options_translate', 'manager/people/searchUsers.tpl', 42, false),array('function', 'icon', 'manager/people/searchUsers.tpl', 98, false),array('function', 'page_info', 'manager/people/searchUsers.tpl', 124, false),array('function', 'page_links', 'manager/people/searchUsers.tpl', 125, false),array('block', 'iterate', 'manager/people/searchUsers.tpl', 88, false),)), $this); ?>

<?php $this->assign('start', ((is_array($_tmp='A')) ? $this->_run_mod_handler('ord', true, $_tmp) : ord($_tmp))); ?>

<?php $this->assign('pageTitle', "manager.people.enrollment");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form name="disableUser" method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/disableUser">
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

<form name="submit" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/enrollSearch">
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

<p><?php unset($this->_sections['letters']);
$this->_sections['letters']['loop'] = is_array($_loop=26) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['letters']['name'] = 'letters';
$this->_sections['letters']['show'] = true;
$this->_sections['letters']['max'] = $this->_sections['letters']['loop'];
$this->_sections['letters']['step'] = 1;
$this->_sections['letters']['start'] = $this->_sections['letters']['step'] > 0 ? 0 : $this->_sections['letters']['loop']-1;
if ($this->_sections['letters']['show']) {
    $this->_sections['letters']['total'] = $this->_sections['letters']['loop'];
    if ($this->_sections['letters']['total'] == 0)
        $this->_sections['letters']['show'] = false;
} else
    $this->_sections['letters']['total'] = 0;
if ($this->_sections['letters']['show']):

            for ($this->_sections['letters']['index'] = $this->_sections['letters']['start'], $this->_sections['letters']['iteration'] = 1;
                 $this->_sections['letters']['iteration'] <= $this->_sections['letters']['total'];
                 $this->_sections['letters']['index'] += $this->_sections['letters']['step'], $this->_sections['letters']['iteration']++):
$this->_sections['letters']['rownum'] = $this->_sections['letters']['iteration'];
$this->_sections['letters']['index_prev'] = $this->_sections['letters']['index'] - $this->_sections['letters']['step'];
$this->_sections['letters']['index_next'] = $this->_sections['letters']['index'] + $this->_sections['letters']['step'];
$this->_sections['letters']['first']      = ($this->_sections['letters']['iteration'] == 1);
$this->_sections['letters']['last']       = ($this->_sections['letters']['iteration'] == $this->_sections['letters']['total']);
?><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/enrollSearch?searchInitial=<?php echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp)); ?>
&amp;roleId=<?php echo $this->_tpl_vars['roleId']; ?>
"><?php if (chr ( $this->_sections['letters']['index']+$this->_tpl_vars['start'] ) == $this->_tpl_vars['searchInitial']): ?><strong><?php echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp)); ?>
</strong><?php else:  echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp));  endif; ?></a> <?php endfor; endif; ?><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/enrollSearch?roleId=<?php echo $this->_tpl_vars['roleId']; ?>
"><?php if ($this->_tpl_vars['searchInitial'] == ''): ?><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this);?>
</strong><?php else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this); endif; ?></a></p>

<form name="enroll" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/enroll<?php if ($this->_tpl_vars['roleId']): ?>/<?php echo $this->_tpl_vars['roleId'];  endif; ?>" method="post">
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
		location.href = '<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/enroll/'+document.enroll.roleId.options[document.enroll.roleId.selectedIndex].value+'?userId='+userId;
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
<?php $this->_tag_stack[] = array('iterate', array('from' => 'users','item' => 'user')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start();  $this->assign('userid', $this->_tpl_vars['user']->getUserId());  $this->assign('stats', $this->_tpl_vars['statistics'][$this->_tpl_vars['userid']]); ?>
<tr valign="top">
	<td><input type="checkbox" name="users[]" value="<?php echo $this->_tpl_vars['user']->getUserId(); ?>
" /></td>
	<td><a class="action" href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/userProfile/<?php echo $this->_tpl_vars['userid']; ?>
"><?php echo $this->_tpl_vars['user']->getUsername(); ?>
</a></td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFullName(true))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	<td class="nowrap">
		<?php $this->assign('emailString', ($this->_tpl_vars['user']->getFullName())." <".($this->_tpl_vars['user']->getEmail()).">"); ?>
		<?php $this->assign('emailStringEscaped', ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
		<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['user']->getEmail())) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...") : smarty_modifier_truncate($_tmp, 20, "...")))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&nbsp;<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['requestPageUrl'])."/email?to[]=".($this->_tpl_vars['emailStringEscaped'])), $this);?>

	</td>
	<td align="right" class="nowrap">
		<?php if ($this->_tpl_vars['roleId']): ?>
		<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/enroll/<?php echo $this->_tpl_vars['roleId']; ?>
?userId=<?php echo $this->_tpl_vars['user']->getUserId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enroll"), $this);?>
</a>
		<?php else: ?>
		<a href="javascript:enrollUser(<?php echo $this->_tpl_vars['user']->getUserId(); ?>
)" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enroll"), $this);?>
</a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['thisUser']->getUserId() != $this->_tpl_vars['user']->getUserId()): ?>
			<?php if ($this->_tpl_vars['user']->getDisabled()): ?>
				<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/enableUser/<?php echo $this->_tpl_vars['user']->getUserId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enable"), $this);?>
</a>
			<?php else: ?>
				<a href="javascript:confirmAndPrompt(<?php echo $this->_tpl_vars['user']->getUserId(); ?>
)" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.disable"), $this);?>
</a>
			<?php endif; ?>
		<?php endif; ?>
	</td>
</tr>
<tr><td colspan="5" class="<?php if ($this->_tpl_vars['users']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td></tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['users']->wasEmpty()): ?>
	<tr>
	<td colspan="5" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
	<tr><td colspan="5" class="endseparator">&nbsp;</td></tr>
<?php else: ?>
	<tr>
		<td colspan="3" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['users']), $this);?>
</td>
		<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'users','iterator' => $this->_tpl_vars['users']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enrollSelected"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager'" />

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