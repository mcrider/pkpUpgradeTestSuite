<?php /* Smarty version 2.6.18, created on 2009-04-09 15:34:10
         compiled from admin/importComplete.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'admin/importComplete.tpl', 13, false),array('function', 'url', 'admin/importComplete.tpl', 41, false),array('modifier', 'escape', 'admin/importComplete.tpl', 22, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.journals.importOJS1.success"), $this);?>
</p>

<?php if (! empty ( $this->_tpl_vars['redirects'] )): ?>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.journals.importOJS1.redirect.desc"), $this);?>
</p>
<ul>
<?php $_from = $this->_tpl_vars['redirects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['redirect']):
?>
	<?php $this->assign('redirectFilename', $this->_tpl_vars['redirect'][0]); ?>
	<?php $this->assign('redirectDescKey', $this->_tpl_vars['redirect'][1]); ?>
	<?php $this->assign('redirectContents', $this->_tpl_vars['redirect'][2]); ?>
	<li><?php echo ((is_array($_tmp=$this->_tpl_vars['redirectFilename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
:<br />
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['redirectDescKey']), $this);?>
<br />
	<textarea name="<?php echo ((is_array($_tmp=$this->_tpl_vars['redirectFilename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" cols="60" rows="20" class="textArea" style="font-family: Courier,'Courier New',fixed-width"><?php echo $this->_tpl_vars['redirectContents']; ?>
</textarea></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['conflicts'] )): ?>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.journals.importOJS1.conflict.desc"), $this);?>
</p>

<ul>
<?php $_from = $this->_tpl_vars['conflicts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['conflict']):
?>
	<?php $this->assign('firstUser', $this->_tpl_vars['conflict'][0]); ?>
	<?php $this->assign('secondUser', $this->_tpl_vars['conflict'][1]); ?>
	<li><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.journals.importOJS1.conflict",'firstUsername' => $this->_tpl_vars['firstUser']->getUsername(),'firstName' => $this->_tpl_vars['firstUser']->getFullName(),'secondUsername' => $this->_tpl_vars['secondUser']->getUsername(),'secondName' => $this->_tpl_vars['secondUser']->getFullName()), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp));?>
</li>
<?php endforeach; endif; unset($_from); ?>
</ul>
<?php endif; ?>

<p>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editJournal','path' => $this->_tpl_vars['journalId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.journals.importOJS1.editMigratedJournal"), $this);?>
</a></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>