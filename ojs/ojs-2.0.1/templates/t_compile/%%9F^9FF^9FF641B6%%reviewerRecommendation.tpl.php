<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:04
         compiled from sectionEditor/reviewerRecommendation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/reviewerRecommendation.tpl', 15, false),array('function', 'html_options_translate', 'sectionEditor/reviewerRecommendation.tpl', 27, false),)), $this); ?>

<?php $this->assign('pageTitle', "submission.recommendation");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.enterReviewerRecommendation"), $this);?>
</h3>

<br />

<form method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/enterReviewerRecommendation">
<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['articleId']; ?>
" />
<input type="hidden" name="reviewId" value="<?php echo $this->_tpl_vars['reviewId']; ?>
" />
<table width="100%" class="data">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.recommendation"), $this);?>
</td>
	<td width="80%" class="value">
		<select name="recommendation" size="1" class="selectMenu">
			<?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['reviewerRecommendationOptions']), $this);?>

		</select>
	</td>
</tr>
</table>
<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onClick="document.location.href='<?php echo $this->_tpl_vars['pageUrl']; ?>
/sectionEditor/submissionReview/<?php echo $this->_tpl_vars['articleId']; ?>
';"/></p>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>