<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:46
         compiled from about/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'about/index.tpl', 15, false),)), $this); ?>

<?php $this->assign('pageTitle', "about.aboutTheJournal");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.people"), $this);?>
</h3>
<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/contact"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/editorialTeam"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.editorialTeam"), $this);?>
</a></li>
</ul>

<br />

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.policies"), $this);?>
</h3>
<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/editorialPolicies#focusAndScope"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.focusAndScope"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/editorialPolicies#sectionPolicies"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.sectionPolicies"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/editorialPolicies#peerReviewProcess"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.peerReviewProcess"), $this);?>
</a></li>	
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/editorialPolicies#publicationFrequency"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.publicationFrequency"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/editorialPolicies#openAccessPolicy"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.openAccessPolicy"), $this);?>
</a></li>
	<?php if ($this->_tpl_vars['enableSubscriptions']): ?>	
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/subscriptions"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.subscriptions"), $this);?>
</a></li>
	<?php endif; ?>
</ul>

<br />

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.submissions"), $this);?>
</h3>
<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/submissions#onlineSubmissions"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/submissions#authorGuidelines"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorGuidelines"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/submissions#copyrightNotice"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.copyrightNotice"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/submissions#privacyStatement"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.privacyStatement"), $this);?>
</a></li>
</ul>

<br />

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.other"), $this);?>
</h3>
<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/journalSponsorship"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.journalSponsorship"), $this);?>
</a></li>
	<?php $_from = $this->_tpl_vars['customAboutItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['customAboutItem']):
?>
		<?php if ($this->_tpl_vars['customAboutItem']['title'] != ''): ?><li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/editorialPolicies#custom<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['customAboutItem']['title']; ?>
</a></li><?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/aboutThisPublishingSystem"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.aboutThisPublishingSystem"), $this);?>
</a></li>
</ul>

<br />


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>