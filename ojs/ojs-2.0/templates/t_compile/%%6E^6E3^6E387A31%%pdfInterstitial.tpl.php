<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:47
         compiled from article/pdfInterstitial.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'article/pdfInterstitial.tpl', 21, false),)), $this); ?>

<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['defaultCharset']; ?>
" />
	<title><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.pdf.title"), $this);?>
</title>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/common.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/articleView.css" type="text/css" />
	<meta http-equiv="refresh" content="2;URL=<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewFile/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galley']->getFileId(); ?>
"/>

</head>
<body>

<div id="container">
<div id="body">
<div id="main">
<div id="content">
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.pdf.title"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.pdf.note",'pdfUrl' => ($this->_tpl_vars['requestPageUrl'])."/download/".($this->_tpl_vars['articleId'])."/".($this->_tpl_vars['galley']->getFileId())), $this);?>
</p>

</div>
</div>
</div>
</div>
</body>
</html>