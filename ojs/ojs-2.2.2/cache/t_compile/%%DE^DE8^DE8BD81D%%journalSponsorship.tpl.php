<?php /* Smarty version 2.6.18, created on 2008-08-26 14:53:27
         compiled from about/journalSponsorship.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'about/journalSponsorship.tpl', 15, false),array('modifier', 'nl2br', 'about/journalSponsorship.tpl', 17, false),array('modifier', 'escape', 'about/journalSponsorship.tpl', 19, false),)), $this); ?>
<?php $this->assign('pageTitle', "about.journalSponsorship"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (! ( empty ( $this->_tpl_vars['publisherNote'] ) && empty ( $this->_tpl_vars['publisherInstitution'] ) )): ?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.publisher"), $this);?>
</h3>

<?php if ($this->_tpl_vars['publisherNote']): ?><p><?php echo ((is_array($_tmp=$this->_tpl_vars['publisherNote'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p><?php endif; ?>

<p><a href="<?php echo $this->_tpl_vars['publisherUrl']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['publisherInstitution'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></p>

<div class="separator"></div>
<?php endif; ?>

<?php if (! ( empty ( $this->_tpl_vars['sponsorNote'] ) && empty ( $this->_tpl_vars['sponsors'] ) )): ?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.sponsors"), $this);?>
</h3>

<?php if ($this->_tpl_vars['sponsorNote']): ?><p><?php echo ((is_array($_tmp=$this->_tpl_vars['sponsorNote'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p><?php endif; ?>

<ul>
	<?php $_from = $this->_tpl_vars['sponsors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sponsor']):
?>
	<?php if ($this->_tpl_vars['sponsor']['url']): ?>
		<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['sponsor']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['sponsor']['institution'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></li>
	<?php else: ?>
		<li><?php echo ((is_array($_tmp=$this->_tpl_vars['sponsor']['institution'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</li>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
</ul>

<div class="separator"></div>
<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['contributorNote'] ) || ( ! empty ( $this->_tpl_vars['contributors'] ) && ! empty ( $this->_tpl_vars['contributors'][0]['name'] ) )): ?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contributors"), $this);?>
</h3>

<?php if ($this->_tpl_vars['contributorNote']): ?><p><?php echo ((is_array($_tmp=$this->_tpl_vars['contributorNote'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p><?php endif; ?>

<ul>
	<?php $_from = $this->_tpl_vars['contributors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['contributor']):
?>
	<?php if ($this->_tpl_vars['contributor']['name']): ?>
		<?php if ($this->_tpl_vars['contributor']['url']): ?>
			<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['contributor']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['contributor']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></li>
		<?php else: ?>
			<li><?php echo ((is_array($_tmp=$this->_tpl_vars['contributor']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</li>
		<?php endif; ?>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
</ul>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>