<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:55
         compiled from submission/layout/proofGalleyHTML.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'submission/layout/proofGalleyHTML.tpl', 20, false),)), $this); ?>

<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['defaultCharset']; ?>
" />
	<title><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['pageTitle']), $this);?>
</title>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/common.css" type="text/css" />
	<?php if ($this->_tpl_vars['galley']->getStyleFileId()): ?>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewFile/<?php echo $this->_tpl_vars['galley']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['galley']->getStyleFileId(); ?>
" type="text/css" />
	<?php endif; ?>
</head>
<body>
	<?php echo $this->_tpl_vars['galley']->getHTMLContents(($this->_tpl_vars['requestPageUrl'])."/viewFile"); ?>

</body>
</html>