<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:35
         compiled from editor/notifyUsersEmail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'editor/notifyUsersEmail.tpl', 1, false),array('function', 'url', 'editor/notifyUsersEmail.tpl', 57, false),array('modifier', 'strip_tags', 'editor/notifyUsersEmail.tpl', 16, false),array('modifier', 'escape', 'editor/notifyUsersEmail.tpl', 46, false),array('modifier', 'nl2br', 'editor/notifyUsersEmail.tpl', 46, false),array('modifier', 'strip_unsafe_html', 'editor/notifyUsersEmail.tpl', 55, false),array('modifier', 'to_array', 'editor/notifyUsersEmail.tpl', 61, false),)), $this); ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.multipart"), $this);?>


--<?php echo $this->_tpl_vars['mimeBoundary']; ?>

Content-Type: text/plain; charset=<?php echo $this->_tpl_vars['defaultCharset']; ?>

Content-Transfer-Encoding: quoted-printable

<?php echo $this->_tpl_vars['body']; ?>


<?php echo $this->_tpl_vars['issue']->getIssueIdentification(); ?>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>


<?php $_from = $this->_tpl_vars['publishedArticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sections'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sections']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sectionId'] => $this->_tpl_vars['section']):
        $this->_foreach['sections']['iteration']++;
 if ($this->_tpl_vars['section']['title']):  echo $this->_tpl_vars['section']['title'];  endif; ?>
--------
<?php $_from = $this->_tpl_vars['section']['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
 echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp));  if ($this->_tpl_vars['article']->getPages()): ?> (<?php echo $this->_tpl_vars['article']->getPages(); ?>
)<?php endif; ?>

<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authorList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authorList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['author']):
        $this->_foreach['authorList']['iteration']++;
?>
	<?php echo $this->_tpl_vars['author']->getFullName();  if (! ($this->_foreach['authorList']['iteration'] == $this->_foreach['authorList']['total'])): ?>,<?php endif;  endforeach; endif; unset($_from); ?>

<?php endforeach; endif; unset($_from); ?>


<?php endforeach; endif; unset($_from);  echo '{$templateSignature}'; ?>


--<?php echo $this->_tpl_vars['mimeBoundary']; ?>

Content-Type: text/html; charset=<?php echo $this->_tpl_vars['defaultCharset']; ?>

Content-Transfer-Encoding: quoted-printable

<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['defaultCharset']; ?>
" />
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/common.css" type="text/css" />
		<?php $_from = $this->_tpl_vars['stylesheets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cssUrl']):
?>
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['cssUrl']; ?>
" type="text/css" />
		<?php endforeach; endif; unset($_from); ?>
		</head>
	<body>

	<p><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['body'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

		<h3><?php echo $this->_tpl_vars['issue']->getIssueIdentification(); ?>
<br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</h3>
		<?php $_from = $this->_tpl_vars['publishedArticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sections'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sections']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sectionId'] => $this->_tpl_vars['section']):
        $this->_foreach['sections']['iteration']++;
?>
			<?php if ($this->_tpl_vars['section']['title']): ?><h4><?php echo ((is_array($_tmp=$this->_tpl_vars['section']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h4><?php endif; ?>

			<?php $_from = $this->_tpl_vars['section']['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
				<table width="100%">
					<tr>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</td>
						<td align="right">
							<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'author','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal'])), $this);?>
" class="file"><?php if ($this->_tpl_vars['section']['abstractsDisabled']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.details"), $this); else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this); endif; ?></a>
							<?php if (( ! $this->_tpl_vars['subscriptionRequired'] || $this->_tpl_vars['article']->getAccessStatus() || $this->_tpl_vars['subscribedUser'] )): ?>
								<?php $_from = $this->_tpl_vars['article']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galleyList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galleyList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['galley']):
        $this->_foreach['galleyList']['iteration']++;
?>
									&nbsp;
									<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal']))) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getGalleyId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getGalleyId()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
								<?php endforeach; endif; unset($_from); ?>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 30px;font-style: italic;">
							<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authorList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authorList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['author']):
        $this->_foreach['authorList']['iteration']++;
?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  if (! ($this->_foreach['authorList']['iteration'] == $this->_foreach['authorList']['total'])): ?>,<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						</td>
						<td align="right"><?php if ($this->_tpl_vars['article']->getPages()):  echo ((is_array($_tmp=$this->_tpl_vars['article']->getPages())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  else: ?>&nbsp;<?php endif; ?></td>
						</tr>
					</table>
				<?php endforeach; endif; unset($_from); ?>
			<?php if (! ($this->_foreach['sections']['iteration'] == $this->_foreach['sections']['total'])): ?>
				<div class="separator"></div>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		<pre><?php echo '{$templateSignature}'; ?>
</pre>
	</body>
</html>

--<?php echo $this->_tpl_vars['mimeBoundary']; ?>
--