<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:47
         compiled from article/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'article/view.tpl', 20, false),)), $this); ?>

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
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/articleView.css" type="text/css" />
	<frameset cols="*,180" frameborder="0">
		<frame src="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/view<?php if (! $this->_tpl_vars['galley'] || $this->_tpl_vars['galley']->isHtmlGalley()): ?>Article<?php elseif ($this->_tpl_vars['galley']->isPdfGalley()): ?>PDFInterstitial<?php else: ?>DownloadInterstitial<?php endif; ?>/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
" frameborder="0" />
		<frame src="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewRST/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
" noresize="noresize" frameborder="0" scrolling="no" />
	</frameset>
</head>
<noframes>
<body>
	<table width="100%">
		<tr>
			<td align="center">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.error.framesRequired",'url' => "{".($this->_tpl_vars['requestPageUrl'])), $this);?>
/viewArticle/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
"}
			</td>
		</tr>
	</table>
</body>
</noframes>
</html>