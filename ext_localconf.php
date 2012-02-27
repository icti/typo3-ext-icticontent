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

$TYPO3_CONF_VARS['EXTCONF']['icticontent']['additionalContentTCAIncludes'] = array();




$realURLTmp = array(

		'postVarSets' => array(
			'_DEFAULT' => array(
				'ic' => array(
					array(
						'GETvar' => 'tx_icticontent[content]',
						'lookUpTable' => array(
                            'autoUpdate' => true,
							'table' => 'tx_icticontent_domain_model_content',
							'id_field' => 'uid',
							'alias_field' => 'name',
							'addWhereClause' => ' AND NOT deleted',
							'useUniqueCache' => 1,
							'useUniqueCache_conf' => array(
								'strtolower' => 1,
								'spaceCharacter' => '-',
								),
							),
						),
																														
					),
				
				'icac' => array(
																		
					array(
						'GETvar' => 'tx_icticontent[action]' ,
						//'noMatch' => 'null',
						),		
					array(
						'GETvar' => 'tx_icticontent[controller]' ,
						//'noMatch' => 'null',
						),												
					),				
                
				'ickeyword' => array(
					array(
						'GETvar' => 'tx_icticontent[filterKeyword]',
						'lookUpTable' => array(
                            'autoUpdate' => true,
							'table' => 'tx_icticontent_domain_model_keyword',
							'id_field' => 'uid',
							'alias_field' => 'name',
							'addWhereClause' => ' AND NOT deleted',
							'useUniqueCache' => 1,
							'useUniqueCache_conf' => array(
								'strtolower' => 1,
								'spaceCharacter' => '-',
								),
							),
						),
																													
					),   
                
                
				'icpage' => array(
					array(
						'GETvar' => 'tx_icticontent[__widget_0][currentPage]',
						),
																			                    
					),  
				
				'iccal' => array(
					array(
						'GETvar' => 'tx_icticontent[filterYear]',
						),
					
					array(
						'GETvar' => 'tx_icticontent[filterMonth]',
						),					
																				                    
					), 				
                
   
              

				),
			),
);





if(is_array($TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT'])){
	$TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT'] = array_merge_recursive($TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT'], $realURLTmp);
}
else {
	$TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT'] = $realURLTmp;
}

?>