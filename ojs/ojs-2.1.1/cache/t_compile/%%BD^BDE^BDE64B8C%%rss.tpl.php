<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:40
         compiled from file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/rss.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/rss.tpl', 12, false),array('modifier', 'escape', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/rss.tpl', 12, false),array('modifier', 'strip', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/rss.tpl', 21, false),array('modifier', 'replace', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/rss.tpl', 29, false),array('modifier', 'date_format', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/rss.tpl', 72, false),array('function', 'url', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/rss.tpl', 51, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="<?php echo $this->_tpl_vars['defaultCharset']; ?>
"<?php echo '?>'; ?>

<rdf:RDF
	xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
	xmlns="http://purl.org/rss/1.0/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:prism="http://prismstandard.org/namespaces/1.2/basic/">
    
	<channel rdf:about="<?php echo $this->_tpl_vars['journal']->getUrl(); ?>
">
				<title><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal']->getTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</title>
		<link><?php echo $this->_tpl_vars['journal']->getUrl(); ?>
</link>
		<?php if ($this->_tpl_vars['journal']->getDescription()): ?>
			<?php $this->assign('description', $this->_tpl_vars['journal']->getDescription()); ?>
		<?php elseif ($this->_tpl_vars['journal']->getSetting('journalDescription')): ?>
			<?php $this->assign('description', $this->_tpl_vars['journal']->getSetting('journalDescription')); ?>
		<?php elseif ($this->_tpl_vars['journal']->getSetting('searchDescription')): ?>
			<?php $this->assign('description', $this->_tpl_vars['journal']->getSetting('searchDescription')); ?>
		<?php endif; ?>
		<description><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</description>

				<?php $this->assign('publisher', $this->_tpl_vars['journal']->getSetting('publisher')); ?>
		<?php if ($this->_tpl_vars['publisher']['institution']): ?>
		<dc:publisher><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['publisher']['institution'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</dc:publisher>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['journal']->getLocale()): ?>
		<dc:language><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal']->getLocale())) ? $this->_run_mod_handler('replace', true, $_tmp, '_', '-') : smarty_modifier_replace($_tmp, '_', '-')))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</dc:language>
		<?php endif; ?>
		<prism:publicationName><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal']->getTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</prism:publicationName>

		<?php if ($this->_tpl_vars['journal']->getSetting('printIssn')): ?>
			<?php $this->assign('ISSN', $this->_tpl_vars['journal']->getSetting('printIssn')); ?>
		<?php elseif ($this->_tpl_vars['journal']->getSetting('issn')): ?>
			<?php $this->assign('ISSN', $this->_tpl_vars['journal']->getSetting('issn')); ?>
		<?php elseif ($this->_tpl_vars['journal']->getSetting('onlineIssn')): ?>
			<?php $this->assign('ISSN', $this->_tpl_vars['journal']->getSetting('onlineIssn')); ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['ISSN']): ?>
		<prism:issn><?php echo $this->_tpl_vars['journal']->getSetting('issn'); ?>
</prism:issn>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['journal']->getSetting('copyrightNotice')): ?>
		<prism:copyright><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('copyrightNotice'))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</prism:copyright>
		<?php endif; ?>

		<items>
			<rdf:Seq>
			<?php $_from = $this->_tpl_vars['publishedArticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sections'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sections']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sectionId'] => $this->_tpl_vars['section']):
        $this->_foreach['sections']['iteration']++;
?>
			<?php $_from = $this->_tpl_vars['section']['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
				<rdf:li rdf:resource="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal'])), $this);?>
"/>
			<?php endforeach; endif; unset($_from); ?>
			<?php endforeach; endif; unset($_from); ?>
			</rdf:Seq>
		</items>
	</channel>

<?php $_from = $this->_tpl_vars['publishedArticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sections'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sections']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sectionId'] => $this->_tpl_vars['section']):
        $this->_foreach['sections']['iteration']++;
 $_from = $this->_tpl_vars['section']['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
	<item rdf:about="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal'])), $this);?>
">
				<title><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</title>
		<link><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal'])), $this);?>
</link>

				<?php if ($this->_tpl_vars['article']->getAbstract()): ?>
		<description><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getAbstract())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</description>
		<?php endif; ?>
		<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authorList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authorList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['author']):
        $this->_foreach['authorList']['iteration']++;
?>
		<dc:creator><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</dc:creator>
		<?php endforeach; endif; unset($_from); ?>
		<dc:date><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</dc:date>
		<prism:volume><?php echo $this->_tpl_vars['issue']->getVolume(); ?>
</prism:volume>
		<prism:publicationDate><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</prism:publicationDate>
	</item>
<?php endforeach; endif; unset($_from);  endforeach; endif; unset($_from); ?>

</rdf:RDF>
