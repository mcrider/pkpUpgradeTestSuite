<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:21
         compiled from submission/layout/proofGalley.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'submission/layout/proofGalley.tpl', 22, false),)), $this); ?>

<?php $this->assign('pageTitle', "submission.layout.viewingGalley"); ?>

<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['defaultCharset']; ?>
" />
	<title><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['pageTitle']), $this);?>
</title>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/common.css" type="text/css" />
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
</head>
<frameset rows="40,*" frameborder="0" framespacing="0" border="0">
	<frame src="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/proofGalleyTop/<?php echo $this->_tpl_vars['articleId']; ?>
" noresize="noresize" frameborder="0" scrolling="no" />
	<frame src="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/proofGalleyFile/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
" frameborder="0" />
<noframes>
<body>
	<table width="100%">
		<tr>
			<td align="center">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.error.framesRequired",'url' => ($this->_tpl_vars['requestPageUrl'])."/proofGalleyFile/".($this->_tpl_vars['articleId'])."/".($this->_tpl_vars['galleyId'])), $this);?>

			</td>
		</tr>
	</table>
</body>
</noframes>
</frameset>
</html>