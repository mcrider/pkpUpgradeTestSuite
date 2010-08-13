<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:12
         compiled from article/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'article/view.tpl', 19, false),array('function', 'translate', 'article/view.tpl', 42, false),)), $this); ?>

<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>

<?php $this->assign('escapedArticleId', ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')));  $this->assign('escapedGalleyId', ((is_array($_tmp=$this->_tpl_vars['galleyId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['defaultCharset']; ?>
" />
	<title><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getFirstAuthor(true))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
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
</head>
<frameset cols="*,180" frameborder="0" framespacing="0" border="0">
	<frame src="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/view<?php if (! $this->_tpl_vars['galley'] || $this->_tpl_vars['galley']->isHtmlGalley()): ?>Article<?php elseif ($this->_tpl_vars['galley']->isPdfGalley()): ?>PDFInterstitial<?php else: ?>DownloadInterstitial<?php endif; ?>/<?php echo $this->_tpl_vars['escapedArticleId']; ?>
/<?php echo $this->_tpl_vars['escapedGalleyId']; ?>
" frameborder="0" />
	<frame src="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewRST/<?php echo $this->_tpl_vars['escapedArticleId']; ?>
/<?php echo $this->_tpl_vars['escapedGalleyId']; ?>
" noresize="noresize" frameborder="0" scrolling="auto" />
<noframes>
<body>
	<table width="100%">
		<tr>
			<td align="center">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.error.framesRequired",'url' => ($this->_tpl_vars['requestPageUrl'])."/viewArticle/".($this->_tpl_vars['escapedArticleId'])."/".($this->_tpl_vars['escapedGalleyId'])), $this);?>

			</td>
		</tr>
	</table>
</body>
</noframes>
</frameset>
</html>