<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:32
         compiled from manager/people/selectMergeUser.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/people/selectMergeUser.tpl', 15, false),array('function', 'url', 'manager/people/selectMergeUser.tpl', 18, false),array('function', 'html_options_translate', 'manager/people/selectMergeUser.tpl', 33, false),array('function', 'icon', 'manager/people/selectMergeUser.tpl', 85, false),array('function', 'page_info', 'manager/people/selectMergeUser.tpl', 112, false),array('function', 'page_links', 'manager/people/selectMergeUser.tpl', 113, false),array('modifier', 'escape', 'manager/people/selectMergeUser.tpl', 39, false),array('modifier', 'wordwrap', 'manager/people/selectMergeUser.tpl', 79, false),array('modifier', 'assign', 'manager/people/selectMergeUser.tpl', 83, false),array('modifier', 'to_array', 'manager/people/selectMergeUser.tpl', 84, false),array('modifier', 'truncate', 'manager/people/selectMergeUser.tpl', 85, false),array('block', 'iterate', 'manager/people/selectMergeUser.tpl', 76, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.people.mergeUsers");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><?php if ($this->_tpl_vars['oldUserId'] != ''):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.mergeUsers.into.description"), $this); else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.mergeUsers.from.description"), $this); endif; ?></p>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['roleName']), $this);?>
</h3>
<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => $this->_tpl_vars['roleSymbolic'],'oldUserId' => $this->_tpl_vars['oldUserId']), $this);?>
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

<p><?php $_from = $this->_tpl_vars['alphaList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['letter']):
?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => $this->_tpl_vars['roleSymbolic'],'oldUserId' => $this->_tpl_vars['oldUserId'],'searchInitial' => $this->_tpl_vars['letter']), $this);?>
"><?php if ($this->_tpl_vars['letter'] == $this->_tpl_vars['searchInitial']): ?><strong><?php echo $this->_tpl_vars['letter']; ?>
</strong><?php else:  echo $this->_tpl_vars['letter'];  endif; ?></a> <?php endforeach; endif; unset($_from); ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => $this->_tpl_vars['roleSymbolic'],'oldUserId' => $this->_tpl_vars['oldUserId']), $this);?>
"><?php if ($this->_tpl_vars['searchInitial'] == ''): ?><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this);?>
</strong><?php else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this); endif; ?></a></p>

<?php if (! $this->_tpl_vars['roleId']): ?>
<ul>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'managers','oldUserId' => $this->_tpl_vars['oldUserId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.managers"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'editors','oldUserId' => $this->_tpl_vars['oldUserId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editors"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'sectionEditors','oldUserId' => $this->_tpl_vars['oldUserId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditors"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'layoutEditors','oldUserId' => $this->_tpl_vars['oldUserId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditors"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'copyeditors','oldUserId' => $this->_tpl_vars['oldUserId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.copyeditors"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'proofreaders','oldUserId' => $this->_tpl_vars['oldUserId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreaders"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'reviewers','oldUserId' => $this->_tpl_vars['oldUserId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reviewers"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'authors','oldUserId' => $this->_tpl_vars['oldUserId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.authors"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'readers','oldUserId' => $this->_tpl_vars['oldUserId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.readers"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'subscriptionManagers','oldUserId' => $this->_tpl_vars['oldUserId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.subscriptionManagers"), $this);?>
</a></li>
</ul>

<br />
<?php else: ?>
<p><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'all','oldUserId' => $this->_tpl_vars['oldUserId']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.allUsers"), $this);?>
</a></p>
<?php endif; ?>

<table width="100%" class="listing">
	<tr>
		<td colspan="4" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="29%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.username"), $this);?>
</td>
		<td width="29%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.name"), $this);?>
</td>
		<td width="29%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.email"), $this);?>
</td>
		<td width="13%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="4" class="headseparator">&nbsp;</td>
	</tr>
	<?php $this->_tag_stack[] = array('iterate', array('from' => 'users','item' => 'user')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->assign('userExists', 1); ?>
	<tr valign="top">
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
			<?php if ($this->_tpl_vars['thisUser']->getUserId() != $this->_tpl_vars['user']->getUserId()): ?>
				<?php if ($this->_tpl_vars['oldUserId'] != ''): ?>
					<?php if ($this->_tpl_vars['oldUserId'] != $this->_tpl_vars['user']->getUserId()): ?>
						<a href="#" onclick="confirmAction('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('oldUserId' => $this->_tpl_vars['oldUserId'],'newUserId' => $this->_tpl_vars['user']->getUserId()), $this);?>
', '<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.mergeUsers.confirm",'oldUsername' => $this->_tpl_vars['oldUsername'],'newUsername' => $this->_tpl_vars['user']->getUsername()), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.mergeUser"), $this);?>
</a>
					<?php endif; ?>
				<?php else: ?>
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('oldUserId' => $this->_tpl_vars['user']->getUserId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.mergeUser"), $this);?>
</a>
				<?php endif; ?>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td colspan="4" class="<?php if ($this->_tpl_vars['users']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['users']->wasEmpty()): ?>
	<tr>
		<td colspan="4" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.noneEnrolled"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="4" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="2" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['users']), $this);?>
</td>
		<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'users','iterator' => $this->_tpl_vars['users'],'searchField' => $this->_tpl_vars['searchField'],'searchMatch' => $this->_tpl_vars['searchMatch'],'search' => $this->_tpl_vars['search'],'dateFromDay' => $this->_tpl_vars['dateFromDay'],'dateFromYear' => $this->_tpl_vars['dateFromYear'],'dateFromMonth' => $this->_tpl_vars['dateFromMonth'],'dateToDay' => $this->_tpl_vars['dateToDay'],'dateToYear' => $this->_tpl_vars['dateToYear'],'dateToMonth' => $this->_tpl_vars['dateToMonth'],'roleSymbolic' => $this->_tpl_vars['roleSymbolic'],'oldUserId' => $this->_tpl_vars['oldUserId']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>