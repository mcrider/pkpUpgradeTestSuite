<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:37
         compiled from manager/people/enrollment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/people/enrollment.tpl', 15, false),array('function', 'translate', 'manager/people/enrollment.tpl', 33, false),array('function', 'html_options_translate', 'manager/people/enrollment.tpl', 62, false),array('function', 'icon', 'manager/people/enrollment.tpl', 118, false),array('function', 'page_info', 'manager/people/enrollment.tpl', 149, false),array('function', 'page_links', 'manager/people/enrollment.tpl', 150, false),array('modifier', 'escape', 'manager/people/enrollment.tpl', 33, false),array('modifier', 'ord', 'manager/people/enrollment.tpl', 46, false),array('modifier', 'chr', 'manager/people/enrollment.tpl', 71, false),array('modifier', 'wordwrap', 'manager/people/enrollment.tpl', 112, false),array('modifier', 'assign', 'manager/people/enrollment.tpl', 116, false),array('modifier', 'to_array', 'manager/people/enrollment.tpl', 117, false),array('modifier', 'truncate', 'manager/people/enrollment.tpl', 118, false),array('block', 'iterate', 'manager/people/enrollment.tpl', 108, false),)), $this); ?>

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
function toggleChecked() {
	var elements = document.people.elements;
	for (var i=0; i < elements.length; i++) {
		if (elements[i].name = \'bcc[]\') {
			elements[i].checked = !elements[i].checked;
		}
	}
}

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

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['roleName']), $this);?>
</h3>
<?php $this->assign('start', ((is_array($_tmp='A')) ? $this->_run_mod_handler('ord', true, $_tmp) : ord($_tmp))); ?>
<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => $this->_tpl_vars['roleSymbolic']), $this);?>
">
	<select name="roleSymbolic" class="selectMenu">
		<option <?php if ($this->_tpl_vars['roleSymbolic'] == 'all'): ?>selected="selected" <?php endif; ?>value="all"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.allUsers"), $this);?>
</option>
		<option <?php if ($this->_tpl_vars['roleSymbolic'] == 'managers'): ?>selected="selected" <?php endif; ?>value="managers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.managers"), $this);?>
</option>
		<option <?php if ($this->_tpl_vars['roleSymbolic'] == 'editors'): ?>selected="selected" <?php endif; ?>value="editors"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editors"), $this);?>
</option>
		<option <?php if ($this->_tpl_vars['roleSymbolic'] == 'sectionEditors'): ?>selected="selected" <?php endif; ?>value="sectionEditors"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditors"), $this);?>
</option>
		<option <?php if ($this->_tpl_vars['roleSymbolic'] == 'layoutEditors'): ?>selected="selected" <?php endif; ?>value="layoutEditors"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditors"), $this);?>
</option>
		<option <?php if ($this->_tpl_vars['roleSymbolic'] == 'copyeditors'): ?>selected="selected" <?php endif; ?>value="copyeditors"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.copyeditors"), $this);?>
</option>
		<option <?php if ($this->_tpl_vars['roleSymbolic'] == 'proofreaders'): ?>selected="selected" <?php endif; ?>value="proofreaders"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreaders"), $this);?>
</option>
		<option <?php if ($this->_tpl_vars['roleSymbolic'] == 'reviewers'): ?>selected="selected" <?php endif; ?>value="reviewers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reviewers"), $this);?>
</option>
		<option <?php if ($this->_tpl_vars['roleSymbolic'] == 'authors'): ?>selected="selected" <?php endif; ?>value="authors"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.authors"), $this);?>
</option>
		<option <?php if ($this->_tpl_vars['roleSymbolic'] == 'readers'): ?>selected="selected" <?php endif; ?>value="readers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.readers"), $this);?>
</option>
		<option <?php if ($this->_tpl_vars['roleSymbolic'] == 'subscriptionManagers'): ?>selected="selected" <?php endif; ?>value="subscriptionManagers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.subscriptionManagers"), $this);?>
</option>
	</select>
	<select name="searchField" size="1" class="selectMenu">
		<?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['fieldOptions'],'selected' => $this->_tpl_vars['searchField']), $this);?>

	</select>
	<select name="searchMatch" size="1" class="selectMenu">
		<option value="contains"<?php if ($this->_tpl_vars['searchMatch'] == 'contains'): ?> selected="selected"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.contains"), $this);?>
</option>
		<option value="is"<?php if ($this->_tpl_vars['searchMatch'] == 'is'): ?> selected="selected"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.is"), $this);?>
</option>
	</select>
	<input type="text" size="10" name="search" class="textField" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['search'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
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
?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => $this->_tpl_vars['roleSymbolic'],'searchInitial' => ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp))), $this);?>
"><?php if (chr ( $this->_sections['letters']['index']+$this->_tpl_vars['start'] ) == $this->_tpl_vars['searchInitial']): ?><strong><?php echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp)); ?>
</strong><?php else:  echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp));  endif; ?></a> <?php endfor; endif; ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => $this->_tpl_vars['roleSymbolic']), $this);?>
"><?php if ($this->_tpl_vars['searchInitial'] == ''): ?><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this);?>
</strong><?php else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this); endif; ?></a></p>

