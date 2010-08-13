<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:34
         compiled from rt/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'rt/header.tpl', 19, false),array('modifier', 'assign', 'rt/header.tpl', 39, false),)), $this); ?>

<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.readingTools"), $this);?>
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['defaultCharset']; ?>
" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/common.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/rt.css" type="text/css" />
	<?php $_from = $this->_tpl_vars['stylesheets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cssUrl']):
?>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['cssUrl']; ?>
" type="text/css" />
	<?php endforeach; endif; unset($_from); ?>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/js/general.js"></script>
</head>
<body>
<?php echo '
<script type="text/javascript">
<!--
	if (self.blur) { self.focus(); }
// -->
</script>
'; ?>


<?php if (! $this->_tpl_vars['pageTitleTranslated']):  echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['pageTitle']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageTitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageTitleTranslated')); endif; ?>

<div id="container">

<div id="header">
<div id="headerTitle">
<h1><?php if ($this->_tpl_vars['currentJournal'] && $this->_tpl_vars['currentJournal']->getSetting('journalInitials')):  echo $this->_tpl_vars['currentJournal']->getSetting('journalInitials'); ?>
&nbsp;<?php endif;  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.readingTools"), $this);?>
</h1>
</div>
</div>

<div id="body">
<a name="top"></a>

<div id="main">

<?php echo '
<script type="text/javascript">
<!--
	if (self.blur) { self.focus(); }
// -->
</script>
'; ?>


<h2><?php echo $this->_tpl_vars['pageTitleTranslated']; ?>
</h2>

<div id="content">