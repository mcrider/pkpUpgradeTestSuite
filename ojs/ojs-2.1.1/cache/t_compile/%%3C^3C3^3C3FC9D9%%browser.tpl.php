<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:40
         compiled from file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/counter/browser.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/counter/browser.tpl', 18, false),array('function', 'page_info', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/counter/browser.tpl', 52, false),array('function', 'page_links', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/counter/browser.tpl', 53, false),array('block', 'iterate', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/counter/browser.tpl', 27, false),array('modifier', 'date_format', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/counter/browser.tpl', 30, false),array('modifier', 'escape', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/counter/browser.tpl', 31, false),)), $this); ?>

<?php $this->assign('pageTitle', "plugins.generic.counter.browseLog.logBrowser");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table width="100%" class="listing">
<tr><td colspan="6" class="headseparator">&nbsp;</td></tr>
<tr class="heading" valign="bottom">
	<td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.counter.entry.timestamp"), $this);?>
</td>
	<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.counter.entry.site"), $this);?>
</td>
	<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.counter.entry.journal"), $this);?>
</td>
	<td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.counter.entry.user"), $this);?>
</td>
	<td width="7%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.counter.entry.type"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.counter.entry.value"), $this);?>
</td>
</tr>
<tr><td colspan="6" class="headseparator">&nbsp;</td></tr>
<?php $this->assign('userCount', 0);  $this->_tag_stack[] = array('iterate', array('from' => 'entries','item' => 'entry')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  $this->assign('curUserSession', $this->_tpl_vars['entry']->getUser()); ?>
<tr>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']->getStamp())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']->getSite())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	<td><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']->getJournalUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']->getJournal())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['sessions'][$this->_tpl_vars['curUserSession']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	<td>
		<?php if ($this->_tpl_vars['entry']->getType() == LOG_ENTRY_TYPE_SEARCH): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.counter.entry.type.search"), $this);?>

		<?php else: ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.counter.entry.type.article"), $this);?>

		<?php endif; ?>
	</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']->getValue())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr><td colspan="6" class="<?php if ($this->_tpl_vars['entries']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td></tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['entries']->wasEmpty()): ?>
	<tr>
	<td colspan="6" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
	<tr><td colspan="6" class="endseparator">&nbsp;</td></tr>
<?php else: ?>
	<tr>
		<td colspan="3" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['entries']), $this);?>
</td>
		<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'entries','iterator' => $this->_tpl_vars['entries']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>