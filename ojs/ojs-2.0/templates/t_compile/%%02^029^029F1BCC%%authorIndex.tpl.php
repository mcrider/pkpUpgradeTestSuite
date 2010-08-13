<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:53
         compiled from search/authorIndex.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'search/authorIndex.tpl', 17, false),array('modifier', 'escape', 'search/authorIndex.tpl', 21, false),)), $this); ?>

<?php $this->assign('pageTitle', "search.authorIndex");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['firstLetter'] => $this->_tpl_vars['authorArray']):
?>
	<a name="<?php echo $this->_tpl_vars['firstLetter']; ?>
"></a>
	<?php if (count($this->_tpl_vars['authorArray']) > 0): ?>
		<h3><?php echo $this->_tpl_vars['firstLetter']; ?>
</h3>

		<?php $_from = $this->_tpl_vars['authorArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
			<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/authors/view?firstName=<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFirstName())) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&middleName=<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getMiddleName())) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&lastName=<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&affiliation=<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
">
				<?php echo $this->_tpl_vars['author']->getLastName(true); ?>
,
				<?php echo $this->_tpl_vars['author']->getFirstName();  if ($this->_tpl_vars['author']->getMiddleName()): ?> <?php echo $this->_tpl_vars['author']->getMiddleName;  endif;  if ($this->_tpl_vars['author']->getAffiliation()): ?>, <?php echo $this->_tpl_vars['author']->getAffiliation();  endif; ?>
			</a>
			<br/>
		<?php endforeach; endif; unset($_from); ?>
	<?php endif;  endforeach; endif; unset($_from); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>