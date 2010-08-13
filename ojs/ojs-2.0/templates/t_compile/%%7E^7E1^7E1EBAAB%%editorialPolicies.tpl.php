<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:46
         compiled from about/editorialPolicies.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'about/editorialPolicies.tpl', 20, false),array('modifier', 'nl2br', 'about/editorialPolicies.tpl', 33, false),)), $this); ?>

<?php $this->assign('pageTitle', "about.editorialPolicies");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

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
	<?php $_from = $this->_tpl_vars['journalSettings']['customAboutItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['customAboutItem']):
?>
		<?php if (! empty ( $this->_tpl_vars['customAboutItem']['title'] )): ?>
			<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/editorialPolicies#custom<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['customAboutItem']['title']; ?>
</a>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
</ul>

<a name="focusAndScope"></a><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.focusAndScope"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['focusScopeDesc'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>

<a name="sectionPolicies"></a><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.sectionPolicies"), $this);?>
</h3>
<?php $_from = $this->_tpl_vars['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['section']):
?>
	<h4><?php echo $this->_tpl_vars['section']->getTitle(); ?>
</h4>
	<?php if (strlen ( $this->_tpl_vars['section']->getPolicy() ) > 0): ?>
		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['section']->getPolicy())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
	<?php endif; ?>
	<form>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editors"), $this);?>


		<ul class="plain">
		<?php $_from = $this->_tpl_vars['sectionEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['sectionSectionEditors']):
?>
			<?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['section']->getSectionId()): ?>
				<?php $_from = $this->_tpl_vars['sectionSectionEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sectionEditor']):
?>
					<li><?php echo $this->_tpl_vars['sectionEditor']->getFirstName(); ?>
 <?php echo $this->_tpl_vars['sectionEditor']->getLastName();  if (strlen ( $this->_tpl_vars['sectionEditor']->getAffiliation() ) > 0): ?>, <?php echo $this->_tpl_vars['sectionEditor']->getAffiliation();  endif; ?></li>
				<?php endforeach; endif; unset($_from); ?>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		</ul>

		<p><input type="checkbox" disabled="disabled"<?php if ($this->_tpl_vars['section']->getMetaIndexed()): ?> checked="checked"<?php endif; ?>/>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.openSubmissions"), $this);?>
</p>
	</form>
<?php endforeach; endif; unset($_from); ?>

<div class="separator">&nbsp;</div>

<a name="peerReviewProcess"></a><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.peerReviewProcess"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['reviewPolicy'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>

<a name="publicationFrequency"></a><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.publicationFrequency"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['pubFreqPolicy'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>

<a name="openAccessPolicy"></a><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.openAccessPolicy"), $this);?>
</h3>
<p><?php echo $this->_tpl_vars['journalSettings']['openAccessPolicy']; ?>
</p>

<?php $_from = $this->_tpl_vars['journalSettings']['customAboutItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['customAboutItem']):
?>
	<?php if (! empty ( $this->_tpl_vars['customAboutItem']['title'] )): ?>
		<div class="separator">&nbsp;</div>

		<a name="custom<?php echo $this->_tpl_vars['key']; ?>
"></a><h3><?php echo $this->_tpl_vars['customAboutItem']['title']; ?>
</h3>
		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['customAboutItem']['content'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
	<?php endif;  endforeach; endif; unset($_from); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>