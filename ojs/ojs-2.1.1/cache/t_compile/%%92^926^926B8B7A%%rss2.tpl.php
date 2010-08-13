<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:40
         compiled from file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/rss2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/rss2.tpl', 7, false),array('modifier', 'escape', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/rss2.tpl', 7, false),array('modifier', 'strip', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/rss2.tpl', 16, false),array('modifier', 'replace', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/rss2.tpl', 20, false),array('modifier', 'date_format', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/rss2.tpl', 31, false),array('function', 'url', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/rss2.tpl', 44, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="<?php echo $this->_tpl_vars['defaultCharset']; ?>
"<?php echo '?>'; ?>

<rss version="2.0">
	<channel>
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

			    <?php if ($this->_tpl_vars['journal']->getLocale()): ?>
	    <language><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal']->getLocale())) ? $this->_run_mod_handler('replace', true, $_tmp, '_', '-') : smarty_modifier_replace($_tmp, '_', '-')))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</language>
	    <?php endif; ?>
	    <?php if ($this->_tpl_vars['journal']->getSetting('copyrightNotice')): ?>
	    <copyright><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('copyrightNotice'))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</copyright>
	    <?php endif; ?>
	    <?php if ($this->_tpl_vars['journal']->getSetting('contactEmail')): ?>
		<managingEditor><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('contactEmail'))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  if ($this->_tpl_vars['journal']->getSetting('contactName')): ?> (<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('contactName'))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)<?php endif; ?></managingEditor>
		<?php endif; ?>
	    <?php if ($this->_tpl_vars['journal']->getSetting('supportEmail')): ?>
		<webMaster><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('supportEmail'))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  if ($this->_tpl_vars['journal']->getSetting('contactName')): ?> (<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('supportName'))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)<?php endif; ?></webMaster>
		<?php endif; ?>
		<pubDate><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%a, %d %b %Y %T %z") : smarty_modifier_date_format($_tmp, "%a, %d %b %Y %T %z")); ?>
</pubDate>
								<generator>OJS <?php echo $this->_tpl_vars['ojsVersion']; ?>
</generator>
		<docs>http://blogs.law.harvard.edu/tech/rss</docs>
		<ttl>60</ttl>

		<?php $_from = $this->_tpl_vars['publishedArticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sections'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sections']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sectionId'] => $this->_tpl_vars['section']):
        $this->_foreach['sections']['iteration']++;
?>
		<?php $_from = $this->_tpl_vars['section']['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
			<item>
								<title><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</title>
				<link><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal'])), $this);?>
</link>
				<description><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getAbstract())) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</description>

						        <?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authorList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authorList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['author']):
        $this->_foreach['authorList']['iteration']++;
?>
		        	<?php if ($this->_tpl_vars['author']->getPrimaryContact()): ?>
        		    <author><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['author']->getEmail())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 (<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)</author>
        		    <?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
																<guid isPermaLink="true"><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal'])), $this);?>
</guid>
				<pubDate><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%a, %d %b %Y %T %z") : smarty_modifier_date_format($_tmp, "%a, %d %b %Y %T %z")); ?>
</pubDate>
			</item>
		<?php endforeach; endif; unset($_from); ?>
		<?php endforeach; endif; unset($_from); ?>
	</channel>
</rss>