<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:30
         compiled from issue/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'issue/header.tpl', 20, false),array('function', 'display_template', 'issue/header.tpl', 57, false),array('function', 'url', 'issue/header.tpl', 62, false),array('modifier', 'escape', 'issue/header.tpl', 38, false),)), $this); ?>

<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['defaultCharset']; ?>
" />
	<title><?php echo $this->_tpl_vars['issueTitle'];  if ($this->_tpl_vars['issue'] && ! $this->_tpl_vars['issue']->getPublished()): ?> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.preview"), $this); endif; ?></title>
	<meta name="description" content="<?php echo $this->_tpl_vars['metaSearchDescription']; ?>
" />
	<meta name="keywords" content="<?php echo $this->_tpl_vars['metaSearchKeywords']; ?>
" />
	<?php echo $this->_tpl_vars['metaCustomHeaders']; ?>

	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/common.css" type="text/css" />
	<?php $_from = $this->_tpl_vars['stylesheets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cssUrl']):
?>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['cssUrl']; ?>
" type="text/css" />
	<?php endforeach; endif; unset($_from); ?>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/js/general.js"></script>
	<?php echo $this->_tpl_vars['additionalHeadData']; ?>

</head>
<body>
<div id="container">

<div id="header">
<div id="headerTitle">
<h1>
<?php if ($this->_tpl_vars['displayPageHeaderLogo']): ?>
	<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderLogo']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" width="<?php echo $this->_tpl_vars['displayPageHeaderLogo']['width']; ?>
" height="<?php echo $this->_tpl_vars['displayPageHeaderLogo']['height']; ?>
" border="0" alt="" />
<?php endif;  if ($this->_tpl_vars['displayPageHeaderTitle'] && is_array ( $this->_tpl_vars['displayPageHeaderTitle'] )): ?>
	<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderTitle']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" width="<?php echo $this->_tpl_vars['displayPageHeaderTitle']['width']; ?>
" height="<?php echo $this->_tpl_vars['displayPageHeaderTitle']['height']; ?>
" border="0" alt="" />
<?php elseif ($this->_tpl_vars['displayPageHeaderTitle']): ?>
	<?php echo $this->_tpl_vars['displayPageHeaderTitle']; ?>

<?php elseif ($this->_tpl_vars['alternatePageHeader']): ?>
	<?php echo $this->_tpl_vars['alternatePageHeader']; ?>

<?php elseif ($this->_tpl_vars['siteTitle']): ?>
	<?php echo $this->_tpl_vars['siteTitle']; ?>

<?php else: ?>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.openJournalSystems"), $this);?>

<?php endif; ?>
</h1>
</div>
</div>

<div id="body">

<?php echo $this->_plugins['function']['display_template'][0][0]->smartyDisplayTemplate(array('template' => "common/sidebar.tpl",'hookname' => "Templates::Common::Header::sidebar"), $this);?>


<div id="main">
<div id="navbar">
	<ul class="menu">
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'index'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.home"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.about"), $this);?>
</a></li>
		<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.userHome"), $this);?>
</a></li>
		<?php else: ?>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.login"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'register'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.register"), $this);?>
</a></li>
		<?php endif; ?>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'search'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.search"), $this);?>
</a></li>
		<?php if ($this->_tpl_vars['currentJournal']): ?>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'current'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.current"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'archive'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.archives"), $this);?>
</a></li>
		<?php endif; ?>
		<?php $_from = $this->_tpl_vars['navMenuItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['navItem']):
?>
		<li><a href="<?php if ($this->_tpl_vars['navItem']['isAbsolute']):  echo ((is_array($_tmp=$this->_tpl_vars['navItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  else:  echo ((is_array($_tmp=$this->_tpl_vars['navItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif; ?>"><?php if ($this->_tpl_vars['navItem']['isLiteral']):  echo ((is_array($_tmp=$this->_tpl_vars['navItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['navItem']['name']), $this); endif; ?></a></li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>

<div id="breadcrumb">
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'index'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.home"), $this);?>
</a> &gt;
	<?php $_from = $this->_tpl_vars['pageHierarchy']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['hierarchyLink']):
?>
		<a href="<?php echo $this->_tpl_vars['hierarchyLink'][0]; ?>
" class="hierarchyLink"><?php if (! $this->_tpl_vars['hierarchyLink'][2]):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['hierarchyLink'][1]), $this); else:  echo $this->_tpl_vars['hierarchyLink'][1];  endif; ?></a> &gt;
	<?php endforeach; endif; unset($_from); ?>
	<a href="<?php echo $this->_tpl_vars['currentUrl']; ?>
" class="current"><?php echo $this->_tpl_vars['issueCrumbTitle']; ?>
</a>
</div>

<h2><?php echo $this->_tpl_vars['issueTitle'];  if ($this->_tpl_vars['issue'] && ! $this->_tpl_vars['issue']->getPublished()): ?> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.preview"), $this); endif; ?></h2>

<?php if ($this->_tpl_vars['issue'] && $this->_tpl_vars['issue']->getTitle() && $this->_tpl_vars['issue']->getLabelFormat() != ISSUE_LABEL_TITLE): ?>
		<h3><?php echo $this->_tpl_vars['issue']->getTitle(); ?>
</h3>
<?php endif; ?>

<div id="content">