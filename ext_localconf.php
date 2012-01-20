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
		'Content' => 'list',
		
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
		'Content' => 'filters',
		
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


if (!is_array($TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['cache_icticontent_contentcache'])) {
    $TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['cache_icticontent_contentcache'] = array(
        'frontend' => 't3lib_cache_frontend_StringFrontend',
        'backend' => 't3lib_cache_backend_DbBackend',
        'options' => array(
            'cacheTable' => 'tx_icticontent_contentcache',
            'tagsTable' => 'tx_icticontent_contentcache_tags',
        ),
    );
}
?>