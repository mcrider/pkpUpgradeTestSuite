<?php /* Smarty version 2.6.18, created on 2010-08-12 15:59:08
         compiled from user/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'user/index.tpl', 16, false),array('function', 'url', 'user/index.tpl', 20, false),array('function', 'call_hook', 'user/index.tpl', 23, false),array('modifier', 'escape', 'user/index.tpl', 20, false),array('modifier', 'assign', 'user/index.tpl', 67, false),array('modifier', 'date_format', 'user/index.tpl', 110, false),)), $this); ?>
<?php $this->assign('pageTitle', "user.userHome"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['showAllJournals']): ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.myJournals"), $this);?>
</h3>

<?php if ($this->_tpl_vars['isSiteAdmin']): ?>
	<?php $this->assign('hasRole', 1); ?>
	<h4><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['siteTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></h4>
	<ul class="plain">
		<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index','page' => $this->_tpl_vars['isSiteAdmin']->getRolePath()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['isSiteAdmin']->getRoleName()), $this);?>
</a></li>
		<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::User::Index::Site"), $this);?>

	</ul>
<?php endif; ?>

<?php $_from = $this->_tpl_vars['userJournals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['journal']):
?>
	<?php $this->assign('hasRole', 1); ?>
	<h4><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'user'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getJournalTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></h4>
	<ul class="plain">
		<?php $this->assign('journalId', $this->_tpl_vars['journal']->getJournalId()); ?>
		<?php unset($this->_sections['role']);
$this->_sections['role']['name'] = 'role';
$this->_sections['role']['loop'] = is_array($_loop=$this->_tpl_vars['userRoles'][$this->_tpl_vars['journalId']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['role']['show'] = true;
$this->_sections['role']['max'] = $this->_sections['role']['loop'];
$this->_sections['role']['step'] = 1;
$this->_sections['role']['start'] = $this->_sections['role']['step'] > 0 ? 0 : $this->_sections['role']['loop']-1;
if ($this->_sections['role']['show']) {
    $this->_sections['role']['total'] = $this->_sections['role']['loop'];
    if ($this->_sections['role']['total'] == 0)
        $this->_sections['role']['show'] = false;
} else
    $this->_sections['role']['total'] = 0;
if ($this->_sections['role']['show']):

            for ($this->_sections['role']['index'] = $this->_sections['role']['start'], $this->_sections['role']['iteration'] = 1;
                 $this->_sections['role']['iteration'] <= $this->_sections['role']['total'];
                 $this->_sections['role']['index'] += $this->_sections['role']['step'], $this->_sections['role']['iteration']++):
$this->_sections['role']['rownum'] = $this->_sections['role']['iteration'];
$this->_sections['role']['index_prev'] = $this->_sections['role']['index'] - $this->_sections['role']['step'];
$this->_sections['role']['index_next'] = $this->_sections['role']['index'] + $this->_sections['role']['step'];
$this->_sections['role']['first']      = ($this->_sections['role']['iteration'] == 1);
$this->_sections['role']['last']       = ($this->_sections['role']['iteration'] == $this->_sections['role']['total']);
?>
			<?php if ($this->_tpl_vars['userRoles'][$this->_tpl_vars['journalId']][$this->_sections['role']['index']]->getRolePath() != 'reader'): ?>
				<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => $this->_tpl_vars['userRoles'][$this->_tpl_vars['journalId']][$this->_sections['role']['index']]->getRolePath()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['userRoles'][$this->_tpl_vars['journalId']][$this->_sections['role']['index']]->getRoleName()), $this);?>
</a></li>
			<?php endif; ?>
		<?php endfor; endif; ?>
		<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::User::Index::Journal",'journal' => $this->_tpl_vars['journal']), $this);?>

	</ul>
<?php endforeach; endif; unset($_from); ?>

<?php else: ?>
<h3><?php echo $this->_tpl_vars['userJournal']->getJournalTitle(); ?>
</h3>
<ul class="plain">
	<?php if ($this->_tpl_vars['isSiteAdmin'] && ! $this->_tpl_vars['hasOtherJournals']): ?>
		<?php $this->assign('hasRole', 1); ?>
		<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index','page' => $this->_tpl_vars['isSiteAdmin']->getRolePath()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['isSiteAdmin']->getRoleName()), $this);?>
</a></li>
	<?php endif; ?>

	<?php $this->assign('journalId', $this->_tpl_vars['userJournal']->getJournalId()); ?>
	<?php unset($this->_sections['role']);
$this->_sections['role']['name'] = 'role';
$this->_sections['role']['loop'] = is_array($_loop=$this->_tpl_vars['userRoles'][$this->_tpl_vars['journalId']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['role']['show'] = true;
$this->_sections['role']['max'] = $this->_sections['role']['loop'];
$this->_sections['role']['step'] = 1;
$this->_sections['role']['start'] = $this->_sections['role']['step'] > 0 ? 0 : $this->_sections['role']['loop']-1;
if ($this->_sections['role']['show']) {
    $this->_sections['role']['total'] = $this->_sections['role']['loop'];
    if ($this->_sections['role']['total'] == 0)
        $this->_sections['role']['show'] = false;
} else
    $this->_sections['role']['total'] = 0;
if ($this->_sections['role']['show']):

            for ($this->_sections['role']['index'] = $this->_sections['role']['start'], $this->_sections['role']['iteration'] = 1;
                 $this->_sections['role']['iteration'] <= $this->_sections['role']['total'];
                 $this->_sections['role']['index'] += $this->_sections['role']['step'], $this->_sections['role']['iteration']++):
$this->_sections['role']['rownum'] = $this->_sections['role']['iteration'];
$this->_sections['role']['index_prev'] = $this->_sections['role']['index'] - $this->_sections['role']['step'];
$this->_sections['role']['index_next'] = $this->_sections['role']['index'] + $this->_sections['role']['step'];
$this->_sections['role']['first']      = ($this->_sections['role']['iteration'] == 1);
$this->_sections['role']['last']       = ($this->_sections['role']['iteration'] == $this->_sections['role']['total']);
?>
		<?php $this->assign('hasRole', 1); ?>
		<?php if ($this->_tpl_vars['userRoles'][$this->_tpl_vars['journalId']][$this->_sections['role']['index']]->getRolePath() != 'reader'): ?>
			<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['userJournal']->getPath(),'page' => $this->_tpl_vars['userRoles'][$this->_tpl_vars['journalId']][$this->_sections['role']['index']]->getRolePath()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['userRoles'][$this->_tpl_vars['journalId']][$this->_sections['role']['index']]->getRoleName()), $this);?>
</a></li>
		<?php endif; ?>
	<?php endfor; endif; ?>
</ul>
<?php endif; ?>
<?php if (! $this->_tpl_vars['hasRole']): ?>
	<?php if ($this->_tpl_vars['currentJournal']): ?>
		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.noRoles.noRolesForJournal"), $this);?>
</p>
		<ul class="plain">
			<li>
				&#187;
				<?php if ($this->_tpl_vars['allowRegAuthor']): ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'author','op' => 'submit'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'submitUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'submitUrl'));?>

					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'become','path' => 'author','source' => $this->_tpl_vars['submitUrl']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.noRoles.submitArticle"), $this);?>
</a>
				<?php else: ?>					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.noRoles.submitArticleRegClosed"), $this);?>

				<?php endif; ?>			</li>
			<li>
				&#187;
				<?php if ($this->_tpl_vars['allowRegReviewer']): ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'index'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'userHomeUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'userHomeUrl'));?>

					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'become','path' => 'reviewer','source' => $this->_tpl_vars['userHomeUrl']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.noRoles.regReviewer"), $this);?>
</a>
				<?php else: ?>					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.noRoles.regReviewerClosed"), $this);?>

				<?php endif; ?>			</li>
		</ul>
	<?php else: ?>		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.noRoles.chooseJournal"), $this);?>
</p>
		<ul class="plain">
			<?php $_from = $this->_tpl_vars['allJournals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['thisJournal']):
?>
				<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['thisJournal']->getPath(),'page' => 'user','op' => 'index'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['thisJournal']->getJournalTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
	<?php endif; ?><?php endif; ?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.myAccount"), $this);?>
</h3>
<ul class="plain">
	<?php if ($this->_tpl_vars['hasOtherJournals']): ?>
		<?php if ($this->_tpl_vars['showAllJournals']): ?>
			<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index','page' => 'user','op' => 'register'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.registerForOtherJournals"), $this);?>
</a></li>
		<?php else: ?>
			<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index','page' => 'user'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.showAllJournals"), $this);?>
</a></li>
		<?php endif; ?>
	<?php endif; ?>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'profile'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.editMyProfile"), $this);?>
</a></li>

	<?php if (! $this->_tpl_vars['implicitAuth']): ?>
		<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'changePassword'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.changeMyPassword"), $this);?>
</a></li>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['userJournal']): ?>
		<?php if ($this->_tpl_vars['journalPaymentsEnabled'] && $this->_tpl_vars['subscriptionEnabled'] && $this->_tpl_vars['userHasSubscription']): ?>
			<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'payRenewSubscription'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "payment.subscription.renew"), $this);?>
</a> (<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "payment.subscription.expires"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionEndDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
)</li>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['journalPaymentsEnabled'] && $this->_tpl_vars['membershipEnabled']): ?>
			<?php if ($this->_tpl_vars['dateEndMembership']): ?>
				<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'payMembership'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "payment.membership.renewMembership"), $this);?>
</a> (<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "payment.membership.ends"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['dateEndMembership'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
)</li>
			<?php else: ?>
				<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'payMembership'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "payment.membership.buyMembership"), $this);?>
</a></li>		
			<?php endif; ?>
		<?php endif; ?>	<?php endif; ?>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'signOut'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.logOut"), $this);?>
</a></li>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Admin::Index::MyAccount"), $this);?>

</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>