<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:02
         compiled from rt/context.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'rt/context.tpl', 65, false),array('modifier', 'escape', 'rt/context.tpl', 80, false),array('modifier', 'trim', 'rt/context.tpl', 89, false),)), $this); ?>

<?php $this->assign('pageTitleTranslated', $this->_tpl_vars['context']->getTitle()); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rt/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
<?php echo '
	function addKeywords(formIndex) {
		var termsGet = \'\';
		var termsPost = \'\';

		var searchForm = document.forms[formIndex];

		// Get a list of search terms
		var elements = document.terms.elements;
		for (var i=0; i<elements.length; i++) {
			if (elements[i].type==\'text\') {
				var value = elements[i].value;

				if (value != \'\' && (i==0 || elements[i-1].type!=\'checkbox\' || elements[i-1].checked)) {
					if (termsGet != \'\') {
						termsGet += \'+AND+\';
						termsPost += \' AND \';
					}
					termsGet += value.replace(/ /g,\'+\');
					termsPost += value;
				}
			}
		}

		// Add the search terms to the action URL if necessary
		var oldAction = searchForm.action;
		searchForm.action = oldAction.replace(/KEYWORDS_HERE/g, termsGet);

		// Add the search terms to the POST fields if necessary
		elements = searchForm.elements;
		for (var i=0; i<elements.length; i++) {
			if (elements[i].type==\'hidden\' && elements[i].value==\'KEYWORDS_HERE\') {
				elements[i].value = termsPost;
			}
		}

		// Submit the form via POST or GET as appropriate.
		if (searchForm.method==\'post\') searchForm.submit();
		else document.location = searchForm.action;
		return true;
	}
'; ?>

</script>

<h3>"<?php echo $this->_tpl_vars['article']->getArticleTitle(); ?>
"</h3>

<form name="terms">

<p><?php if ($this->_tpl_vars['context']->getDefineTerms()):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.context.defineTermsDescription"), $this); elseif ($this->_tpl_vars['context']->getAuthorTerms()):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.context.authorTermsDescription"), $this); else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.context.searchDescription"), $this); endif; ?></p>

<table class="data" width="100%">
	<?php if ($this->_tpl_vars['context']->getDefineTerms()): ?>
		<tr valign="top">
			<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.context.termToDefine"), $this);?>
</td>
			<td width="80%" class="value"><input name="searchTerm" value="<?php echo $this->_tpl_vars['defineTerm']; ?>
" length="40" class="textField" />
		</tr>
	<?php elseif ($this->_tpl_vars['context']->getAuthorTerms()): ?>
		<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['author']):
?>
			<tr valign="top">
				<td width="20%" class="label" align="right">
					<input type="checkbox" checked="checked" style="checkbox" name="searchTerm<?php echo $this->_tpl_vars['key']+1; ?>
Check" value="1" />
				</td>
				<td width="80%" class="value">
					<input name="searchTerm<?php echo $this->_tpl_vars['key']+1; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" length="40" class="textField" />
				</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
	<?php else: ?>
		<tr valign="top">
			<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.context.searchTerms"), $this);?>
</td>
			<td width="80%" class="value">
				<?php $_from = $this->_tpl_vars['keywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['keywords'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['keywords']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['keyword']):
        $this->_foreach['keywords']['iteration']++;
?>
					<input name="searchTerm<?php echo $this->_tpl_vars['key']+1; ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['keyword'])) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" length="40" class="textField" />
					<?php if (! ($this->_foreach['keywords']['iteration'] == $this->_foreach['keywords']['total'])):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.context.and"), $this); endif; ?>
					<br />
				<?php endforeach; endif; unset($_from); ?>
			</td>
		</tr>
	<?php endif; ?>
</table>

</form>

<div class="separator"></div>

<table class="listing" width="100%">
	<?php $_from = $this->_tpl_vars['searches']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['searches'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['searches']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['search']):
        $this->_foreach['searches']['iteration']++;
?>
	<form name="search<?php echo $this->_tpl_vars['key']+1; ?>
form" method="<?php if ($this->_tpl_vars['search']->getSearchPost()): ?>post<?php else: ?>get<?php endif; ?>" action="<?php echo ((is_array($_tmp=$this->_tpl_vars['search']->getSearchUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  if (! $this->_tpl_vars['search']->getSearchPost()): ?>KEYWORDS_HERE<?php endif; ?>">
	<?php $_from = $this->_tpl_vars['search']->postParams; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['postParam']):
?>
		<input type="hidden" name="<?php echo $this->_tpl_vars['postParam']['name']; ?>
" value="<?php if ($this->_tpl_vars['postParam']['needsKeywords']): ?>KEYWORDS_HERE<?php else:  echo $this->_tpl_vars['postParam']['value'];  endif; ?>" />
	<?php endforeach; endif; unset($_from); ?>
	<tr valign="top">
		<td width="10%">
			<input value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
" type="button" onClick="addKeywords(<?php echo $this->_tpl_vars['key']+1; ?>
);" class="button" />
		</td>
		<td width="2%"><?php echo $this->_tpl_vars['key']+1; ?>
.</td>
		<td width="88%"><?php echo $this->_tpl_vars['search']->getTitle(); ?>
 <a target="_new" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['search']->getUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.about"), $this);?>
</a></td>
	</tr>
	<tr><td colspan="3" class="<?php if (($this->_foreach['searches']['iteration'] == $this->_foreach['searches']['total'])): ?>end<?php endif; ?>separator">&nbsp;</td></tr>
	</form>
	<?php endforeach; endif; unset($_from); ?>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rt/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>