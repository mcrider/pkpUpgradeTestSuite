<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:52
         compiled from rtadmin/exportXml.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'rtadmin/exportXml.tpl', 5, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version="1.0"<?php echo '?>'; ?>

<!DOCTYPE version SYSTEM "http://www.pkp.ubc.ca/DTD/rst/rst-version.dtd">
<!-- <?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 RST Version -->

<version id="<?php echo ((is_array($_tmp=$this->_tpl_vars['version']->getKey())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" locale="<?php echo ((is_array($_tmp=$this->_tpl_vars['version']->getLocale())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
	<version_title><?php echo ((is_array($_tmp=$this->_tpl_vars['version']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</version_title>
	<version_description><?php echo ((is_array($_tmp=$this->_tpl_vars['version']->getDescription())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</version_description>

<?php $_from = $this->_tpl_vars['version']->getContexts(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['context']):
?>
	<context>
		<context_title><?php echo ((is_array($_tmp=$this->_tpl_vars['context']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</context_title>
		<context_abbrev><?php echo ((is_array($_tmp=$this->_tpl_vars['context']->getAbbrev())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</context_abbrev>
		<context_description><?php echo ((is_array($_tmp=$this->_tpl_vars['context']->getDescription())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</context_description>
<?php if ($this->_tpl_vars['context']->getAuthorTerms()): ?>		<author_terms /><?php endif;  if ($this->_tpl_vars['context']->getDefineTerms()): ?>		<define_terms /><?php endif; ?>

<?php $_from = $this->_tpl_vars['context']->getSearches(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['search']):
?>
		<search>
			<search_title><?php echo ((is_array($_tmp=$this->_tpl_vars['search']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</search_title>
			<search_description><?php echo ((is_array($_tmp=$this->_tpl_vars['search']->getDescription())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</search_description>
			<url><?php echo ((is_array($_tmp=$this->_tpl_vars['search']->getUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</url>
			<search_url><?php echo ((is_array($_tmp=$this->_tpl_vars['search']->getSearchUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</search_url>
<?php if ($this->_tpl_vars['search']->getSearchPost()): ?>			<search_post><?php echo ((is_array($_tmp=$this->_tpl_vars['search']->getSearchPost())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</search_post><?php endif; ?>
			
		</search>
<?php endforeach; endif; unset($_from); ?>
	</context>
<?php endforeach; endif; unset($_from); ?>
</version>