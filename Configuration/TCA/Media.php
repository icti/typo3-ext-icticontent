<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_icticontent_domain_model_media'] = array(
	'ctrl' => $TCA['tx_icticontent_domain_model_media']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, media_type, description, files, url',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, media_type, description, files, url,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
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
				'foreign_table' => 'tx_icticontent_domain_model_media',
				'foreign_table_where' => 'AND tx_icticontent_domain_model_media.pid=###CURRENT_PID### AND tx_icticontent_domain_model_media.sys_language_uid IN (-1,0)',
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
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_media.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'media_type' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_media.media_type',
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
		'description' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_media.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'files' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_media.files',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_icticontent',
				'allowed' => '*',
				'disallowed' => 'php',
				'size' => 5,
			),
		),
		'url' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_media.url',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'content' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder

/*
 *  STI for Media - begin
 */
$TCA['tx_icticontent_domain_model_media']['columns']['media_type']['config']['items'] = array(
	array('LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_media.media_type.Tx_Icticontent_Domain_Model_MediaFile', 'Tx_Icticontent_Domain_Model_MediaFile'),
	array('LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_media.media_type.Tx_Icticontent_Domain_Model_MediaExternal', 'Tx_Icticontent_Domain_Model_MediaExternal'),
);

$TCA['tx_icticontent_domain_model_media']['types']['Tx_Icticontent_Domain_Model_MediaFile'] = array(
	'showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, 
		name, media_type, description, files,
		--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'
	);


$TCA['tx_icticontent_domain_model_media']['types']['1'] = 
	$TCA['tx_icticontent_domain_model_media']['types']['Tx_Icticontent_Domain_Model_MediaFile'];

$TCA['tx_icticontent_domain_model_media']['types']['Tx_Icticontent_Domain_Model_MediaExternal'] = array(
	'showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, 
		name, media_type, description, url,
		--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'
	);

/*
 *  STI for Media - end
 */
?>