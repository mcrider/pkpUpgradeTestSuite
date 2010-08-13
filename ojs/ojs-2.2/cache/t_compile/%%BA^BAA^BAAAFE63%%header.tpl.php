<?php /* Smarty version 2.6.18, created on 2010-08-12 15:43:36
         compiled from file:/Applications/MAMP/htdocs/dev/pkpUpgradeTests/ojs/ojs-2.2/plugins/blocks/fontSize//header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/Applications/MAMP/htdocs/dev/pkpUpgradeTests/ojs/ojs-2.2/plugins/blocks/fontSize//header.tpl', 15, false),)), $this); ?>
	<!-- Add javascript required for font sizer -->
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/<?php echo $this->_tpl_vars['fontSizerPluginPath']; ?>
/sizer.js" ></script>

	<!-- Add stylesheets for the font sizer -->
	<link rel="alternate stylesheet" title="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "icon.small.alt"), $this);?>
" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/<?php echo $this->_tpl_vars['fontSizerPluginPath']; ?>
/small.css" type="text/css" />
	<link rel="stylesheet" title="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "icon.medium.alt"), $this);?>
" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/<?php echo $this->_tpl_vars['fontSizerPluginPath']; ?>
/medium.css" type="text/css" />
	<link rel="alternate stylesheet" title="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "icon.large.alt"), $this);?>
" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/<?php echo $this->_tpl_vars['fontSizerPluginPath']; ?>
/large.css" type="text/css" />