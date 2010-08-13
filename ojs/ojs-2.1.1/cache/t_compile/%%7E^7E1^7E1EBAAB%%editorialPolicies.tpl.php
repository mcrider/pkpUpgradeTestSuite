<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:25
         compiled from about/editorialPolicies.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'about/editorialPolicies.tpl', 16, false),array('function', 'translate', 'about/editorialPolicies.tpl', 16, false),array('function', 'icon', 'about/editorialPolicies.tpl', 61, false),array('modifier', 'escape', 'about/editorialPolicies.tpl', 26, false),array('modifier', 'nl2br', 'about/editorialPolicies.tpl', 33, false),)), $this); ?>

<?php $this->assign('pageTitle', "about.editorialPolicies");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

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
	<?php if (empty ( $this->_tpl_vars['journalSettings']['enableSubscriptions'] ) && ! empty ( $this->_tpl_vars['journalSettings']['openAccessPolicy'] )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'openAccessPolicy'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.openAccessPolicy"), $this);?>
</a></li><?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['enableSubscriptions'] ) && ! empty ( $this->_tpl_vars['journalSettings']['enableAuthorSelfArchive'] )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'authorSelfArchivePolicy'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorSelfArchive"), $this);?>
</a></li><?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['enableSubscriptions'] ) && ! empty ( $this->_tpl_vars['journalSettings']['enableDelayedOpenAccess'] )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'delayedOpenAccessPolicy'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.delayedOpenAccess"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['journalSettings']['enableLockss'] && ! empty ( $this->_tpl_vars['journalSettings']['lockssLicense'] )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'archiving'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.archiving"), $this);?>
</a></li><?php endif; ?>
	<?php $_from = $this->_tpl_vars['journalSettings']['customAboutItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['customAboutItem']):
?>
		<?php if (! empty ( $this->_tpl_vars['customAboutItem']['title'] )): ?>
			<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => "custom".($this->_tpl_vars['key'])), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['customAboutItem']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></li>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
</ul>

<?php if (! empty ( $this->_tpl_vars['journalSettings']['focusScopeDesc'] )): ?>
<a name="focusAndScope"></a><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.focusAndScope"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['focusScopeDesc'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
<?php endif; ?>

<a name="sectionPolicies"></a><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.sectionPolicies"), $this);?>
</h3>
<?php $_from = $this->_tpl_vars['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['section']):
?>
	<h4><?php echo $this->_tpl_vars['section']->getSectionTitle(); ?>
</h4>
	<?php if (strlen ( $this->_tpl_vars['section']->getPolicy() ) > 0): ?>
		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['section']->getPolicy())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
	<?php endif; ?>

	<?php $this->assign('hasEditors', 0); ?>
	<?php $_from = $this->_tpl_vars['sectionEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['sectionSectionEditors']):
?>
		<?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['section']->getSectionId()): ?>
			<?php $_from = $this->_tpl_vars['sectionSectionEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sectionEditor']):
?>
				<?php if (0 == $this->_tpl_vars['hasEditors']++): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editors"), $this);?>

				<ul class="plain">
				<?php endif; ?>
				<li><?php echo ((is_array($_tmp=$this->_tpl_vars['sectionEditor']->getFirstName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['sectionEditor']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  if (strlen ( $this->_tpl_vars['sectionEditor']->getAffiliation() ) > 0): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['sectionEditor']->getAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif; ?></li>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	<?php if ($this->_tpl_vars['hasEditors']): ?></ul><?php endif; ?>

	<table class="plain" width="60%">
		<tr>
			<td width="33%"><?php if (! $this->_tpl_vars['section']->getEditorRestricted()):  echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'checked'), $this); else:  echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'unchecked'), $this); endif; ?> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.open"), $this);?>
</td>
			<td width="33%"><?php if ($this->_tpl_vars['section']->getMetaIndexed()):  echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'checked'), $this); else:  echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'unchecked'), $this); endif; ?> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.indexed"), $this);?>
</td>
			<td width="34%"><?php if ($this->_tpl_vars['section']->getMetaReviewed()):  echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'checked'), $this); else:  echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'unchecked'), $this); endif; ?> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.reviewed"), $this);?>
</td>
		</tr>
	</table>
<?php endforeach; endif; unset($_from); ?>

<div class="separator">&nbsp;</div>

<?php if (! empty ( $this->_tpl_vars['journalSettings']['reviewPolicy'] )): ?><a name="peerReviewProcess"></a><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.peerReviewProcess"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['reviewPolicy'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['journalSettings']['pubFreqPolicy'] )): ?>
<a name="publicationFrequency"></a><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.publicationFrequency"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['pubFreqPolicy'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
<?php endif; ?>

<?php if (empty ( $this->_tpl_vars['journalSettings']['enableSubscriptions'] ) && ! empty ( $this->_tpl_vars['journalSettings']['openAccessPolicy'] )): ?> 
<a name="openAccessPolicy"></a><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.openAccessPolicy"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['openAccessPolicy'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['journalSettings']['enableSubscriptions'] ) && ! empty ( $this->_tpl_vars['journalSettings']['enableAuthorSelfArchive'] )): ?> 
<a name="authorSelfArchivePolicy"></a><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorSelfArchive"), $this);?>
</h3> 
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['authorSelfArchivePolicy'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['journalSettings']['enableSubscriptions'] ) && ! empty ( $this->_tpl_vars['journalSettings']['enableDelayedOpenAccess'] )): ?>
<a name="delayedOpenAccessPolicy"></a><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.delayedOpenAccess"), $this);?>
</h3> 
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.delayedOpenAccessDescription1"), $this);?>
 <?php echo $this->_tpl_vars['journalSettings']['delayedOpenAccessDuration']; ?>
 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.delayedOpenAccessDescription2"), $this);?>
</p>
<?php if (! empty ( $this->_tpl_vars['journalSettings']['delayedOpenAccessPolicy'] )): ?>
	<p><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['delayedOpenAccessPolicy'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
<?php endif; ?>

<div class="separator">&nbsp;</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['journalSettings']['enableLockss'] && ! empty ( $this->_tpl_vars['journalSettings']['lockssLicense'] )): ?>
<a name="archiving"></a><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.archiving"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['lockssLicense'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
<?php endif; ?>

<?php $_from = $this->_tpl_vars['journalSettings']['customAboutItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['customAboutItems'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['customAboutItems']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['customAboutItem']):
        $this->_foreach['customAboutItems']['iteration']++;
?>
	<?php if (! empty ( $this->_tpl_vars['customAboutItem']['title'] )): ?>
		<a name="custom<?php echo $this->_tpl_vars['key']; ?>
"></a><h3><?php echo ((is_array($_tmp=$this->_tpl_vars['customAboutItem']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h3>
		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['customAboutItem']['content'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
		<?php if (! ($this->_foreach['customAboutItems']['iteration'] == $this->_foreach['customAboutItems']['total'])): ?><div class="separator">&nbsp;</div><?php endif; ?>
	<?php endif;  endforeach; endif; unset($_from); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>