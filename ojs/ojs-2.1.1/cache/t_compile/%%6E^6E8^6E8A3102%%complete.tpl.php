<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:27
         compiled from author/submit/complete.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'author/submit/complete.tpl', 14, false),array('function', 'url', 'author/submit/complete.tpl', 17, false),array('modifier', 'assign', 'author/submit/complete.tpl', 17, false),)), $this); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.submissionComplete",'journalTitle' => $this->_tpl_vars['journal']->getTitle()), $this);?>
</p>

<?php if ($this->_tpl_vars['canExpedite']): ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'expediteSubmission','articleId' => $this->_tpl_vars['articleId']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'expediteUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'expediteUrl'));?>

	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.expedite",'expediteUrl' => $this->_tpl_vars['expediteUrl']), $this);?>

<?php endif; ?>

<p>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'track'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.track"), $this);?>
</a></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>