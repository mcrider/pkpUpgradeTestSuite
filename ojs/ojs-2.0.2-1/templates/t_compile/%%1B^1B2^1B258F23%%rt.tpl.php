<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:18
         compiled from rt/rt.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'rt/rt.tpl', 19, false),array('modifier', 'truncate', 'rt/rt.tpl', 44, false),array('function', 'translate', 'rt/rt.tpl', 40, false),array('function', 'html_options_translate', 'rt/rt.tpl', 123, false),)), $this); ?>

<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getFirstAuthor(true))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
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
	<?php if ($this->_tpl_vars['pageStyleSheet']): ?>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo $this->_tpl_vars['pageStyleSheet']['uploadName']; ?>
" type="text/css" />
	<?php endif; ?>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/js/general.js"></script>
</head>
<body>

<div id="container">
<div id="main" style="width: 150px; font-size: 0.7em; padding-top: 1.5em; padding-left: 1em">

<h5><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('journalInitials'))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<br /><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h5>

<p><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/issue/view/<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['journal']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" target="_parent" class="rtAction"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</a></p>

<div class="rtSeparator"></div>

<h6><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('truncate', true, $_tmp, 20) : smarty_modifier_truncate($_tmp, 20)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h6>
<p><i><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getAuthorString(true))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</i></p>

<div class="rtSeparator"></div>

<br />

<h5><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.readingTools"), $this);?>
</h5>

<?php if ($this->_tpl_vars['journalRt'] && $this->_tpl_vars['journalRt']->getVersion()): ?>
<div class="rtBlock">
	<span class="rtSubtitle"><?php if ($this->_tpl_vars['section'] && $this->_tpl_vars['section']->getIdentifyType()):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.forThis",'identifyType' => ((is_array($_tmp=$this->_tpl_vars['section']->getIdentifyType())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))), $this); else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.peerReviewed"), $this); endif; ?></span>
	<ul>
		<?php if ($this->_tpl_vars['galley'] && ! $this->_tpl_vars['section']->getAbstractsDisabled()): ?><li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/article/view/<?php echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this);?>
</a></li><?php endif; ?>
		<?php if ($this->_tpl_vars['journalRt']->getAuthorBio()): ?><li><a href="javascript:openRTWindow('<?php echo $this->_tpl_vars['pageUrl']; ?>
/rt/bio/<?php echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
');"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.authorBio"), $this);?>
</a></li><?php endif; ?>
		<?php if ($this->_tpl_vars['journalRt']->getCaptureCite()): ?><li><a href="javascript:openRTWindow('<?php echo $this->_tpl_vars['pageUrl']; ?>
/rt/captureCite/<?php echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
');"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.captureCitation"), $this);?>
</a></li><?php endif; ?>
		<?php if ($this->_tpl_vars['journalRt']->getViewMetadata()): ?><li><a href="javascript:openRTWindow('<?php echo $this->_tpl_vars['pageUrl']; ?>
/rt/metadata/<?php echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
');"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.viewMetadata"), $this);?>
</a></li><?php endif; ?>
		<?php if ($this->_tpl_vars['journalRt']->getSupplementaryFiles() && $this->_tpl_vars['article']->getSuppFiles()): ?><li><a href="javascript:openRTWindow('<?php echo $this->_tpl_vars['pageUrl']; ?>
/rt/suppFiles/<?php echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
');"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.suppFiles"), $this);?>
</a></li><?php endif; ?>
		<?php if ($this->_tpl_vars['journalRt']->getPrinterFriendly()): ?><li><a href="<?php if (! $this->_tpl_vars['galley'] || $this->_tpl_vars['galley']->isHtmlGalley()): ?>javascript:openRTWindow('<?php echo $this->_tpl_vars['pageUrl']; ?>
/rt/printerFriendly/<?php echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
');<?php else:  echo $this->_tpl_vars['pageUrl']; ?>
/article/download/<?php echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
/<?php echo $this->_tpl_vars['galley']->getFileId();  endif; ?>"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.printVersion"), $this);?>
</a></li><?php endif; ?>
		<?php if ($this->_tpl_vars['journalRt']->getDefineTerms()): ?>
			<?php $_from = $this->_tpl_vars['version']->getContexts(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['context']):
?>
				<?php if ($this->_tpl_vars['context']->getDefineTerms()): ?>
					<li><a href="javascript:openRTWindow('<?php echo $this->_tpl_vars['pageUrl']; ?>
/rt/context/<?php echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
/<?php echo $this->_tpl_vars['context']->getContextId(); ?>
');"><?php echo ((is_array($_tmp=$this->_tpl_vars['context']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['journalRt']->getEmailOthers()): ?>
			<li>
				<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
					<a href="javascript:openRTWindow('<?php echo $this->_tpl_vars['pageUrl']; ?>
/rt/emailColleague/<?php echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
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
		<?php if ($this->_tpl_vars['journalRt']->getAddComment() && $this->_tpl_vars['postingAllowed']): ?>
			<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/comment/add/<?php echo $this->_tpl_vars['article']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.addComment"), $this);?>
</a></li>
		<?php elseif (! $this->_tpl_vars['postingDisabled']): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.addComment"), $this);?>
&nbsp;*
			<?php $this->assign('needsLoginNote', 1); ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['journalRt']->getEmailAuthor()): ?>
			<li>
				<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
					<a href="javascript:openRTWindow('<?php echo $this->_tpl_vars['pageUrl']; ?>
/rt/emailAuthor/<?php echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
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
/rt/context/<?php echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
/<?php echo $this->_tpl_vars['context']->getContextId(); ?>
');"><?php echo ((is_array($_tmp=$this->_tpl_vars['context']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></li>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>

<br />

<div class="rtBlock">
	<span class="rtSubtitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.thisJournal"), $this);?>
</span>
	<form method="get" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/search/results" target="_parent">
	<table>
	<tr>
		<td><input type="text" id="query" name="query" size="15" maxlength="255" value="" class="textField" /></td>
	</tr>
	<tr>
		<td><select name="searchField" size="1" class="selectMenu">
			<?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['articleSearchByOptions']), $this);?>

		</select></td>
	</tr>
	<tr>
		<td><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
" class="button" /></td>
	</tr>
	</table>
	</form>
</div>

<div class="rtSeparatorThin"></div>

<?php if ($this->_tpl_vars['galley']): ?>
	<?php if ($this->_tpl_vars['galley']->isHtmlGalley()): ?>
		<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewArticle/<?php echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
" target="_parent" class="rtAction"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.close"), $this);?>
</a>
	<?php elseif ($this->_tpl_vars['galley']->isPdfGalley()): ?>
		<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewPDFInterstitial/<?php echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
" target="_parent" class="rtAction"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.close"), $this);?>
</a>
	<?php else: ?>
		<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewDownloadInterstitial/<?php echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
" target="_parent" class="rtAction"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.close"), $this);?>
</a>
	<?php endif;  endif; ?>

<?php if ($this->_tpl_vars['needsLoginNote']): ?>
<p><i style="font-size: 0.9em"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.email.needLogin",'pageUrl' => $this->_tpl_vars['pageUrl']), $this);?>
</i></p>
<?php endif; ?>

</div>

</div>

</body>

</html>