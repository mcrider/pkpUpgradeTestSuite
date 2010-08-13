<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:30
         compiled from issue/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'issue/view.tpl', 15, false),array('function', 'translate', 'issue/view.tpl', 15, false),array('modifier', 'to_array', 'issue/view.tpl', 15, false),array('modifier', 'escape', 'issue/view.tpl', 18, false),array('modifier', 'nl2br', 'issue/view.tpl', 19, false),)), $this); ?>

<?php if (! $this->_tpl_vars['showToc'] && $this->_tpl_vars['issue']): ?>
	<ul class="menu">
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['issueId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, 'showToc') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, 'showToc'))), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</a></li>
	</ul>
	<br />
	<?php if ($this->_tpl_vars['coverPagePath']): ?><div><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['issueId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, 'showToc') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, 'showToc'))), $this);?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverPagePath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" border="0" alt=""<?php if ($this->_tpl_vars['width']): ?> width="<?php echo $this->_tpl_vars['width']; ?>
"<?php endif;  if ($this->_tpl_vars['height']): ?> height="<?php echo $this->_tpl_vars['height']; ?>
"<?php endif; ?>/></a></div><?php endif; ?>
	<div><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issue']->getCoverPageDescription())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
<?php else: ?>
	<?php if ($this->_tpl_vars['issue']): ?><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</h3><?php endif; ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "issue/issue.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>