<?php if (! $this->_tpl_vars['roleId']): ?>
<ul>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'managers'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.managers"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'editors'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editors"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'sectionEditors'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditors"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'layoutEditors'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditors"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'copyeditors'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.copyeditors"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'proofreaders'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreaders"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'reviewers'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reviewers"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'authors'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.authors"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'readers'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.readers"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'subscriptionManagers'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.subscriptionManagers"), $this);?>
</a></li>
</ul>

<br />
<?php else: ?>
<p><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'all'), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.allUsers"), $this);?>
</a></p>
<?php endif; ?>

<form name="people" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email'), $this);?>
" method="post">
<input type="hidden" name="redirectUrl" value="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => $this->_tpl_vars['roleSymbolic']), $this);?>
"/>
<table width="100%" class="listing">
	<tr>
		<td colspan="5" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="5%">&nbsp;</td>
		<td width="12%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.username"), $this);?>
</td>
		<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.name"), $this);?>
</td>
		<td width="23%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.email"), $this);?>
</td>
		<td width="40%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="5" class="headseparator">&nbsp;</td>
	</tr>
	<?php $this->_tag_stack[] = array('iterate', array('from' => 'users','item' => 'user')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->assign('userExists', 1); ?>
	<tr valign="top">
		<td><input type="checkbox" name="bcc[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getEmail())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/></td>
		<td><a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'userProfile','path' => $this->_tpl_vars['user']->getUserId()), $this);?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['user']->getUsername())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 15, ' ', true) : smarty_modifier_wordwrap($_tmp, 15, ' ', true)); ?>
</a></td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
		<td class="nowrap">
			<?php $this->assign('emailString', ($this->_tpl_vars['user']->getFullName())." <".($this->_tpl_vars['user']->getEmail()).">"); ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => $this->_tpl_vars['roleSymbolic']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'redirectUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'redirectUrl'));?>

			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email','to' => ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('to_array', true, $_tmp) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp)),'redirectUrl' => $this->_tpl_vars['redirectUrl']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['user']->getEmail())) ? $this->_run_mod_handler('truncate', true, $_tmp, 15, "...") : smarty_modifier_truncate($_tmp, 15, "...")))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&nbsp;<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

		</td>
		<td align="right">
			<?php if ($this->_tpl_vars['roleId']): ?>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'unEnroll','path' => $this->_tpl_vars['roleId'],'userId' => $this->_tpl_vars['user']->getUserId()), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.confirmUnenroll"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.unenroll"), $this);?>
</a>&nbsp;|
			<?php endif; ?>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editUser','path' => $this->_tpl_vars['user']->getUserId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>
			<?php if ($this->_tpl_vars['thisUser']->getUserId() != $this->_tpl_vars['user']->getUserId()): ?>
				|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'signInAsUser','path' => $this->_tpl_vars['user']->getUserId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.signInAs"), $this);?>
</a>
				<?php if (! $this->_tpl_vars['roleId']): ?>|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'removeUser','path' => $this->_tpl_vars['user']->getUserId()), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.confirmRemove"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.remove"), $this);?>
</a><?php endif; ?>
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
	<tr>
		<td colspan="5" class="<?php if ($this->_tpl_vars['users']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['users']->wasEmpty()): ?>
	<tr>
		<td colspan="5" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.noneEnrolled"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="5" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="4" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['users']), $this);?>
</td>
		<td align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'users','iterator' => $this->_tpl_vars['users'],'searchField' => $this->_tpl_vars['searchField'],'searchMatch' => $this->_tpl_vars['searchMatch'],'search' => $this->_tpl_vars['search'],'dateFromDay' => $this->_tpl_vars['dateFromDay'],'dateFromYear' => $this->_tpl_vars['dateFromYear'],'dateFromMonth' => $this->_tpl_vars['dateFromMonth'],'dateToDay' => $this->_tpl_vars['dateToDay'],'dateToYear' => $this->_tpl_vars['dateToYear'],'dateToMonth' => $this->_tpl_vars['dateToMonth'],'roleSymbolic' => $this->_tpl_vars['roleSymbolic']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<?php if ($this->_tpl_vars['userExists']): ?>
	<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.compose"), $this);?>
" class="button defaultButton"/>&nbsp;<input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.selectAll"), $this);?>
" class="button" onclick="toggleChecked()" /></p>
<?php endif; ?>
</form>

<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enrollSearch','path' => $this->_tpl_vars['roleId']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enrollExistingUser"), $this);?>
</a> | <a href="<?php if ($this->_tpl_vars['roleId']):  echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createUser','roleId' => $this->_tpl_vars['roleId']), $this); else:  echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createUser'), $this); endif; ?>" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.createUser"), $this);?>
</a> | <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enrollSyncSelect','path' => $this->_tpl_vars['rolePath']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enrollSync"), $this);?>
</a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>