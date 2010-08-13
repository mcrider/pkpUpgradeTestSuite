<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:52
         compiled from rt/rt.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'rt/rt.tpl', 37, false),array('modifier', 'truncate', 'rt/rt.tpl', 41, false),)), $this); ?>

<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title><?php echo $this->_tpl_vars['issue']->getFirstAuthor(true); ?>
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['defaultCharset']; ?>
" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
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
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/js/general.js"></script>
</head>
<body>

<div id="container">
<div id="main" style="width: 160px; font-size: 0.7em; padding-top: 1.5em; padding-left: 1em">

<h5><?php echo $this->_tpl_vars['journal']->getSetting('journalInitials'); ?>
<br /><?php echo $this->_tpl_vars['issue']->getIssueIdentification(); ?>
</h5>

<p><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/issue/view/<?php echo $this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['journal']); ?>
" target="_parent" class="rtAction"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</a></p>

<div class="rtSeparator"></div>

<h6><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getTitle())) ? $this->_run_mod_handler('truncate', true, $_tmp, 20) : smarty_modifier_truncate($_tmp, 20)); ?>
</h6>
<p><i><?php echo $this->_tpl_vars['article']->getAuthorString(true); ?>
</i></p>

<div class="rtSeparator"></div>

<br />

<h5><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.readingTools"), $this);?>
</h5>

<?php if ($this->_tpl_vars['journalRt'] && $this->_tpl_vars['journalRt']->getVersion()): ?>
<div class="rtBlock">
	<span class="rtSubtitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.peerReviewed"), $this);?>
</span>
	<ul>
		<?php if ($this->_tpl_vars['galley']): ?><li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/article/view/<?php echo $this->_tpl_vars['articleId']; ?>
" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this);?>
</a></li><?php endif; ?>
		<?php if ($this->_tpl_vars['journalRt']->getAuthorBio()): ?><li><a href="javascript:openRTWindow('<?php echo $this->_tpl_vars['pageUrl']; ?>
/rt/bio/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
');"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.authorBio"), $this);?>
</a></li><?php endif; ?>
		<?php if ($this->_tpl_vars['journalRt']->getCaptureCite()): ?><li><a href="javascript:openRTWindow('<?php echo $this->_tpl_vars['pageUrl']; ?>
/rt/captureCite/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
');"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.captureCitation"), $this);?>
</a></li><?php endif; ?>
		<?php if ($this->_tpl_vars['journalRt']->getViewMetadata()): ?><li><a href="javascript:openRTWindow('<?php echo $this->_tpl_vars['pageUrl']; ?>
/rt/metadata/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
');"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.viewMetadata"), $this);?>
</a></li><?php endif; ?>
		<?php if ($this->_tpl_vars['journalRt']->getSupplementaryFiles() && $this->_tpl_vars['article']->getSuppFiles()): ?><li><a href="javascript:openRTWindow('<?php echo $this->_tpl_vars['pageUrl']; ?>
/rt/suppFiles/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
');"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.suppFiles"), $this);?>
</a></li><?php endif; ?>
		<?php if ($this->_tpl_vars['journalRt']->getPrinterFriendly()): ?><li><a href="<?php if (! $this->_tpl_vars['galley'] || $this->_tpl_vars['galley']->isHtmlGalley()): ?>javascript:openRTWindow('<?php echo $this->_tpl_vars['pageUrl']; ?>
/rt/printerFriendly/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
');<?php else:  echo $this->_tpl_vars['pageUrl']; ?>
/article/download/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galley']->getFileId();  endif; ?>"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.printVersion"), $this);?>
</a></li><?php endif; ?>
		<?php if ($this->_tpl_vars['journalRt']->getDefineTerms()): ?>
			<?php $_from = $this->_tpl_vars['version']->getContexts(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['context']):
?>
				<?php if ($this->_tpl_vars['context']->getDefineTerms()): ?>
					<li><a href="javascript:openRTWindow('<?php echo $this->_tpl_vars['pageUrl']; ?>
/rt/context/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
/<?php echo $this->_tpl_vars['context']->getContextId(); ?>
');"><?php echo $this->_tpl_vars['context']->getTitle(); ?>
</a></li>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['journalRt']->getEmailOthers()): ?>
			<li>
				<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
					<a href="javascript:openRTWindow('<?php echo $this->_tpl_vars['pageUrl']; ?>
/rt/emailColleague/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
');"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.colleague"), $this);?>
</a>
				<?php else: ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.colleague"), $this);?>
&nbsp;*
					<?php $this->assign('needsLoginNote', 1); ?>
				<?php endif; ?>
			</li>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['journalRt']->getAddComment() && ( $this->_tpl_vars['enableComments'] == 'unauthenticated' || ( ( $this->_tpl_vars['enableComments'] == 'authenticated' || $this->_tpl_vars['enableComments'] == 'anonymous' ) && $this->_tpl_vars['isUserLoggedIn'] ) )): ?>
			<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/comment/add/<?php echo $this->_tpl_vars['article']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.addComment"), $this);?>
</a></li>
		<?php elseif ($this->_tpl_vars['enableComments'] == 'authenticated' || $this->_tpl_vars['enableComments'] == 'anonymous'): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.addComment"), $this);?>
&nbsp;*
			<?php $this->assign('needsLoginNote', 1); ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['journalRt']->getEmailAuthor()): ?>
			<li>
				<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
					<a href="javascript:openRTWindow('<?php echo $this->_tpl_vars['pageUrl']; ?>
/rt/emailAuthor/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
');"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.emailAuthor"), $this);?>
</a>
				<?php else: ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.emailAuthor"), $this);?>
&nbsp;*
					<?php $this->assign('needsLoginNote', 1); ?>
				<?php endif; ?>
			</li>
		<?php endif; ?>
	</ul>
</div>
<br />
<?php endif; ?>


<div class="rtBlock">
	<span class="rtSubtitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.relatedItems"), $this);?>
</span>
	<ul>
		<?php $_from = $this->_tpl_vars['version']->getContexts(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['context']):
?>
			<?php if (! $this->_tpl_vars['context']->getDefineTerms()): ?>
				<li><a href="javascript:openRTWindow('<?php echo $this->_tpl_vars['pageUrl']; ?>
/rt/context/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
/<?php echo $this->_tpl_vars['context']->getContextId(); ?>
');"><?php echo $this->_tpl_vars['context']->getTitle(); ?>
</a></li>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>

<div class="rtSeparatorThin"></div>

<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewArticle/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
" target="_parent" class="rtAction"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.close"), $this);?>
</a>

<?php if ($this->_tpl_vars['needsLoginNote']): ?>
<p><i style="font-size: 0.9em"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.email.needLogin",'pageUrl' => $this->_tpl_vars['pageUrl']), $this);?>
</i></p>
<?php endif; ?>

</div>

</div>

</body>

</html>