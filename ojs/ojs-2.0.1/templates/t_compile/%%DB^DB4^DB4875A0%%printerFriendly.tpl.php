<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:02
         compiled from rt/printerFriendly.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'rt/printerFriendly.tpl', 51, false),)), $this); ?>

<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title><?php echo $this->_tpl_vars['article']->getFirstAuthor(true); ?>
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

<h2><?php echo $this->_tpl_vars['siteTitle']; ?>
,&nbsp;<?php echo $this->_tpl_vars['issue']->getIssueIdentification(false,true); ?>
</h2>

<div id="content">
<?php if ($this->_tpl_vars['galley']): ?>
	<?php echo $this->_tpl_vars['galley']->getHTMLContents(($this->_tpl_vars['requestPageUrl'])."/viewFile"); ?>

<?php else: ?>

	<h3><?php echo $this->_tpl_vars['article']->getArticleTitle(); ?>
</h3>
	<div><i><?php echo $this->_tpl_vars['article']->getAuthorString(); ?>
</i></div>
	<br />
	<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.abstract"), $this);?>
</h4>
	<br />
	<div><?php echo $this->_tpl_vars['article']->getArticleAbstract(); ?>
</div>

<?php endif; ?>
</div>

</div>
</div>
</div>

<script type="text/javascript">
	window.print();
</script>

</body>
</html>