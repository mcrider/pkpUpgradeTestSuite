<?php /* Smarty version 2.6.18, created on 2009-04-09 15:34:08
         compiled from about/contact.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'about/contact.tpl', 15, false),array('function', 'mailto', 'about/contact.tpl', 43, false),array('modifier', 'nl2br', 'about/contact.tpl', 17, false),array('modifier', 'escape', 'about/contact.tpl', 25, false),)), $this); ?>
<?php $this->assign('pageTitle', "about.journalContact"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (! empty ( $this->_tpl_vars['journalSettings']['mailingAddress'] )): ?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.mailingAddress"), $this);?>
</h3>
<p>
	<?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['mailingAddress'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

</p>
<?php endif; ?>

<?php if (! ( empty ( $this->_tpl_vars['journalSettings']['contactTitle'] ) && empty ( $this->_tpl_vars['journalSettings']['contactAffiliation'] ) && empty ( $this->_tpl_vars['journalSettings']['contactAffiliation'] ) && empty ( $this->_tpl_vars['journalSettings']['contactMailingAddress'] ) && empty ( $this->_tpl_vars['journalSettings']['contactPhone'] ) && empty ( $this->_tpl_vars['journalSettings']['contactFax'] ) && empty ( $this->_tpl_vars['journalSettings']['contactEmail'] ) )): ?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact.principalContact"), $this);?>
</h3>
<p>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['contactName'] )): ?>
		<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['contactName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</strong><br />
	<?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['contactTitle'] )): ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['contactTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<br />
	<?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['contactAffiliation'] )): ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['contactAffiliation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<br />
	<?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['contactMailingAddress'] )): ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['contactMailingAddress'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br />
	<?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['contactPhone'] )): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact.phone"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['contactPhone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<br />
	<?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['contactFax'] )): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact.fax"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['contactFax'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<br />
	<?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['contactEmail'] )): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact.email"), $this);?>
: <?php echo smarty_function_mailto(array('address' => ((is_array($_tmp=$this->_tpl_vars['journalSettings']['contactEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'encode' => 'hex'), $this);?>
<br />
	<?php endif; ?>
</p>
<?php endif; ?>

<?php if (! ( empty ( $this->_tpl_vars['journalSettings']['supportName'] ) && empty ( $this->_tpl_vars['journalSettings']['supportPhone'] ) && empty ( $this->_tpl_vars['journalSettings']['supportEmail'] ) )): ?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact.supportContact"), $this);?>
</h3>
<p>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['supportName'] )): ?>
		<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['supportName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</strong><br />
	<?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['supportPhone'] )): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact.phone"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['supportPhone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<br />
	<?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['journalSettings']['supportEmail'] )): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact.email"), $this);?>
: <?php echo smarty_function_mailto(array('address' => ((is_array($_tmp=$this->_tpl_vars['journalSettings']['supportEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'encode' => 'hex'), $this);?>
<br />
	<?php endif; ?>
</p>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>