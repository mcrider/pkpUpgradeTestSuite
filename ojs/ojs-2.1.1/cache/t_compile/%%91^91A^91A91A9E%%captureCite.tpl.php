<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:34
         compiled from rt/captureCite.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'rt/captureCite.tpl', 17, false),array('function', 'translate', 'rt/captureCite.tpl', 29, false),array('modifier', 'to_array', 'rt/captureCite.tpl', 17, false),array('modifier', 'assign', 'rt/captureCite.tpl', 17, false),array('modifier', 'strip_unsafe_html', 'rt/captureCite.tpl', 22, false),array('modifier', 'count', 'rt/captureCite.tpl', 26, false),array('modifier', 'escape', 'rt/captureCite.tpl', 29, false),array('modifier', 'date_format', 'rt/captureCite.tpl', 32, false),array('modifier', 'trim', 'rt/captureCite.tpl', 42, false),)), $this); ?>

<?php $this->assign('pageTitle', "rt.captureCite"); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rt/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['galleyId']): ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'articleUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'articleUrl'));?>

<?php else: ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['articleId']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'articleUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'articleUrl'));?>

<?php endif; ?>

<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</h3>

<?php if ($this->_tpl_vars['bibFormat'] == 'MLA'): ?>
	<?php $this->assign('authors', $this->_tpl_vars['article']->getAuthors()); ?>
	<?php $this->assign('authorCount', count($this->_tpl_vars['authors'])); ?>
	<?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
?>
		<?php $this->assign('firstName', $this->_tpl_vars['author']->getFirstName()); ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  if ($this->_tpl_vars['i'] == $this->_tpl_vars['authorCount']-2): ?>, <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.context.and"), $this);?>
 <?php elseif ($this->_tpl_vars['i'] < $this->_tpl_vars['authorCount']-1): ?>, <?php else: ?>.<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>

	"<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
" <i><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</i> [<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.captureCite.online"), $this);?>
], <?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getVolume())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%e %b %Y') : smarty_modifier_date_format($_tmp, '%e %b %Y')); ?>


<?php elseif ($this->_tpl_vars['bibFormat'] == 'Turabian'): ?>
	<?php $this->assign('authors', $this->_tpl_vars['article']->getAuthors()); ?>
	<?php $this->assign('authorCount', count($this->_tpl_vars['authors'])); ?>
	<?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
?>
		<?php $this->assign('firstName', $this->_tpl_vars['author']->getFirstName()); ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  if ($this->_tpl_vars['i'] == $this->_tpl_vars['authorCount']-2): ?>, <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.context.and"), $this);?>
 <?php elseif ($this->_tpl_vars['i'] < $this->_tpl_vars['authorCount']-1): ?>, <?php else: ?>.<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>

	"<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
" <i><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</i> [<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.captureCite.online"), $this);?>
], <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.volume"), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getVolume())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.number"), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getNumber())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 (<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%e %B %Y') : smarty_modifier_date_format($_tmp, '%e %B %Y')))) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)); ?>
)

<?php elseif ($this->_tpl_vars['bibFormat'] == 'CBE'): ?>
	<?php $this->assign('authors', $this->_tpl_vars['article']->getAuthors()); ?>
	<?php $this->assign('authorCount', count($this->_tpl_vars['authors'])); ?>
	<?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
?>
		<?php $this->assign('firstName', $this->_tpl_vars['author']->getFirstName()); ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'][0])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
.<?php if ($this->_tpl_vars['i'] == $this->_tpl_vars['authorCount']-2): ?>, &amp; <?php elseif ($this->_tpl_vars['i'] < $this->_tpl_vars['authorCount']-1): ?>, <?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>

	<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y %b %e') : smarty_modifier_date_format($_tmp, '%Y %b %e')); ?>
. <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
. <?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
. [<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.captureCite.online"), $this);?>
] <?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getVolume())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
:<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getNumber())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>


<?php elseif ($this->_tpl_vars['bibFormat'] == 'BibTeX'): ?>

