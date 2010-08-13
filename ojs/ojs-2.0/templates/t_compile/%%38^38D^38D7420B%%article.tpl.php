<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:47
         compiled from article/article.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'article/article.tpl', 42, false),array('modifier', 'escape', 'article/article.tpl', 101, false),array('modifier', 'date_format', 'article/article.tpl', 103, false),)), $this); ?>

<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title><?php echo $this->_tpl_vars['article']->getFirstAuthor(true); ?>
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

<div id="body">

<div id="main">

<h2><?php echo $this->_tpl_vars['siteTitle']; ?>
,&nbsp;<?php echo $this->_tpl_vars['issue']->getIssueIdentification(false,true); ?>
</h2>

<div id="navbar">
	<ul class="menu">
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.home"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.about"), $this);?>
</a></li>
		<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/user" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.userHome"), $this);?>
</a></li>
		<?php else: ?>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/login" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.login"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/user/register" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.register"), $this);?>
</a></li>
		<?php endif; ?>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/search" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.search"), $this);?>
</a></li>
		<?php if ($this->_tpl_vars['currentJournal']): ?>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/issue/current" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.current"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/issue/archive" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.archives"), $this);?>
</a></li>
		<?php endif; ?>
		<?php $_from = $this->_tpl_vars['navMenuItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['navItem']):
?>
		<li><a href="<?php if ($this->_tpl_vars['navItem']['isAbsolute']):  echo $this->_tpl_vars['navItem']['url'];  else:  echo $this->_tpl_vars['pageUrl'];  echo $this->_tpl_vars['navItem']['url'];  endif; ?>" target="_parent"><?php if ($this->_tpl_vars['navItem']['isLiteral']):  echo $this->_tpl_vars['navItem']['name'];  else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['navItem']['name']), $this); endif; ?></a></li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>

<div id="breadcrumb">
	<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.home"), $this);?>
</a> &gt;
	<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/issue/view/<?php echo $this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['currentJournal']); ?>
" target="_parent"><?php echo $this->_tpl_vars['issue']->getIssueIdentification(false,true); ?>
</a> &gt;
	<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/article/view/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
" class="current" target="_parent"><?php echo $this->_tpl_vars['article']->getFirstAuthor(true); ?>
</a>
</div>

<div id="content">
<?php if ($this->_tpl_vars['galley']): ?>
	<?php echo $this->_tpl_vars['galley']->getHTMLContents(($this->_tpl_vars['requestPageUrl'])."/viewFile"); ?>

<?php else: ?>

	<h3><?php echo $this->_tpl_vars['article']->getTitle(); ?>
</h3>
	<div><i><?php echo $this->_tpl_vars['article']->getAuthorString(); ?>
</i></div>
	<br />
	<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.abstract"), $this);?>
</h4>
	<br />
	<div><?php echo $this->_tpl_vars['article']->getAbstract(); ?>
</div>
	<br />

	<?php if (( ! $this->_tpl_vars['subscriptionRequired'] || $this->_tpl_vars['article']->getAccessStatus() || $this->_tpl_vars['subscribedUser'] || $this->_tpl_vars['subscribedDomain'] )): ?>
		<?php $this->assign('galleys', $this->_tpl_vars['article']->getGalleys()); ?>
		<?php if ($this->_tpl_vars['galleys']): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.fullText"), $this);?>

			<?php $_from = $this->_tpl_vars['galleys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galleyList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galleyList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['galley']):
        $this->_foreach['galleyList']['iteration']++;
?>
				<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/article/view/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galley']->getGalleyId(); ?>
" class="action" target="_parent"><?php echo $this->_tpl_vars['galley']->getLabel(); ?>
</a>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
	<?php else: ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.fullTextSubscribersOnly"), $this);?>

	<?php endif;  endif; ?>

<?php if ($this->_tpl_vars['comments']): ?>
<div class="separator"></div>
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.commentsOnArticle"), $this);?>
</h4>

<ul>
<?php $_from = $this->_tpl_vars['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
 $this->assign('poster', $this->_tpl_vars['comment']->getUser()); ?>
	<li>
		<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/comment/view/<?php echo $this->_tpl_vars['article']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
/<?php echo $this->_tpl_vars['comment']->getCommentId(); ?>
" target="_parent"><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
		<?php if ($this->_tpl_vars['comment']->getChildCommentCount() == 1):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.oneReply"), $this); elseif ($this->_tpl_vars['comment']->getChildCommentCount() > 0):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.nReplies",'num' => $this->_tpl_vars['comment']->getChildCommentCount()), $this); endif; ?><br/>
		<?php if ($this->_tpl_vars['poster']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.authenticated",'userName' => ((is_array($_tmp=$this->_tpl_vars['comment']->getPosterName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))), $this); elseif ($this->_tpl_vars['comment']->getPosterName()):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.anonymousNamed",'userName' => ((is_array($_tmp=$this->_tpl_vars['comment']->getPosterName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))), $this); else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.anonymous"), $this); endif; ?> (<?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
)
	</li>
<?php endforeach; endif; unset($_from); ?>
</ul>

<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/comment/view/<?php echo $this->_tpl_vars['article']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
" class="action" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.viewAllComments"), $this);?>
</a><?php if ($this->_tpl_vars['enableComments'] == 'unauthenticated' || ( ( $this->_tpl_vars['enableComments'] == 'authenticated' || $this->_tpl_vars['enableComments'] == 'anonymous' ) && $this->_tpl_vars['isUserLoggedIn'] )): ?>&nbsp;|&nbsp;<a class="action" href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/comment/add/<?php echo $this->_tpl_vars['article']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.addComment"), $this);?>
</a><?php endif; ?><br />

<?php endif; ?>

</div>

</div>
</div>
</div>

<?php if ($this->_tpl_vars['defineTermsContextId']): ?>
<script type="text/javascript">
<?php echo '
	// Open "Define Terms" context when double-clicking any text
	function openSearchTermWindow(url) {
		var term;
		if (window.getSelection) {
			term = window.getSelection();
		} else if (document.getSelection) {
			term = document.getSelection();
		} else if(document.selection && document.selection.createRange && document.selection.type.toLowerCase() == \'text\') {
			var range = document.selection.createRange();
			term = range.text;
		}
		openRTWindow(url + \'?defineTerm=\' + term);
	}

	if(document.captureEvents) {
		document.captureEvents(Event.DBLCLICK);
	}
	document.ondblclick = new Function("openSearchTermWindow(\'';  echo $this->_tpl_vars['pageUrl']; ?>
/rt/context/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
/<?php echo $this->_tpl_vars['defineTermsContextId'];  echo '\')");
'; ?>

</script>
<?php endif; ?>

</body>
</html>