<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:18
         compiled from rt/printerFriendly.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'rt/printerFriendly.tpl', 19, false),array('modifier', 'strip_unsafe_html', 'rt/printerFriendly.tpl', 54, false),array('modifier', 'nl2br', 'rt/printerFriendly.tpl', 54, false),array('function', 'translate', 'rt/printerFriendly.tpl', 52, false),)), $this); ?>

<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getFirstAuthor(true))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['defaultCharset']; ?>
" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/common.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/articleView.css" type="text/css" />
	<?php $_from = $this->_tpl_vars['stylesheets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cssFile']):
?>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/<?php echo $this->_tpl_vars['cssFile']; ?>
" type="text/css" />
	<?php endforeach; endif; unset($_from); ?>
	<?php if ($this->_tpl_vars['pageStyleSheet']): ?>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo $this->_tpl_vars['pageStyleSheet']['uploadName']; ?>
" type="text/css" />
	<?php endif; ?>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/js/general.js"></script>
</head>
<body>

<div id="container">

<div id="body">

<div id="main">

<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['siteTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
,&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification(false,true))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h2>

<div id="content">
<?php if ($this->_tpl_vars['galley']): ?>
	<?php echo $this->_tpl_vars['galley']->getHTMLContents(($this->_tpl_vars['requestPageUrl'])."/viewFile"); ?>

<?php else: ?>

	<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h3>
	<div><i><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getAuthorString())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</i></div>
	<?php if (! $this->_tpl_vars['section']->getAbstractsDisabled()): ?>
		<br />
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this);?>
</h4>
		<br />
		<div><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getArticleAbstract())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : $this->_plugins['modifier']['strip_unsafe_html'][0][0]->smartyStripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
	<?php endif;  endif; ?>
</div>

</div>
</div>
</div>

<script type="text/javascript">
<!--
	window.print();
// -->
</script>

</body>
</html>