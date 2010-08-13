<?php /* Smarty version 2.6.9, created on 2005-07-08 06:01:56
         compiled from about/siteMap.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'about/siteMap.tpl', 19, false),array('modifier', 'count', 'about/siteMap.tpl', 21, false),)), $this); ?>

<?php $this->assign('pageTitle', "about.siteMap");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="plain">
<li>
	<a href="<?php echo $this->_tpl_vars['indexUrl']; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.home"), $this);?>
</a><br/>
	<ul class="plain">
	<?php if (count($this->_tpl_vars['journals']) > 1 && ! $this->_tpl_vars['currentJournal']): ?>
		<?php $_from = $this->_tpl_vars['journals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['journal']):
?>
			<li><a href="<?php echo $this->_tpl_vars['indexUrl']; ?>
/<?php echo $this->_tpl_vars['journal']->getPath(); ?>
/about/siteMap"><?php echo $this->_tpl_vars['journal']->getTitle(); ?>
</a></li>
		<?php endforeach; endif; unset($_from); ?>
	<?php else: ?>
		<?php if (count($this->_tpl_vars['journals']) == 1): ?>
			<?php $this->assign('currentJournal', $this->_tpl_vars['journals'][0]); ?>
		<?php else: ?>
			<li><a href="<?php echo $this->_tpl_vars['indexUrl']; ?>
/index/about/siteMap"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "journal.journals"), $this);?>
</a><br/>
			<ul class="plain">
			<?php $this->assign('onlyOneJournal', 1); ?>
		<?php endif; ?>

		<?php $this->assign('jBase', ($this->_tpl_vars['indexUrl'])."/".($this->_tpl_vars['currentJournal']->getPath())); ?>
		<li><a href="<?php echo $this->_tpl_vars['jBase']; ?>
"><?php echo $this->_tpl_vars['currentJournal']->getTitle(); ?>
</a><br/>
			<ul class="plain">
				<li><a href="<?php echo $this->_tpl_vars['jBase']; ?>
/about"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.about"), $this);?>
</a></li>
				<li>
					<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
						<li><a href="<?php echo $this->_tpl_vars['jBase']; ?>
/user"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.userHome"), $this);?>
</a></li>
					<?php else: ?>
						<li><a href="<?php echo $this->_tpl_vars['jBase']; ?>
/login"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.login"), $this);?>
</a></li>
						<li><a href="<?php echo $this->_tpl_vars['jBase']; ?>
/register"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.register"), $this);?>
</a></li>
					<?php endif; ?>
					<li><a href="<?php echo $this->_tpl_vars['jBase']; ?>
/search"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.search"), $this);?>
</a></li>
					<li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.issues"), $this);?>
<br/>
						<ul class="plain">
							<li><a href="<?php echo $this->_tpl_vars['jBase']; ?>
/issue/current"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "journal.currentIssue"), $this);?>
</a></li>
							<li><a href="<?php echo $this->_tpl_vars['jBase']; ?>
/issue/archive"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.archives"), $this);?>
</a></li>
						</ul>
					</li>
				</li>
				<?php $_from = $this->_tpl_vars['currentJournal']->getSetting('navItems'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['navItem']):
?>
					<li><a href="<?php if ($this->_tpl_vars['navItem']['isAbsolute']):  echo $this->_tpl_vars['navItem']['url'];  else:  echo $this->_tpl_vars['pageUrl'];  echo $this->_tpl_vars['navItem']['url'];  endif; ?>"><?php if ($this->_tpl_vars['navItem']['isLiteral']):  echo $this->_tpl_vars['navItem']['name'];  else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['navItem']['name']), $this); endif; ?></a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</li>	
		<?php if ($this->_tpl_vars['onlyOneJournal']): ?></ul></li><?php endif; ?>

	<?php endif; ?>
	</ul>
</li>
<li><a href="http://pkp.sfu.ca/ojs"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.openJournalSystems"), $this);?>
</a></li>
<li><a href="javascript:openHelp('<?php echo $this->_tpl_vars['indexUrl']; ?>
/index/help')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.help"), $this);?>
</a></li>
</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>