<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:40
         compiled from file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/atom.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/atom.tpl', 7, false),array('modifier', 'escape', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/atom.tpl', 7, false),array('modifier', 'date_format', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/atom.tpl', 8, false),array('modifier', 'strip', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/atom.tpl', 34, false),array('function', 'url', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/atom.tpl', 43, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="<?php echo $this->_tpl_vars['defaultCharset']; ?>
"<?php echo '?>'; ?>

<feed xmlns="http://www.w3.org/2005/Atom">
		<id><?php echo $this->_tpl_vars['journal']->getUrl(); ?>
/issue/feed</id>
	<title><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal']->getTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</title>
	<updated><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%dT%T%z") : smarty_modifier_date_format($_tmp, "%Y-%m-%dT%T%z")); ?>
</updated>

		<?php if ($this->_tpl_vars['journal']->getSetting('contactName')): ?>
	<author>
		<name><?php echo $this->_tpl_vars['journal']->getSetting('contactName'); ?>
</name>
		<?php if ($this->_tpl_vars['journal']->getSetting('contactEmail')): ?>
		<email><?php echo $this->_tpl_vars['journal']->getSetting('contactEmail'); ?>
</email>
		<?php endif; ?>
	</author>
	<?php endif; ?>
	<link rel="alternate" href="<?php echo $this->_tpl_vars['journal']->getUrl(); ?>
" />
	<link rel="self" type="application/atom+xml" href="<?php echo $this->_tpl_vars['journal']->getUrl(); ?>
/issue/feed" />

				<generator url="http://pkp.sfu.ca/ojs/" version="<?php echo $this->_tpl_vars['ojsVersion']; ?>
">Open Journal Systems</generator>
	<?php if ($this->_tpl_vars['journal']->getDescription()): ?>
		<?php $this->assign('description', $this->_tpl_vars['journal']->getDescription()); ?>
	<?php elseif ($this->_tpl_vars['journal']->getSetting('journalDescription')): ?>
		<?php $this->assign('description', $this->_tpl_vars['journal']->getSetting('journalDescription')); ?>
	<?php elseif ($this->_tpl_vars['journal']->getSetting('searchDescription')): ?>
		<?php $this->assign('description', $this->_tpl_vars['journal']->getSetting('searchDescription')); ?>
	<?php endif; ?>
    <?php if ($this->_tpl_vars['journal']->getSetting('copyrightNotice')): ?>
    <rights><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('copyrightNotice'))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</rights>
    <?php endif; ?>
	<subtitle><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</subtitle>


<?php $_from = $this->_tpl_vars['publishedArticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sections'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sections']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sectionId'] => $this->_tpl_vars['section']):
        $this->_foreach['sections']['iteration']++;
 $_from = $this->_tpl_vars['section']['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
	<entry>
				<id><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal'])), $this);?>
</id>
		<title><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</title>
		<updated><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLastModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%dT%T%z") : smarty_modifier_date_format($_tmp, "%Y-%m-%dT%T%z")); ?>
</updated>

		        <?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authorList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authorList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['author']):
        $this->_foreach['authorList']['iteration']++;
?>
	  	<author>
			<name><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</name>
			<email><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['author']->getEmail())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</email>
        </author>
		<?php endforeach; endif; unset($_from); ?>
		<link rel="alternate" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal'])), $this);?>
" />
        <?php if ($this->_tpl_vars['article']->getAbstract()): ?>
		<summary type="html" xml:base="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal'])), $this);?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getAbstract())) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</summary>
        <?php endif; ?>

								<published><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%dT%T%z") : smarty_modifier_date_format($_tmp, "%Y-%m-%dT%T%z")); ?>
</published>
					</entry>
<?php endforeach; endif; unset($_from);  endforeach; endif; unset($_from); ?>

</feed>