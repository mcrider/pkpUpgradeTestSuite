<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:55
         compiled from submission/layout/proofGalley.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'submission/layout/proofGalley.tpl', 22, false),)), $this); ?>

<?php $this->assign('pageTitle', "submission.layout.viewingGalley"); ?>

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
	<frameset rows="40,*" frameborder="0">
		<frame src="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/proofGalleyTop/<?php echo $this->_tpl_vars['articleId']; ?>
" noresize="noresize" frameborder="0" scrolling="no" />
		<frame src="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/proofGalleyFile/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
" frameborder="0" />
	</frameset>
</head>
<noframes>
<body>
	<table width="100%">
		<tr>
			<td align="center">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.error.framesRequired",'url' => "{".($this->_tpl_vars['requestPageUrl'])), $this);?>
/proofGalleyFile/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
"}
			</td>
		</tr>
	</table>
</body>
</noframes>
</html>