<?php echo '
<pre style="font-size: 1.5em;">@article{{';  echo ((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('journalInitials'))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  echo '}{';  echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  echo '},
	author = {';  $this->assign('authors', $this->_tpl_vars['article']->getAuthors());  $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
 echo ((is_array($_tmp=$this->_tpl_vars['author']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
, <?php $this->assign('firstName', $this->_tpl_vars['author']->getFirstName());  $this->assign('authorCount', count($this->_tpl_vars['authors']));  echo ((is_array($_tmp=$this->_tpl_vars['firstName'][0])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
.<?php if ($this->_tpl_vars['i'] < $this->_tpl_vars['authorCount']-1): ?>, <?php endif;  endforeach; endif; unset($_from);  echo '},
	title = {';  echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp));  echo '},
	journal = {';  echo ((is_array($_tmp=$this->_tpl_vars['journal']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  echo '},
	volume = {';  echo ((is_array($_tmp=$this->_tpl_vars['issue']->getVolume())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  echo '},
	number = {';  echo ((is_array($_tmp=$this->_tpl_vars['issue']->getNumber())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  echo '},
	year = {';  echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y'));  echo '},
';  $this->assign('issn', ((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('issn'))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)));  if ($this->_tpl_vars['issn']):  echo '	issn = {';  echo $this->_tpl_vars['issn'];  echo '},';  endif;  echo '
	url = {';  echo $this->_tpl_vars['articleUrl'];  echo '}
}
</pre>
'; ?>


<?php elseif ($this->_tpl_vars['bibFormat'] == 'ABNT'): ?>

	<?php $this->assign('authors', $this->_tpl_vars['article']->getAuthors()); ?>
	<?php $this->assign('authorCount', count($this->_tpl_vars['authors'])); ?>
	<?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
?>
		<?php $this->assign('firstName', $this->_tpl_vars['author']->getFirstName()); ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'][0])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
.<?php if ($this->_tpl_vars['i'] < $this->_tpl_vars['authorCount']-1): ?>; <?php endif;  endforeach; endif; unset($_from); ?>.
	<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
.
	<b><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b>, <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.captureCite.acaoLocation"), $this);?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getVolume())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

	<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%e %m %Y') : smarty_modifier_date_format($_tmp, '%e %m %Y')); ?>
.

<?php else: ?>
	<?php $this->assign('authors', $this->_tpl_vars['article']->getAuthors()); ?>
	<?php $this->assign('authorCount', count($this->_tpl_vars['authors'])); ?>
	<?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
?>
		<?php $this->assign('firstName', $this->_tpl_vars['author']->getFirstName()); ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'][0])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
.<?php if ($this->_tpl_vars['i'] == $this->_tpl_vars['authorCount']-2): ?>, &amp; <?php elseif ($this->_tpl_vars['i'] < $this->_tpl_vars['authorCount']-1): ?>, <?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>

	<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y %b %e') : smarty_modifier_date_format($_tmp, '%Y %b %e')); ?>
.
	<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
.
	<i><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</i> [<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.captureCite.online"), $this);?>
] <?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getVolume())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
:<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getNumber())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
.
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.captureCite.available"), $this);?>
 <a target="_new" href="<?php echo $this->_tpl_vars['articleUrl']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['articleUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
<?php endif; ?>

<br />
<br />

<div class="separator"></div>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.captureCite.capture"), $this);?>
</h3>
<ul>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'captureCite','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId'], 'endNote') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId'], 'endNote'))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

	<li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.captureCite.capture.endNote",'url' => $this->_tpl_vars['url']), $this);?>
</li>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'captureCite','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId'], 'referenceManager') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId'], 'referenceManager'))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

	<li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.captureCite.capture.referenceManager",'url' => $this->_tpl_vars['url']), $this);?>
</li>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'captureCite','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId'], 'proCite') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId'], 'proCite'))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

	<li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.captureCite.capture.proCite",'url' => $this->_tpl_vars['url']), $this);?>
</li>
</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rt/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>