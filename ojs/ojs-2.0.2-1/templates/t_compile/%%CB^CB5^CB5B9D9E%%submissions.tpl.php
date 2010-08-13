<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:11
         compiled from about/submissions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'about/submissions.tpl', 16, false),array('modifier', 'escape', 'about/submissions.tpl', 24, false),array('modifier', 'nl2br', 'about/submissions.tpl', 37, false),)), $this); ?>

<?php $this->assign('pageTitle', "about.submissions");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/submissions#onlineSubmissions"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions"), $this);?>
</a></li>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['authorGuidelines'] )): ?><li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/submissions#authorGuidelines"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorGuidelines"), $this);?>
</a></li><?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['copyrightNotice'] )): ?><li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/submissions#copyrightNotice"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.copyrightNotice"), $this);?>
</a></li><?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['privacyStatement'] )): ?><li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/submissions#privacyStatement"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.privacyStatement"), $this);?>
</a></li><?php endif; ?>
</ul>

<a name="onlineSubmissions"></a><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions"), $this);?>
</h3>
<p>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.haveAccount",'journalTitle' => ((is_array($_tmp=$this->_tpl_vars['siteTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))), $this);?>
<br />
	<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/login" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.login"), $this);?>
</a>
</p>
<p>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.needAccount"), $this);?>
<br />
	<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/user/register" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.registration"), $this);?>
</a>
</p>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.registrationRequired"), $this);?>
</p>

<div class="separator">&nbsp;</div>

<?php if (! empty ( $this->_tpl_vars['journalSettings']['authorGuidelines'] )): ?>
<a name="authorGuidelines"></a><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorGuidelines"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['authorGuidelines'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
<?php endif; ?>

<a name="submissionPreparationChecklist"></a><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.submissionPreparationChecklist"), $this);?>
</h3>
<ol>
	<?php $_from = $this->_tpl_vars['journalSettings']['submissionChecklist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['checklistItem']):
?>
		<li><?php echo ((is_array($_tmp=$this->_tpl_vars['checklistItem']['content'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</li>	
	<?php endforeach; endif; unset($_from); ?>
</ol>

<div class="separator">&nbsp;</div>

<?php if (! empty ( $this->_tpl_vars['journalSettings']['copyrightNotice'] )): ?>
<a name="copyrightNotice"></a><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.copyrightNotice"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['copyrightNotice'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['journalSettings']['privacyStatement'] )): ?><a name="privacyStatement"></a><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.privacyStatement"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['privacyStatement'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>