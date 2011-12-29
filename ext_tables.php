<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}




t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'ICTI structured content framework');


t3lib_extMgm::addLLrefForTCAdescr('tx_icticontent_domain_model_content', 'EXT:icticontent/Resources/Private/Language/locallang_csh_tx_icticontent_domain_model_content.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_icticontent_domain_model_content');
$TCA['tx_icticontent_domain_model_content'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_content',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Content.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_icticontent_domain_model_content.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_icticontent_domain_model_media', 'EXT:icticontent/Resources/Private/Language/locallang_csh_tx_icticontent_domain_model_media.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_icticontent_domain_model_media');
$TCA['tx_icticontent_domain_model_media'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_media',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Media.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_icticontent_domain_model_media.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_icticontent_domain_model_typo3page', 'EXT:icticontent/Resources/Private/Language/locallang_csh_tx_icticontent_domain_model_typo3page.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_icticontent_domain_model_typo3page');
$TCA['tx_icticontent_domain_model_typo3page'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_typo3page',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Typo3Page.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_icticontent_domain_model_typo3page.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_icticontent_domain_model_geolocation', 'EXT:icticontent/Resources/Private/Language/locallang_csh_tx_icticontent_domain_model_geolocation.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_icticontent_domain_model_geolocation');
$TCA['tx_icticontent_domain_model_geolocation'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_geolocation',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/GeoLocation.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_icticontent_domain_model_geolocation.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_icticontent_domain_model_keyword', 'EXT:icticontent/Resources/Private/Language/locallang_csh_tx_icticontent_domain_model_keyword.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_icticontent_domain_model_keyword');
$TCA['tx_icticontent_domain_model_keyword'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_keyword',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Keyword.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_icticontent_domain_model_keyword.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_icticontent_domain_model_category', 'EXT:icticontent/Resources/Private/Language/locallang_csh_tx_icticontent_domain_model_category.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_icticontent_domain_model_category');
$TCA['tx_icticontent_domain_model_category'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_category',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Category.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_icticontent_domain_model_category.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_icticontent_domain_model_geoarea', 'EXT:icticontent/Resources/Private/Language/locallang_csh_tx_icticontent_domain_model_geoarea.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_icticontent_domain_model_geoarea');
$TCA['tx_icticontent_domain_model_geoarea'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_geoarea',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/GeoArea.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_icticontent_domain_model_geoarea.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_icticontent_domain_model_country', 'EXT:icticontent/Resources/Private/Language/locallang_csh_tx_icticontent_domain_model_country.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_icticontent_domain_model_country');
$TCA['tx_icticontent_domain_model_country'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_country',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Country.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_icticontent_domain_model_country.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_icticontent_domain_model_province', 'EXT:icticontent/Resources/Private/Language/locallang_csh_tx_icticontent_domain_model_province.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_icticontent_domain_model_province');
$TCA['tx_icticontent_domain_model_province'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_province',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Province.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_icticontent_domain_model_province.gif'
	),
);

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder

$TCA['tx_icticontent_domain_model_content']['ctrl']['sortby'] = 'sorting';
$TCA['tx_icticontent_domain_model_content']['ctrl']['type'] = 'content_type';

$TCA['tx_icticontent_domain_model_media']['ctrl']['type'] = 'media_type';

?>