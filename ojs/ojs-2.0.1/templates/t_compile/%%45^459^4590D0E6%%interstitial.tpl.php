<?php /* Smarty version 2.6.9, created on 2005-07-08 06:01:56
         compiled from article/interstitial.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'article/interstitial.tpl', 21, false),)), $this); ?>

<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['defaultCharset']; ?>
" />
	<title><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.nonpdf.title"), $this);?>
</title>
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
	<meta http-equiv="refresh" content="2;URL=<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/download/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galley']->getFileId(); ?>
"/>

</head>
<body>

<div id="container">
<div id="body">
<div id="main">
<div id="content">
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.nonpdf.title"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.nonpdf.note",'pdfUrl' => ($this->_tpl_vars['requestPageUrl'])."/download/".($this->_tpl_vars['articleId'])."/".($this->_tpl_vars['galley']->getFileId())), $this);?>
</p>

</div>
</div>
</div>
</div>
</body>
</html>