<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:26
         compiled from article/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'article/view.tpl', 21, false),array('modifier', 'assign', 'article/view.tpl', 30, false),array('modifier', 'to_array', 'article/view.tpl', 33, false),array('function', 'url', 'article/view.tpl', 30, false),array('function', 'translate', 'article/view.tpl', 49, false),)), $this); ?>

<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>

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
    foreach ($_from as $this->_tpl_vars['cssUrl']):
?>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['cssUrl']; ?>
" type="text/css" />
	<?php endforeach; endif; unset($_from); ?>
</head>
<frameset cols="*,180" frameborder="0" framespacing="0" border="0">
	<?php if (! $this->_tpl_vars['galley']): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewArticle','path' => $this->_tpl_vars['articleId']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'articleUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'articleUrl'));?>

		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewRST','path' => $this->_tpl_vars['articleId']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'rstUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'rstUrl'));?>

	<?php else: ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewRST','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'rstUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'rstUrl'));?>

		<?php if ($this->_tpl_vars['galley']->isHtmlGalley()): ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewArticle','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'articleUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'articleUrl'));?>

		<?php elseif ($this->_tpl_vars['galley']->isPdfGalley()): ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewPDFInterstitial','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'articleUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'articleUrl'));?>

		<?php else: ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewDownloadInterstitial','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'articleUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'articleUrl'));?>

		<?php endif; ?>
	<?php endif; ?>
	<frame src="<?php echo $this->_tpl_vars['articleUrl']; ?>
" frameborder="0"/>
	<frame src="<?php echo $this->_tpl_vars['rstUrl']; ?>
" noresize="noresize" frameborder="0" scrolling="auto" />
<noframes>
<body>
	<table width="100%">
		<tr>
			<td align="center">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.error.framesRequired",'url' => $this->_tpl_vars['articleUrl']), $this);?>

			</td>
		</tr>
	</table>
</body>
</noframes>
</frameset>
</html>