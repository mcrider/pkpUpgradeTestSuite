<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:39
         compiled from user/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'user/index.tpl', 17, false),array('function', 'url', 'user/index.tpl', 20, false),array('function', 'call_hook', 'user/index.tpl', 23, false),array('modifier', 'escape', 'user/index.tpl', 20, false),)), $this); ?>

<?php $this->assign('pageTitle', "user.userHome");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['showAllJournals']): ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.myJournals"), $this);?>
</h3>

<?php if ($this->_tpl_vars['isSiteAdmin']): ?>
<h4><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['siteTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
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
<h4><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'user'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></h4>
<ul class="plain">
<?php $this->assign('journalId', $this->_tpl_vars['journal']->getJournalId());  unset($this->_sections['role']);
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
	<?php endif;  endfor; endif; ?>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::User::Index::Journal",'journal' => $this->_tpl_vars['journal']), $this);?>

</ul>
<?php endforeach; endif; unset($_from); ?>

<?php else: ?>
<h3><?php echo $this->_tpl_vars['userJournal']->getTitle(); ?>
</h3>
<ul class="plain">
<?php if ($this->_tpl_vars['isSiteAdmin'] && ! $this->_tpl_vars['hasOtherJournals']): ?>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index','page' => $this->_tpl_vars['isSiteAdmin']->getRolePath()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['isSiteAdmin']->getRoleName()), $this);?>
</a></li>
<?php endif;  $this->assign('journalId', $this->_tpl_vars['userJournal']->getJournalId());  unset($this->_sections['role']);
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
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['userJournal']->getPath(),'page' => $this->_tpl_vars['userRoles'][$this->_tpl_vars['journalId']][$this->_sections['role']['index']]->getRolePath()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['userRoles'][$this->_tpl_vars['journalId']][$this->_sections['role']['index']]->getRoleName()), $this);?>
</a></li>
	<?php endif;  endfor; endif; ?>
</ul>
<?php endif; ?>

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
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'changePassword'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.changeMyPassword"), $this);?>
</a></li>
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