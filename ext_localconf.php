<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'List',
	array(
		'Content' => 'list',
		
	),
	// non-cacheable actions
	array(
		'Content' => '',
		
	)
);

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Single',
	array(
		'Content' => 'show',
		
	),
	// non-cacheable actions
	array(
		'Content' => '',
		
	)
);

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Filters',
	array(
		'Content' => 'filters',
		
	),
	// non-cacheable actions
	array(
		'Content' => '',
		
	)
);

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Calendar',
	array(
		'Content' => 'calendar',
		
	),
	// non-cacheable actions
	array(
		'Content' => '',
		
	)
);

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder
?>