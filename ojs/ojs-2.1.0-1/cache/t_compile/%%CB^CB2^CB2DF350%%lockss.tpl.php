<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:36
         compiled from gateway/lockss.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'iterate', 'gateway/lockss.tpl', 20, false),array('function', 'url', 'gateway/lockss.tpl', 21, false),array('function', 'mailto', 'gateway/lockss.tpl', 92, false),array('modifier', 'escape', 'gateway/lockss.tpl', 21, false),array('modifier', 'nl2br', 'gateway/lockss.tpl', 97, false),)), $this); ?>

<?php $this->assign('pageTitleTranslated', 'LOCKSS Publisher Manifest');  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['journals']): ?>
<h3>Archive of Published Issues</h3>

<ul>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'journals','item' => 'journal')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php if ($this->_tpl_vars['journal']->getSetting('enableLockss')): ?><li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'gateway','op' => 'lockss'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></li><?php endif;  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</ul>
<?php else: ?>

<p><?php if ($this->_tpl_vars['prevYear'] !== null): ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'lockss','year' => $this->_tpl_vars['prevYear']), $this);?>
" class="action">&lt;&lt; Previous</a><?php else: ?><span class="disabled heading">&lt;&lt; Previous</span><?php endif; ?> | <?php if ($this->_tpl_vars['nextYear'] !== null): ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'lockss','year' => $this->_tpl_vars['nextYear']), $this);?>
" class="action">Next &gt;&gt;</a><?php else: ?><span class="disabled heading">Next &gt;&gt;</span><?php endif; ?></p>

<h3>Archive of Published Issues: <?php echo $this->_tpl_vars['year']; ?>
</h3>

<ul>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'issues','item' => 'issue')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['journal'])), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></li>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</ul>

<?php if ($this->_tpl_vars['showInfo']): ?>
<br />

<div class="separator"></div>

<h3>Front Matter</h3>

<p>Front Matter associated with this Archival Unit includes:</p>

<ul>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about'), $this);?>
">About the Journal</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'submission'), $this);?>
">Submission Guidelines</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'contact'), $this);?>
">Contact Information</a></li>
</ul>

<br />

<div class="separator"></div>

<h3>Metadata</h3>

<p>Metadata associated with this Archival Unit includes:</p>

<table width="100%" class="data">
<tr valign="top">
	<td width="20%" class="label">Journal URL</td>
	<td width="80%" class="value"><a href="<?php echo $this->_tpl_vars['journal']->getUrl(); ?>
"><?php echo $this->_tpl_vars['journal']->getUrl(); ?>
</a></td>
</tr>
<tr valign="top">
	<td class="label">Title</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td class="label">Publisher</td>
	<td class="value"><?php $this->assign('publisher', $this->_tpl_vars['journal']->getSetting('publisher')); ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['publisher']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['publisher']['institution'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
</tr>
<tr valign="top">
	<td class="label">Description</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('searchDescription'))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td class="label">Keywords</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('searchKeywords'))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<?php if ($this->_tpl_vars['journal']->getSetting('issn')): ?>
<tr valign="top">
	<td class="label">ISSN</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('issn'))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<?php endif; ?>
<tr valign="top">
	<td class="label">Language(s)</td>
	<td class="value"><?php $_from = $this->_tpl_vars['locales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
 echo $this->_tpl_vars['localeName']; ?>
 (<?php echo $this->_tpl_vars['localeKey']; ?>
)<br /><?php endforeach; endif; unset($_from); ?></td>
</tr>
<tr valign="top">
	<td class="label">Publisher Email</td>
	<td class="value"><?php echo smarty_function_mailto(array('address' => ((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('contactEmail'))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)),'encode' => 'hex'), $this);?>
</td>
</tr>
<?php if ($this->_tpl_vars['journal']->getSetting('copyrightNotice')): ?>
<tr valign="top">
	<td class="label">Copyright</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('copyrightNotice'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
</tr>
<?php endif;  if ($this->_tpl_vars['journal']->getSetting('openAccessPolicy')): ?>
<tr valign="top">
	<td class="label">Rights</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('openAccessPolicy'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
</tr>
<?php endif; ?>
</table>
<?php endif; ?>

<?php endif; ?>

<br /><br />

<div style="text-align: center; width: 250px; margin: 0 auto">
	<a href="http://lockss.stanford.edu/"><img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/templates/images/lockss.gif" width="108" height="108" border="0" alt="LOCKSS" /></a>
	<br />
	LOCKSS system has permission to collect, preserve, and serve this Archival Unit.
		
	<br /><br />
	
	<a href="http://pkp.sfu.ca/"><img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/templates/images/pkp.gif" width="79" height="56" border="0" alt="The Public Knowledge Project" /></a>
	<br />
	Open Journal Systems was developed by the Public Knowledge Project.
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>