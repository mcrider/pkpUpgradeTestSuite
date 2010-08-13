<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:40
         compiled from file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/view.tpl', 17, false),array('modifier', 'date_format', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/view.tpl', 23, false),array('modifier', 'strip_unsafe_html', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/view.tpl', 35, false),array('modifier', 'nl2br', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/view.tpl', 35, false),array('function', 'translate', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/view.tpl', 32, false),)), $this); ?>

<?php $this->assign('pageTitleTranslated', $this->_tpl_vars['thesis']->getTitle());  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table width="100%">
	<tr valign="top">
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['thesis']->getStudentFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	</tr>
	<tr valign="top">
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['thesis']->getDepartment())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['thesis']->getUniversity())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	</tr>
	<tr valign="top">
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['thesis']->getDateApproved())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B, %Y") : smarty_modifier_date_format($_tmp, "%B, %Y")); ?>
</td>
	</tr>
	<tr valign="top">
		<td><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['thesis']->getUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['thesis']->getUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
	</tr>
	<tr valign="top">
		<td>&nbsp;</td>
	</tr>
	<tr valign="top">
		<td><h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.abstract"), $this);?>
</h4></td>
	</tr>
	<tr valign="top">
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['thesis']->getAbstract())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
	</tr>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>