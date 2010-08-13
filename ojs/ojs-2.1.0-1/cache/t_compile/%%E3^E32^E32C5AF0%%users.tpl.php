<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:45
         compiled from subscription/users.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'ord', 'subscription/users.tpl', 13, false),array('modifier', 'escape', 'subscription/users.tpl', 36, false),array('modifier', 'chr', 'subscription/users.tpl', 39, false),array('modifier', 'to_array', 'subscription/users.tpl', 57, false),array('modifier', 'assign', 'subscription/users.tpl', 57, false),array('modifier', 'truncate', 'subscription/users.tpl', 58, false),array('function', 'translate', 'subscription/users.tpl', 24, false),array('function', 'url', 'subscription/users.tpl', 28, false),array('function', 'html_options_translate', 'subscription/users.tpl', 30, false),array('function', 'icon', 'subscription/users.tpl', 58, false),array('function', 'page_info', 'subscription/users.tpl', 73, false),array('function', 'page_links', 'subscription/users.tpl', 74, false),array('block', 'iterate', 'subscription/users.tpl', 50, false),)), $this); ?>

<?php $this->assign('start', ((is_array($_tmp='A')) ? $this->_run_mod_handler('ord', true, $_tmp) : ord($_tmp))); ?>

<?php if ($this->_tpl_vars['subscriptionId']): ?>
	<?php $this->assign('pageTitle', "manager.subscriptions.selectSubscriber");  else: ?>
	<?php $this->assign('pageTitle', "manager.subscriptions.create");  endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['subscriptionCreated']): ?>
<br/><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptions.subscriptionCreatedSuccessfully"), $this);?>
<br/>
<?php endif; ?>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptions.selectSubscriber.desc"), $this);?>
</p>
<form method="post" name="submit" action="<?php if ($this->_tpl_vars['subscriptionId']):  echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'selectSubscriber','subscriptionId' => $this->_tpl_vars['subscriptionId']), $this); else:  echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'selectSubscriber','subscriptionId' => $this->_tpl_vars['subscriptionId']), $this); endif; ?>">
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
?><a href="<?php if ($this->_tpl_vars['subscriptionId']):  echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'selectSubscriber','searchInitial' => ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp)),'subscriptionId' => $this->_tpl_vars['subscriptionId']), $this); else:  echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'selectSubscriber','searchInitial' => ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp))), $this); endif; ?>"><?php if (chr ( $this->_sections['letters']['index']+$this->_tpl_vars['start'] ) == $this->_tpl_vars['searchInitial']): ?><strong><?php echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp)); ?>
</strong><?php else:  echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp));  endif; ?></a> <?php endfor; endif; ?><a href="<?php if ($this->_tpl_vars['subscriptionId']):  echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'selectSubscriber','subscriptionId' => $this->_tpl_vars['subscriptionId']), $this); else:  echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'selectSubscriber'), $this); endif; ?>"><?php if ($this->_tpl_vars['searchInitial'] == ''): ?><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this);?>
</strong><?php else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this); endif; ?></a></p>

<table width="100%" class="listing">
<tr><td colspan="4" class="headseparator">&nbsp;</td></tr>
<tr class="heading" valign="bottom">
	<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.username"), $this);?>
</td>
	<td width="35%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.name"), $this);?>
</td>
	<td width="30%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.email"), $this);?>
</td>
	<td width="10%" align="right"></td>
</tr>
<tr><td colspan="4" class="headseparator">&nbsp;</td></tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'users','item' => 'user')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  $this->assign('userid', $this->_tpl_vars['user']->getUserId()); ?>
<tr valign="top">
	<td><?php if ($this->_tpl_vars['isJournalManager']): ?><a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'userProfile','path' => $this->_tpl_vars['userid']), $this);?>
"><?php endif;  echo $this->_tpl_vars['user']->getUsername();  if ($this->_tpl_vars['isJournalManager']): ?></a><?php endif; ?></td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFullName(true))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	<td class="nowrap">
		<?php $this->assign('emailString', ($this->_tpl_vars['user']->getFullName())." <".($this->_tpl_vars['user']->getEmail()).">"); ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email','to' => ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('to_array', true, $_tmp) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

		<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['user']->getEmail())) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...") : smarty_modifier_truncate($_tmp, 20, "...")))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&nbsp;<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

	</td>
	<td align="right" class="nowrap">
		<a href="<?php if ($this->_tpl_vars['subscriptionId']):  echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editSubscription','path' => $this->_tpl_vars['subscriptionId'],'userId' => $this->_tpl_vars['user']->getUserId()), $this); else:  echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createSubscription','userId' => $this->_tpl_vars['user']->getUserId()), $this); endif; ?>" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptions.subscribe"), $this);?>
</a>
	</td>
</tr>
<tr><td colspan="4" class="<?php if ($this->_tpl_vars['users']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td></tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['users']->wasEmpty()): ?>
	<tr>
	<td colspan="4" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
	<tr><td colspan="4" class="endseparator">&nbsp;</td></tr>
<?php else: ?>
	<tr>
		<td colspan="3" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['users']), $this);?>
</td>
		<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'users','iterator' => $this->_tpl_vars['users'],'searchField' => $this->_tpl_vars['searchField'],'searchMatch' => $this->_tpl_vars['searchMatch'],'search' => $this->_tpl_vars['search'],'dateFromDay' => $this->_tpl_vars['dateFromDay'],'dateFromYear' => $this->_tpl_vars['dateFromYear'],'dateFromMonth' => $this->_tpl_vars['dateFromMonth'],'dateToDay' => $this->_tpl_vars['dateToDay'],'dateToYear' => $this->_tpl_vars['dateToYear'],'dateToMonth' => $this->_tpl_vars['dateToMonth']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>