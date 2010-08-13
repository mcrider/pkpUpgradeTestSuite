<?php return array (
  'plugins.importexport.crossref.displayName' => 'CrossRef XML Export Plugin',
  'plugins.importexport.crossref.description' => 'Export article metadata in CrossRef XML format.',
  'plugins.importexport.crossref.export' => 'Export Data',
  'plugins.importexport.crossref.export.issues' => 'Export Issues',
  'plugins.importexport.crossref.export.selectIssue' => 'Select an Issue to export.',
  'plugins.importexport.crossref.export.articles' => 'Export Articles',
  'plugins.importexport.crossref.export.selectArticle' => 'Select Articles to export.',
  'plugins.importexport.crossref.cliUsage' => 'Usage: 
{$scriptName} {$pluginName} [xmlFileName] [journal_path] articles [articleId1] [articleId2] ...
{$scriptName} {$pluginName} [xmlFileName] [journal_path] issue [issueId]',
  'plugins.importexport.crossref.cliError' => 'ERROR:',
  'plugins.importexport.crossref.export.error.issueNotFound' => 'No issue matched the specified issue ID "{$issueId}".',
  'plugins.importexport.crossref.export.error.articleNotFound' => 'No article matched the specified article ID "{$articleId}".',
  'plugins.importexport.crossref.errors.noDOIprefix' => 'A valid DOI prefix must be specified in the Journal Setup in order to use this plugin.',
); ?>