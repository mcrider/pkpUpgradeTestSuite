<?php /* Smarty version 2.6.18, created on 2009-04-09 15:34:09
         compiled from about/siteMap.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'about/siteMap.tpl', 18, false),array('function', 'translate', 'about/siteMap.tpl', 18, false),array('modifier', 'count', 'about/siteMap.tpl', 20, false),array('modifier', 'escape', 'about/siteMap.tpl', 22, false),array('modifier', 'assign', 'about/siteMap.tpl', 43, false),)), $this); ?>
<?php $this->assign('pageTitle', "about.siteMap"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="plain">
<li>
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index','page' => 'index','op' => 'index'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.home"), $this);?>
</a><br/>
	<ul class="plain">
	<?php if (count($this->_tpl_vars['journals']) > 1 && ! $this->_tpl_vars['currentJournal']): ?>
		<?php $_from = $this->_tpl_vars['journals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['journal']):
?>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => ($this->_tpl_vars['journal']->getPath()),'page' => 'about','op' => 'siteMap'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getJournalTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></li>
		<?php endforeach; endif; unset($_from); ?>
	<?php else: ?>
		<?php if (count($this->_tpl_vars['journals']) == 1): ?>
			<?php $this->assign('currentJournal', $this->_tpl_vars['journals'][0]); ?>
		<?php else: ?>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index','page' => 'about','op' => 'siteMap'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "journal.journals"), $this);?>
</a><br/>
			<ul class="plain">
			<?php $this->assign('onlyOneJournal', 1); ?>
		<?php endif; ?>

		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => ($this->_tpl_vars['currentJournal']->getPath())), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getJournalTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><br/>
			<ul class="plain">
				<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => ($this->_tpl_vars['currentJournal']->getPath()),'page' => 'about'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.about"), $this);?>
</a></li>
				<li>
					<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
						<ul class="plain">
							<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => ($this->_tpl_vars['currentJournal']->getPath()),'page' => 'user'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.userHome"), $this);?>
</a><br/>
								<ul class="plain">
									<?php $this->assign('currentJournalId', $this->_tpl_vars['currentJournal']->getJournalId()); ?>
									<?php $_from = $this->_tpl_vars['rolesByJournal'][$this->_tpl_vars['currentJournalId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['role']):
?>
									<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['role']->getRoleName()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'roleName') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'roleName'));?>

										<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => ($this->_tpl_vars['currentJournal']->getPath()),'page' => ($this->_tpl_vars['role']->getRolePath())), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['roleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></li>
									<?php endforeach; endif; unset($_from); ?>
								</ul>
							</li>
						</ul>
					<?php else: ?>
						<ul class="plain">
							<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => ($this->_tpl_vars['currentJournal']->getPath()),'page' => 'login'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.login"), $this);?>
</a></li>
							<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => ($this->_tpl_vars['currentJournal']->getPath()),'page' => 'register'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.register"), $this);?>
</a></li>
						</ul>
					<?php endif; ?>
				</li>
				<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => ($this->_tpl_vars['currentJournal']->getPath()),'page' => 'search'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.search"), $this);?>
</a><br />
					<ul class="plain">
						<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => ($this->_tpl_vars['currentJournal']->getPath()),'page' => 'search','op' => 'authors'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.browseByAuthor"), $this);?>
</a></li>
						<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => ($this->_tpl_vars['currentJournal']->getPath()),'page' => 'search','op' => 'titles'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.browseByTitle"), $this);?>
</a></li>
					</ul>
				</li>
				<li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.issues"), $this);?>
<br/>
					<ul class="plain">
						<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => ($this->_tpl_vars['currentJournal']->getPath()),'page' => 'issue','op' => 'current'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "journal.currentIssue"), $this);?>
</a></li>
						<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => ($this->_tpl_vars['currentJournal']->getPath()),'page' => 'issue','op' => 'archive'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.archives"), $this);?>
</a></li>
					</ul>
				</li>
				<?php $_from = $this->_tpl_vars['navMenuItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['navItem']):
?>
					<?php if ($this->_tpl_vars['navItem']['url'] != '' && $this->_tpl_vars['navItem']['name'] != ''): ?><li><a href="<?php if ($this->_tpl_vars['navItem']['isAbsolute']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php else: ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => ""), $this);?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>"><?php if ($this->_tpl_vars['navItem']['isLiteral']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ((is_array($_tmp=$this->_tpl_vars['navItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>
<?php endif; ?></a></li><?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</li>	
		<?php if ($this->_tpl_vars['onlyOneJournal']): ?></ul></li><?php endif; ?>

	<?php endif; ?>
	</ul>
</li>
<?php if ($this->_tpl_vars['isSiteAdmin']): ?>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index','page' => $this->_tpl_vars['isSiteAdmin']->getRolePath()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['isSiteAdmin']->getRoleName()), $this);?>
</a></li>
<?php endif; ?>
<li><a href="http://pkp.sfu.ca/ojs"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.openJournalSystems"), $this);?>
</a></li>
<li><a href="javascript:openHelp('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index','page' => 'help'), $this);?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.help"), $this);?>
</a></li>
</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>