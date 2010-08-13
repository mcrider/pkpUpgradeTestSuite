<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:40
         compiled from file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/links.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/webFeed/templates/links.tpl', 2, false),)), $this); ?>
<div class="block">
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'feed','op' => 'atom'), $this);?>
">
	<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/generic/webFeed/templates/images/atom10_logo.gif" order="0" alt="" border="0" /></a>
	<br/>
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'feed','op' => 'rss2'), $this);?>
">
	<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/generic/webFeed/templates/images/rss20_logo.gif" order="0" alt="" border="0" /></a>
	<br/>
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'feed','op' => 'rss'), $this);?>
">
	<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/generic/webFeed/templates/images/rss10_logo.gif" order="0" alt="" border="0" /></a>
</div>