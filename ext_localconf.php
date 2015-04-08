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

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Rss',
	array(
		'Content' => 'rss',
		
	),
	// non-cacheable actions
	array(
		'Content' => '',
	)
);

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder



$TYPO3_CONF_VARS['EXTCONF']['icticontent']['additionalContentTCAIncludes'] = array();

if (t3lib_extMgm::isLoaded('realurl')) {
		$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration'][$_EXTKEY] =
				'EXT:' . $_EXTKEY . '/Classes/Hooks/RealUrlAutoConfiguration.php:Tx_Icticontent_Hooks_RealUrlAutoConfiguration->addConfig';
}

// Preview of records
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][$_EXTKEY] =
	'EXT:' . $_EXTKEY . '/Classes/Hooks/Tcemain.php:Tx_Icticontent_Hooks_Tcemain';
?>
