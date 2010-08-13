<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:04
         compiled from sectionEditor/selectUser.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'ord', 'sectionEditor/selectUser.tpl', 12, false),array('modifier', 'escape', 'sectionEditor/selectUser.tpl', 24, false),array('modifier', 'chr', 'sectionEditor/selectUser.tpl', 27, false),array('modifier', 'date_format', 'sectionEditor/selectUser.tpl', 46, false),array('function', 'translate', 'sectionEditor/selectUser.tpl', 15, false),array('function', 'html_options_translate', 'sectionEditor/selectUser.tpl', 18, false),array('function', 'page_info', 'sectionEditor/selectUser.tpl', 64, false),array('function', 'page_links', 'sectionEditor/selectUser.tpl', 65, false),array('block', 'iterate', 'sectionEditor/selectUser.tpl', 39, false),)), $this); ?>

<?php $this->assign('start', ((is_array($_tmp='A')) ? $this->_run_mod_handler('ord', true, $_tmp) : ord($_tmp))); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['pageSubTitle']), $this);?>
</h3>
<form name="submit" method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/<?php echo $this->_tpl_vars['actionHandler']; ?>
/<?php echo $this->_tpl_vars['articleId']; ?>
">
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
/<?php echo $this->_tpl_vars['actionHandler']; ?>
/<?php echo $this->_tpl_vars['articleId']; ?>
?searchInitial=<?php echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp)); ?>
"><?php if (chr ( $this->_sections['letters']['index']+$this->_tpl_vars['start'] ) == $this->_tpl_vars['searchInitial']): ?><strong><?php echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp)); ?>
</strong><?php else:  echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp));  endif; ?></a> <?php endfor; endif; ?><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/<?php echo $this->_tpl_vars['actionHandler']; ?>
/<?php echo $this->_tpl_vars['articleId']; ?>
"><?php if ($this->_tpl_vars['searchInitial'] == ''): ?><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this);?>
</strong><?php else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this); endif; ?></a></p>

<table width="100%" class="listing">
<tr><td colspan="5" class="headseparator">&nbsp;</td></tr>
<tr class="heading" valign="bottom">
	<td width="30%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.name"), $this);?>
</td>
	<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.completed"), $this);?>
</td>
	<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.active"), $this);?>
</td>
	<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submissions.lastAssigned"), $this);?>
</td>
	<td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
</tr>
<tr><td colspan="5" class="headseparator">&nbsp;</td></tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'users','item' => 'user')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start();  $this->assign('userid', $this->_tpl_vars['user']->getUserId());  $this->assign('stats', $this->_tpl_vars['statistics'][$this->_tpl_vars['userid']]); ?>
<tr valign="top">
	<td><a class="action" href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/userProfile/<?php echo $this->_tpl_vars['userid']; ?>
"><?php echo $this->_tpl_vars['user']->getFullName(true); ?>
</a></td>
	<td><?php if ($this->_tpl_vars['stats']['complete']):  echo $this->_tpl_vars['stats']['complete'];  else: ?>0<?php endif; ?></td>
	<td><?php if ($this->_tpl_vars['stats']['incomplete']):  echo $this->_tpl_vars['stats']['incomplete'];  else: ?>0<?php endif; ?></td>
	<td><?php if ($this->_tpl_vars['stats']['last_assigned']):  echo ((is_array($_tmp=$this->_tpl_vars['stats']['last_assigned'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort']));  else: ?>&mdash;<?php endif; ?></td>
	<td>
		<?php if ($this->_tpl_vars['currentUser'] != $this->_tpl_vars['userid']): ?>
			<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/<?php echo $this->_tpl_vars['actionHandler']; ?>
/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['userid']; ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.assign"), $this);?>
</a>
		<?php else: ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.alreadyAssigned"), $this);?>
</a>
		<?php endif; ?>
	</td>
</tr>
<tr><td colspan="5" class="<?php if ($this->_tpl_vars['users']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td></tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['users']->wasEmpty()): ?>
	<tr>
	<td colspan="5" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.noneEnrolled"), $this);?>
</td>
	</tr>
	<tr><td colspan="5" class="endseparator">&nbsp;</td></tr>
<?php else: ?>
	<tr>
		<td colspan="2" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['users']), $this);?>
</td>
		<td colspan="3" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'users','iterator' => $this->_tpl_vars['users']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>
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