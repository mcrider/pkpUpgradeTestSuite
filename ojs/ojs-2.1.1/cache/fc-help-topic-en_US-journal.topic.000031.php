<?php return array (
  'topic' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
        'id' => 'journal/topic/000031',
        'locale' => 'en_US',
        'title' => 'Import/Export Data',
        'toc' => 'journal/toc/000001',
        'key' => 'journal.managementPages.importExport',
      ),
      'value' => '',
    ),
  ),
  'section' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
      ),
      'value' => '<p>The Import/Export Data feature, available from Journal Management, allows the Journal Manager to inject data into and extract data from OJS.</p><p>Data import/export is implemented using plugins, with each format or type of data being provided by a different plugin. For specific information, refer to each plugin\'s documentation.</p><p>Three Import/Export plugins ship with OJS: the Articles &amp; Issues XML Plugin, the Users XML Plugin, and the Erudit Article Export Plugin. These are documented below.</p><p>Import/export functionality is also available as a command-line tool; see tools/importExport.php for more information.</p>',
    ),
    1 => 
    array (
      'attributes' => 
      array (
        'title' => 'Articles & Issues XML Plugin',
      ),
      'value' => '<p>The Articles &amp; Issues XML Plugin is the primary method for batch import and export. It can be used to import and export single articles, multiple articles, single issues, and multiple issues, including comprehensive metadata. For information on this plugin, see the XML DTD in "plugins/importexport/native/native.dtd".</p>',
    ),
    2 => 
    array (
      'attributes' => 
      array (
        'title' => 'Users XML Plugin',
      ),
      'value' => '<p>The Users XML Plugin can be used to import and export users and their roles. See the XML DTD in "plugins/importexport/users/users.dtd" for more information.</p>',
    ),
    3 => 
    array (
      'attributes' => 
      array (
        'title' => 'Erudit Article Export Plugin',
      ),
      'value' => '<p>The Erudit Article Export Plugin implements single-article export for full-text indexing using Erudit\'s XML DTD. See <a href="http://www.erudit.org">http://www.erudit.org</a> for more information.</p>',
    ),
  ),
); ?>