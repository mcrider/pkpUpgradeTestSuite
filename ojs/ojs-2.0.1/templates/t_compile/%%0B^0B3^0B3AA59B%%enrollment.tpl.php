<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:00
         compiled from manager/people/enrollment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/people/enrollment.tpl', 29, false),array('function', 'html_options_translate', 'manager/people/enrollment.tpl', 45, false),array('function', 'icon', 'manager/people/enrollment.tpl', 98, false),array('function', 'page_info', 'manager/people/enrollment.tpl', 131, false),array('function', 'page_links', 'manager/people/enrollment.tpl', 132, false),array('modifier', 'ord', 'manager/people/enrollment.tpl', 30, false),array('modifier', 'escape', 'manager/people/enrollment.tpl', 51, false),array('modifier', 'chr', 'manager/people/enrollment.tpl', 54, false),array('modifier', 'wordwrap', 'manager/people/enrollment.tpl', 93, false),array('modifier', 'truncate', 'manager/people/enrollment.tpl', 98, false),array('block', 'iterate', 'manager/people/enrollment.tpl', 89, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.people.enrollment");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
<?php echo '

function toggleChecked() {
	var elements = document.people.elements;
	for (var i=0; i < elements.length; i++) {
		if (elements[i].name = \'bcc[]\') {
			elements[i].checked = !elements[i].checked;
		}
	}
}
'; ?>

</script>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['roleName']), $this);?>
</h3>
<?php $this->assign('start', ((is_array($_tmp='A')) ? $this->_run_mod_handler('ord', true, $_tmp) : ord($_tmp))); ?>
<form action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/<?php echo $this->_tpl_vars['roleSymbolic']; ?>
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
?><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/<?php echo $this->_tpl_vars['roleSymbolic']; ?>
?searchInitial=<?php echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp)); ?>
"><?php if (chr ( $this->_sections['letters']['index']+$this->_tpl_vars['start'] ) == $this->_tpl_vars['searchInitial']): ?><strong><?php echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp)); ?>
</strong><?php else:  echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp));  endif; ?></a> <?php endfor; endif; ?><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/<?php echo $this->_tpl_vars['roleSymbolic']; ?>
"><?php if ($this->_tpl_vars['searchInitial'] == ''): ?><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this);?>
</strong><?php else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this); endif; ?></a></p>

<?php if (! $this->_tpl_vars['roleId']): ?>
<ul>
	<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/managers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.managers"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/editors"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editors"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/sectionEditors"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditors"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/layoutEditors"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditors"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/copyeditors"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.copyeditors"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/proofreaders"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreaders"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/reviewers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reviewers"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/authors"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.authors"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/readers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.readers"), $this);?>
</a></li>
</ul>

<br />
<?php else: ?>
<p><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/people/all" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.allUsers"), $this);?>
</a></p>
<?php endif; ?>

<form name="people" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/email" method="post">
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
	<?php $this->_tag_stack[] = array('iterate', array('from' => 'users','item' => 'user')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
	<?php $this->assign('userExists', 1); ?>
	<tr valign="top">
		<td><input type="checkbox" name="bcc[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getEmail())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/></td>
		<td><a class="action" href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/userProfile/<?php echo $this->_tpl_vars['user']->getUserId(); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getUsername())) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 15, ' ', true) : smarty_modifier_wordwrap($_tmp, 15, ' ', true)); ?>
</a></td>
		<td><?php echo $this->_tpl_vars['user']->getFullName(); ?>
</td>
		<td>
			<?php $this->assign('emailString', ($this->_tpl_vars['user']->getFullName())." <".($this->_tpl_vars['user']->getEmail()).">"); ?>
			<?php $this->assign('emailStringEscaped', ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
			<nobr><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getEmail())) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...") : smarty_modifier_truncate($_tmp, 20, "...")); ?>
&nbsp;<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['requestPageUrl'])."/email?to[]=".($this->_tpl_vars['emailStringEscaped'])), $this);?>
</nobr>
		</td>
		<td align="right">
			<nobr>
			<?php if ($this->_tpl_vars['roleId']): ?>
			<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/unEnroll/<?php echo $this->_tpl_vars['roleId']; ?>
?userId=<?php echo $this->_tpl_vars['user']->getUserId(); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.confirmUnenroll"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.unenroll"), $this);?>
</a>
			<?php endif; ?>
			<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/editUser/<?php echo $this->_tpl_vars['user']->getUserId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>
			<?php if ($this->_tpl_vars['thisUser']->getUserId() != $this->_tpl_vars['user']->getUserId()): ?>
				<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/signInAsUser/<?php echo $this->_tpl_vars['user']->getUserId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.signInAs"), $this);?>
</a>
				<?php if (! $this->_tpl_vars['roleId']): ?><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/removeUser/<?php echo $this->_tpl_vars['user']->getUserId(); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.confirmRemove"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.remove"), $this);?>
</a><?php endif; ?>
				<?php if ($this->_tpl_vars['user']->getDisabled()): ?>
					<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/enableUser/<?php echo $this->_tpl_vars['user']->getUserId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enable"), $this);?>
</a>
				<?php else: ?>
					<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/disableUser/<?php echo $this->_tpl_vars['user']->getUserId(); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.confirmDisable"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.disable"), $this);?>
</a>
				<?php endif; ?>
			<?php endif; ?>
			</nobr>
		</td>
	</tr>
	<tr>
		<td colspan="5" class="<?php if ($this->_tpl_vars['users']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['users']->wasEmpty()): ?>
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
		<td align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'users','iterator' => $this->_tpl_vars['users']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<?php if ($this->_tpl_vars['userExists']): ?>
	<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.compose"), $this);?>
" class="button defaultButton"/>&nbsp;<input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.selectAll"), $this);?>
" class="button" onClick="toggleChecked()" /></p>
<?php endif; ?>
</form>

<?php if ($this->_tpl_vars['roleId']): ?>
<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/enrollSearch/<?php echo $this->_tpl_vars['roleId']; ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enrollExistingUser"), $this);?>
</a> |
<?php endif; ?>
<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/createUser" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.createUser"), $this);?>
</a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>