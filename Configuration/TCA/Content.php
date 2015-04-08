<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_icticontent_domain_model_content'] = array(
	'ctrl' => $TCA['tx_icticontent_domain_model_content']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, content_type, short, description, front_image, images, start_date, end_date, city, highlight, images_captions, images_alt_text, is_recurring_event, recurring_type, recurring_interval, videos, geo_locations, keywords, related_page, categories, related_contents, geo_areas, countries, provinces, downloads, links, authors, regions',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, content_type, short, description, front_image, images, start_date, end_date, city, highlight, images_captions, images_alt_text, is_recurring_event, recurring_type, recurring_interval, videos, geo_locations, keywords, related_page, categories, related_contents, geo_areas, countries, provinces, downloads, links, authors, regions,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_icticontent_domain_model_content',
				'foreign_table_where' => 'AND tx_icticontent_domain_model_content.pid=###CURRENT_PID### AND tx_icticontent_domain_model_content.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'content_type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.content_type',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => 'required'
			),
		),
		'short' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.short',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xml:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
			'defaultExtras' => 'richtext[]',
		),
		'front_image' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.front_image',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_icticontent',
				'show_thumbs' => 1,
				'size' => 5,
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'disallowed' => '',
			),
		),
		'images' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.images',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_icticontent',
				'show_thumbs' => 1,
				'size' => 5,
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'disallowed' => '',
			),
		),
		'start_date' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.start_date',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'end_date' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.end_date',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'city' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.city',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'highlight' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.highlight',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'images_captions' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.images_captions',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'images_alt_text' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.images_alt_text',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'is_recurring_event' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.is_recurring_event',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'recurring_type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.recurring_type',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'recurring_interval' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.recurring_interval',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'videos' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.videos',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_icticontent_domain_model_media',
				'foreign_field' => 'content_videos',
				'foreign_sortby' => 'sorting',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapse' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'geo_locations' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.geo_locations',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_icticontent_domain_model_geolocation',
				'MM' => 'tx_icticontent_content_geolocation_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_icticontent_domain_model_geolocation',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'keywords' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.keywords',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_icticontent_domain_model_keyword',
				'MM' => 'tx_icticontent_content_keyword_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_icticontent_domain_model_keyword',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'related_page' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.related_page',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'pages',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'categories' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.categories',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_icticontent_domain_model_category',
				'MM' => 'tx_icticontent_content_category_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_icticontent_domain_model_category',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'related_contents' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.related_contents',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_icticontent_domain_model_content',
				'MM' => 'tx_icticontent_content_content_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_icticontent_domain_model_content',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'geo_areas' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.geo_areas',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_icticontent_domain_model_geoarea',
				'MM' => 'tx_icticontent_content_geoarea_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_icticontent_domain_model_geoarea',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'countries' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.countries',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_icticontent_domain_model_country',
				'MM' => 'tx_icticontent_content_country_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_icticontent_domain_model_country',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'provinces' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.provinces',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_icticontent_domain_model_province',
				'MM' => 'tx_icticontent_content_province_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_icticontent_domain_model_province',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'downloads' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.downloads',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_icticontent_domain_model_media',
				'foreign_field' => 'content_downloads',
				'foreign_sortby' => 'sorting',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapse' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'links' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.links',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_icticontent_domain_model_media',
				'foreign_field' => 'content_links',
				'foreign_sortby' => 'sorting',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapse' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'authors' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.authors',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_icticontent_domain_model_author',
				'MM' => 'tx_icticontent_content_author_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_icticontent_domain_model_author',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'regions' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.regions',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_icticontent_domain_model_region',
				'MM' => 'tx_icticontent_content_region_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_icticontent_domain_model_region',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
	),
);

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder

Tx_Ictiextbase_Helpers_Tca::setSelectTYPO3Pages('tx_icticontent_domain_model_content', 'related_page');
Tx_Ictiextbase_Helpers_Tca::setRenderAsGroup('tx_icticontent_domain_model_content', 'related_page');
Tx_Ictiextbase_Helpers_Tca::setRenderAsGroup('tx_icticontent_domain_model_content', 'related_contents');

