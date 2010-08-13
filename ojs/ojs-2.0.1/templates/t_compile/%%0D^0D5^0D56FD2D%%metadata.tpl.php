<?php /* Smarty version 2.6.9, created on 2005-07-08 06:01:57
         compiled from author/submission/metadata.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'author/submission/metadata.tpl', 13, false),array('function', 'icon', 'author/submission/metadata.tpl', 29, false),array('modifier', 'escape', 'author/submission/metadata.tpl', 26, false),array('modifier', 'default', 'author/submission/metadata.tpl', 33, false),array('modifier', 'nl2br', 'author/submission/metadata.tpl', 37, false),)), $this); ?>

<a name="metadata"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.metadata"), $this);?>
</h3>

<p><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewMetadata/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.editMetadata"), $this);?>
</a></p>


<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.authors"), $this);?>
</h4>
	
<table width="100%" class="data">
	<?php $_from = $this->_tpl_vars['submission']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.name"), $this);?>
</td>

		<?php $this->assign('emailString', ($this->_tpl_vars['author']->getFullName())." <".($this->_tpl_vars['author']->getEmail()).">"); ?>
		<?php $this->assign('emailStringEscaped', ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
		<?php $this->assign('urlEscaped', ((is_array($_tmp=$this->_tpl_vars['currentUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
		<?php $this->assign('subjectEscaped', ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleTitle())) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
		<td width="80%" class="value"><?php echo $this->_tpl_vars['author']->getFullName(); ?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['pageUrl'])."/user/email?to[]=".($this->_tpl_vars['emailStringEscaped'])."&redirectUrl=".($this->_tpl_vars['urlEscaped'])."&subject=".($this->_tpl_vars['subjectEscaped'])), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.affiliation"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['author']->getAffiliation())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.biography"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['author']->getBiography())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<?php if ($this->_tpl_vars['author']->getPrimaryContact()): ?>
	<tr valign="top">
		<td colspan="2" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.selectPrincipalContact"), $this);?>
</td>
	</tr>
	<?php endif; ?>
	<?php if (! ($this->_foreach['authors']['iteration'] == $this->_foreach['authors']['total'])): ?>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
</table>


<br />


<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.titleAndAbstract"), $this);?>
</h4>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</td>
		<td width="80%" class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['submission']->getTitle())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<?php if ($this->_tpl_vars['alternateLocale1']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
<br />(<?php echo $this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale1']]; ?>
)</td>
		<td class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['submission']->getTitleAlt1())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['alternateLocale2']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
<br />(<?php echo $this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale2']]; ?>
)</td>
		<td class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['submission']->getTitleAlt2())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<?php endif; ?>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getAbstract())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<?php if ($this->_tpl_vars['alternateLocale1']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this);?>
<br />(<?php echo $this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale1']]; ?>
)</td>
		<td class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getAbstractAlt1())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['alternateLocale2']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this);?>
<br />(<?php echo $this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale2']]; ?>
)</td>
		<td class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getAbstractAlt2())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<?php endif; ?>
</table>


<br />


<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.indexing"), $this);?>
</h4>
	
<table width="100%" class="data">
	<?php if ($this->_tpl_vars['journalSettings']['metaDiscipline']): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.discipline"), $this);?>
</td>
		<td width="80%" class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['submission']->getDiscipline())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journalSettings']['metaSubjectClass']): ?>
	<tr valign="top">
		<td width="20%"  class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.subjectClassification"), $this);?>
</td>
		<td width="80%" class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['submission']->getSubjectClass())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journalSettings']['metaSubject']): ?>
	<tr valign="top">
		<td width="20%"  class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.subject"), $this);?>
</td>
		<td width="80%" class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['submission']->getSubject())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journalSettings']['metaCoverage']): ?>
	<tr valign="top">
		<td width="20%"  class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.coverageGeo"), $this);?>
</td>
		<td width="80%" class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['submission']->getCoverageGeo())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.coverageChron"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['submission']->getCoverageChron())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.coverageSample"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['submission']->getCoverageSample())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journalSettings']['metaType']): ?>
	<tr valign="top">
		<td width="20%"  class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.type"), $this);?>
</td>
		<td width="80%" class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['submission']->getType())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif; ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.language"), $this);?>
</td>
		<td width="80%" class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['submission']->getLanguage())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
</table>


<br />


<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.supportingAgencies"), $this);?>
</h4>
	
<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.agencies"), $this);?>
</td>
		<td width="80%" class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['submission']->getSponsor())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
</table>