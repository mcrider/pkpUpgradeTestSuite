<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:32
         compiled from about/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'about/index.tpl', 15, false),array('function', 'url', 'about/index.tpl', 18, false),array('function', 'call_hook', 'about/index.tpl', 21, false),array('modifier', 'escape', 'about/index.tpl', 51, false),)), $this); ?>

<?php $this->assign('pageTitle', "about.aboutTheJournal");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.people"), $this);?>
</h3>
<ul class="plain">
	<?php if (! ( empty ( $this->_tpl_vars['journalSettings']['mailingAddress'] ) && empty ( $this->_tpl_vars['journalSettings']['contactName'] ) && empty ( $this->_tpl_vars['journalSettings']['contactAffiliation'] ) && empty ( $this->_tpl_vars['journalSettings']['contactMailingAddress'] ) && empty ( $this->_tpl_vars['journalSettings']['contactPhone'] ) && empty ( $this->_tpl_vars['journalSettings']['contactFax'] ) && empty ( $this->_tpl_vars['journalSettings']['contactEmail'] ) && empty ( $this->_tpl_vars['journalSettings']['supportName'] ) && empty ( $this->_tpl_vars['journalSettings']['supportPhone'] ) && empty ( $this->_tpl_vars['journalSettings']['supportEmail'] ) )): ?>
		<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'contact'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact"), $this);?>
</a></li>
	<?php endif; ?>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialTeam'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.editorialTeam"), $this);?>
</a></li>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::About::Index::People"), $this);?>

</ul>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.policies"), $this);?>
</h3>
<ul class="plain">
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['focusScopeDesc'] )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'focusAndScope'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.focusAndScope"), $this);?>
</a></li><?php endif; ?>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'sectionPolicies'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.sectionPolicies"), $this);?>
</a></li>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['reviewPolicy'] )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'peerReviewProcess'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.peerReviewProcess"), $this);?>
</a></li><?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['pubFreqPolicy'] )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'publicationFrequency'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.publicationFrequency"), $this);?>
</a></li><?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['openAccessPolicy'] )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'openAccessPolicy'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.openAccessPolicy"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['journalSettings']['enableLockss'] && ! empty ( $this->_tpl_vars['journalSettings']['lockssLicense'] )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'archiving'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.archiving"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['enableSubscriptions']): ?>
		<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptions'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.subscriptions"), $this);?>
</a></li>
	<?php endif; ?>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::About::Index::Policies"), $this);?>

</ul>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.submissions"), $this);?>
</h3>
<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissions','anchor' => 'onlineSubmissions'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions"), $this);?>
</a></li>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['authorGuidelines'] )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissions','anchor' => 'authorGuidelines'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorGuidelines"), $this);?>
</a></li><?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['copyrightNotice'] )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissions','anchor' => 'copyrightNotice'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.copyrightNotice"), $this);?>
</a></li><?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['privacyStatement'] )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissions','anchor' => 'privacyStatement'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.privacyStatement"), $this);?>
</a></li><?php endif; ?>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::About::Index::Submissions"), $this);?>

</ul>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.other"), $this);?>
</h3>
<ul class="plain">
	<?php if (! ( empty ( $this->_tpl_vars['journalSettings']['publisher'] ) && empty ( $this->_tpl_vars['journalSettings']['contributorNote'] ) && empty ( $this->_tpl_vars['journalSettings']['contributors'] ) && empty ( $this->_tpl_vars['journalSettings']['sponsorNote'] ) && empty ( $this->_tpl_vars['journalSettings']['sponsors'] ) )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'journalSponsorship'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.journalSponsorship"), $this);?>
</a></li><?php endif; ?>
	<?php $_from = $this->_tpl_vars['customAboutItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['customAboutItem']):
?>
		<?php if ($this->_tpl_vars['customAboutItem']['title'] != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => "custom".($this->_tpl_vars['key'])), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['customAboutItem']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></li><?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'siteMap'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.siteMap"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'aboutThisPublishingSystem'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.aboutThisPublishingSystem"), $this);?>
</a></li>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::About::Index::Other"), $this);?>

</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>