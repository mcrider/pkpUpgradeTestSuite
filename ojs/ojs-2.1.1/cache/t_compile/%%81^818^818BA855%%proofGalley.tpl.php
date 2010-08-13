<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:38
         compiled from submission/layout/proofGalley.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'submission/layout/proofGalley.tpl', 22, false),array('function', 'url', 'submission/layout/proofGalley.tpl', 28, false),array('modifier', 'to_array', 'submission/layout/proofGalley.tpl', 28, false),array('modifier', 'assign', 'submission/layout/proofGalley.tpl', 28, false),)), $this); ?>

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
    foreach ($_from as $this->_tpl_vars['cssUrl']):
?>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['cssUrl']; ?>
" type="text/css" />
	<?php endforeach; endif; unset($_from); ?>
</head>
<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'proofGalleyFile','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'galleyUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'galleyUrl'));?>

<frameset rows="40,*" frameborder="0" framespacing="0" border="0">
	<frame src="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'proofGalleyTop','path' => $this->_tpl_vars['articleId']), $this);?>
" noresize="noresize" frameborder="0" scrolling="no" />
	<frame src="<?php echo $this->_tpl_vars['galleyUrl']; ?>
" frameborder="0" />
<noframes>
<body>
	<table width="100%">
		<tr>
			<td align="center">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.error.framesRequired",'url' => $this->_tpl_vars['galleyUrl']), $this);?>

			</td>
		</tr>
	</table>
</body>
</noframes>
</frameset>
</html>