Tx_Ictiextbase_Helpers_Tca::setRenderAsCheckboxes('tx_icticontent_domain_model_content', 'keywords');

Tx_Ictiextbase_Helpers_Tca::setForeignTableWhereForAuxTable('tx_icticontent_domain_model_content', 'keywords');
Tx_Ictiextbase_Helpers_Tca::setForeignTableWhereForAuxTable('tx_icticontent_domain_model_content', 'categories');
Tx_Ictiextbase_Helpers_Tca::setForeignTableWhereForAuxTable('tx_icticontent_domain_model_content', 'geo_areas');
Tx_Ictiextbase_Helpers_Tca::setForeignTableWhereForAuxTable('tx_icticontent_domain_model_content', 'countries');
Tx_Ictiextbase_Helpers_Tca::setForeignTableWhereForAuxTable('tx_icticontent_domain_model_content', 'provinces');
Tx_Ictiextbase_Helpers_Tca::setForeignTableWhereForAuxTable('tx_icticontent_domain_model_content', 'geo_locations');
Tx_Ictiextbase_Helpers_Tca::setForeignTableWhereForAuxTable('tx_icticontent_domain_model_content', 'authors');
Tx_Ictiextbase_Helpers_Tca::setForeignTableWhereForAuxTable('tx_icticontent_domain_model_content', 'regions');


$TCA['tx_icticontent_domain_model_content']['columns']['start_date']['config']['default'] = 0;
$TCA['tx_icticontent_domain_model_content']['columns']['end_date']['config']['default'] = 0;
$TCA['tx_icticontent_domain_model_content']['columns']['images']['config']['maxitems'] = 100;

$TCA['tx_icticontent_domain_model_content']['columns']['recurring_type']['config']['items']['0']['0'] = 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.recurring_type.0';
$TCA['tx_icticontent_domain_model_content']['columns']['recurring_type']['config']['items'][] = array('LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.recurring_type.1',1);
$TCA['tx_icticontent_domain_model_content']['columns']['recurring_type']['config']['items'][] = array('LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.recurring_type.2',2);
$TCA['tx_icticontent_domain_model_content']['columns']['recurring_type']['config']['items'][] = array('LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.recurring_type.3',3);
$TCA['tx_icticontent_domain_model_content']['columns']['recurring_type']['config']['items'][] = array('LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.recurring_type.4',4);

$TCA['tx_icticontent_domain_model_content']['palettes']['10'] = array('showitem' => 'recurring_type, recurring_interval');

/*
 *  STI for Content - begin
 */
$TCA['tx_icticontent_domain_model_content']['columns']['content_type']['config']['items'] = array(
	array('LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content.content_type.Tx_Icticontent_Domain_Model_Content', 'Tx_Icticontent_Domain_Model_Content'),
);

$TCA['tx_icticontent_domain_model_content']['types']['Tx_Icticontent_Domain_Model_Content'] = array(
	'showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, 
		name, content_type, short, description, front_image, images, images_captions, images_alt_text, start_date, end_date, 
		
		is_recurring_event;;10, 
		highlight,
		city, videos, downloads, links, 
		geo_locations, keywords, related_page, categories, related_contents, 
		geo_areas, countries, regions, provinces, authors,
		--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'
	);

$TCA['tx_icticontent_domain_model_content']['types']['1'] = 
	$TCA['tx_icticontent_domain_model_content']['types']['Tx_Icticontent_Domain_Model_Content'];
/*
 *  STI for Content - end
 */

Tx_Ictiextbase_Helpers_Tca::setRte('tx_icticontent_domain_model_content', 'description');


global $TYPO3_CONF_VARS;
foreach($TYPO3_CONF_VARS['EXTCONF']['icticontent']['additionalContentTCAIncludes'] as $includeFile){
	include($includeFile);
}
?>