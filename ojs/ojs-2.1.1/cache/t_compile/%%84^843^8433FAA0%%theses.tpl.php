<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:40
         compiled from file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/theses.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'plugin_url', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/theses.tpl', 16, false),array('function', 'translate', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/theses.tpl', 16, false),array('function', 'page_info', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/theses.tpl', 57, false),array('function', 'page_links', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/theses.tpl', 58, false),array('block', 'iterate', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/theses.tpl', 36, false),array('modifier', 'date_format', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/theses.tpl', 39, false),array('modifier', 'escape', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/theses.tpl', 40, false),)), $this); ?>

<?php $this->assign('pageTitle', "plugins.generic.thesis.manager.theses");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li class="current"><a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'theses'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.manager.theses"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'settings'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.manager.settings"), $this);?>
</a></li>
</ul>

<br />

<table width="100%" class="listing">
	<tr>
		<td colspan="5" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.manager.status"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.manager.dateApproved"), $this);?>
</td>
		<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.manager.studentName"), $this);?>
</td>
		<td width="40%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.manager.title"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="5" class="headseparator">&nbsp;</td>
	</tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'theses','item' => 'thesis')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top">
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['thesis']->getStatusString()), $this);?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['thesis']->getDateApproved())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['thesis']->getStudentFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['thesis']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
		<td><a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'edit','id' => $this->_tpl_vars['thesis']->getThesisId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a> <a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'delete','id' => $this->_tpl_vars['thesis']->getThesisId()), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.manager.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></td>
	</tr>
	<tr>
		<td colspan="5" class="<?php if ($this->_tpl_vars['theses']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['theses']->wasEmpty()): ?>
	<tr>
		<td colspan="5" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.manager.noneCreated"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="5" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="2" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['theses']), $this);?>
</td>
		<td colspan="3" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'theses','iterator' => $this->_tpl_vars['theses']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'create'), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.manager.create"), $this);?>
</a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>