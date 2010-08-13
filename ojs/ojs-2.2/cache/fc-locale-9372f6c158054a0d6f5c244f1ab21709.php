<?php return array (
  'plugins.gateways.googleScholar.displayName' => 'Google Scholar Gateway Plugin',
  'plugins.gateways.googleScholar.description' => 'This plugin provides live data about a particular journal to Google Scholar for indexing and searching.',
  'plugins.gateways.googleScholar.settings' => 'Settings',
  'plugins.gateways.googleScholar.settings.description' => '<p>The Google Scholar Gateway Plugin makes data available to the Google Scholar harvester on a per-journal basis. When this plugin is enabled, the directory document (aka publisher\'s information) will be available at <span class="highlight">{$directoryUrl}</span>.</p>
<p>Google Scholar requires certain pieces of information that are optional in OJS. Please ensure that your data conforms to Google Scholar\'s requirements using the Check Data button.</p>',
  'plugins.gateways.googleScholar.checkData' => 'Check Data',
  'plugins.gateways.googleScholar.errors' => 'Error Messages',
  'plugins.gateways.googleScholar.errors.noErrors' => 'No errors were found.',
  'plugins.gateways.googleScholar.settings.publisherName' => 'Publisher Name',
  'plugins.gateways.googleScholar.settings.publisherLocation' => 'Publisher Location',
  'plugins.gateways.googleScholar.settings.publisherResultName' => 'Publisher Result Name',
  'plugins.gateways.googleScholar.settings.contact' => 'Contact Email',
  'plugins.gateways.googleScholar.settings.addContact' => 'Add Contact Email',
  'plugins.gateways.googleScholar.errors.noPublisherName' => 'The publisher name was not specified. This is a required field.',
  'plugins.gateways.googleScholar.errors.noContacts' => 'Contact emails are missing or invalid. At least one must be specified, and all must be valid.',
  'plugins.gateways.googleScholar.errors.noIssn' => 'The journal\'s ISSN was not specified. See Journal Setup, step 1.',
  'plugins.gateways.googleScholar.errors.errorMessage' => 'Unable to export Google Scholar data. The Google Scholar export plugin needs to be properly configured. For specific information, please use the Journal Manager\'s "Check Data" function.',
); ?>