<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:26
         compiled from announcement/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'announcement/view.tpl', 18, false),)), $this); ?>

<?php $this->assign('pageTitleTranslated', $this->_tpl_vars['announcementTitle']);  $this->assign('pageId', "announcement.view");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table width="100%">
	<tr>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getDescription())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
	</tr>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>