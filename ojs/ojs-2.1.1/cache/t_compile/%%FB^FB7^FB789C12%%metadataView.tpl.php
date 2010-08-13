<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:39
         compiled from submission/metadata/metadataView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'submission/metadata/metadataView.tpl', 16, false),array('function', 'url', 'submission/metadata/metadataView.tpl', 24, false),array('function', 'icon', 'submission/metadata/metadataView.tpl', 25, false),array('modifier', 'to_array', 'submission/metadata/metadataView.tpl', 24, false),array('modifier', 'assign', 'submission/metadata/metadataView.tpl', 24, false),array('modifier', 'escape', 'submission/metadata/metadataView.tpl', 25, false),array('modifier', 'default', 'submission/metadata/metadataView.tpl', 30, false),array('modifier', 'strip_unsafe_html', 'submission/metadata/metadataView.tpl', 38, false),array('modifier', 'nl2br', 'submission/metadata/metadataView.tpl', 38, false),)), $this); ?>
 
<?php $this->assign('pageTitle', "submission.viewMetadata");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['canViewAuthors']): ?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.authors"), $this);?>
</h3>
	
<table width="100%" class="data">
	<?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['authorIndex'] => $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.name"), $this);?>
</td>
		<td width="80%" class="value">
			<?php $this->assign('emailString', ($this->_tpl_vars['author']['firstName'])." ".($this->_tpl_vars['author']['middleName'])." ".($this->_tpl_vars['author']['lastName'])." <".($this->_tpl_vars['author']['email']).">"); ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email','to' => ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('to_array', true, $_tmp) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp)),'redirectUrl' => $this->_tpl_vars['currentUrl'],'articleId' => $this->_tpl_vars['articleId']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

			<?php echo ((is_array($_tmp=$this->_tpl_vars['author']['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['author']['middleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['author']['lastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.url"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['author']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.affiliation"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['author']['affiliation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.biography"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['author']['biography'])) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<?php if (! ($this->_foreach['authors']['iteration'] == $this->_foreach['authors']['total'])): ?>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
</table>


<div class="separator"></div>
<?php endif; ?>


<h3><?php if ($this->_tpl_vars['section']->getAbstractsDisabled()):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this); else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.titleAndAbstract"), $this); endif; ?></h3>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</td>
		<td width="80%" class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<?php if ($this->_tpl_vars['alternateLocale1']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
<br />(<?php echo $this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale1']]; ?>
)</td>
		<td class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['titleAlt1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['alternateLocale2']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
<br />(<?php echo $this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale2']]; ?>
)</td>
		<td class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['titleAlt2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<?php endif; ?>

	<?php if (! $this->_tpl_vars['section']->getAbstractsDisabled()): ?>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['abstract'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<?php if ($this->_tpl_vars['alternateLocale1']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this);?>
<br />(<?php echo $this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale1']]; ?>
)</td>
		<td class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['abstractAlt1'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['alternateLocale2']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this);?>
<br />(<?php echo $this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale2']]; ?>
)</td>
		<td class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['abstractAlt2'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<?php endif; ?>
	<?php endif; ?>
</table>


<div class="separator"></div>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.indexing"), $this);?>
</h3>
	
<table width="100%" class="data">
	<?php if ($this->_tpl_vars['journalSettings']['metaDiscipline']): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.discipline"), $this);?>
</td>
		<td width="80%" class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['discipline'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journalSettings']['metaSubjectClass']): ?>
	<tr valign="top">
		<td colspan="2" class="label"><a href="<?php echo $this->_tpl_vars['journalSettings']['metaSubjectClassUrl']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['metaSubjectClassTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
	</tr>
	<tr valign="top">
		<td width="20%"class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.subjectClassification"), $this);?>
</td>
		<td width="80%" class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['subjectClass'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journalSettings']['metaSubject']): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.subject"), $this);?>
</td>
		<td width="80%" class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journalSettings']['metaCoverage']): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.coverageGeo"), $this);?>
</td>
		<td width="80%" class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['coverageGeo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.coverageChron"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['coverageChron'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.coverageSample"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['coverageSample'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journalSettings']['metaType']): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.type"), $this);?>
</td>
		<td width="80%" class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif; ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.language"), $this);?>
</td>
		<td width="80%" class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['language'])) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
</table>


<div class="separator"></div>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.supportingAgencies"), $this);?>
</h3>
	
<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.agencies"), $this);?>
</td>
		<td width="80%" class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['sponsor'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>