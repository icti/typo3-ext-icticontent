<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'List',
	'Content List'
);

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Single',
	'Content Single'
);

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Filters',
	'Content Filters'
);

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Calendar',
	'Content Calendar'
);

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Rss',
	'Content Rss'
);

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
					'searchFields' => 'name',
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
					'searchFields' => 'name',
					'enablecolumns' => array(
						'disabled' => 'hidden',
						'starttime' => 'starttime',
						'endtime' => 'endtime',
					),
					'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Media.php',
					'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_icticontent_domain_model_media.gif'
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
					'searchFields' => 'name',
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
					'searchFields' => 'name',
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
					'searchFields' => 'name',
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
					'searchFields' => 'name',
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
					'searchFields' => 'name',
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
					'searchFields' => 'name',
					'enablecolumns' => array(
						'disabled' => 'hidden',
						'starttime' => 'starttime',
						'endtime' => 'endtime',
					),
					'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Province.php',
					'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_icticontent_domain_model_province.gif'
				),
			);

			t3lib_extMgm::addLLrefForTCAdescr('tx_icticontent_domain_model_author', 'EXT:icticontent/Resources/Private/Language/locallang_csh_tx_icticontent_domain_model_author.xml');
			t3lib_extMgm::allowTableOnStandardPages('tx_icticontent_domain_model_author');
			$TCA['tx_icticontent_domain_model_author'] = array(
				'ctrl' => array(
					'title'	=> 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_author',
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
					'searchFields' => 'name',
					'enablecolumns' => array(
						'disabled' => 'hidden',
						'starttime' => 'starttime',
						'endtime' => 'endtime',
					),
					'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Author.php',
					'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_icticontent_domain_model_author.gif'
				),
			);

			t3lib_extMgm::addLLrefForTCAdescr('tx_icticontent_domain_model_region', 'EXT:icticontent/Resources/Private/Language/locallang_csh_tx_icticontent_domain_model_region.xml');
			t3lib_extMgm::allowTableOnStandardPages('tx_icticontent_domain_model_region');
			$TCA['tx_icticontent_domain_model_region'] = array(
				'ctrl' => array(
					'title'	=> 'LLL:EXT:icticontent/Resources/Private/Language/locallang_db.xml:tx_icticontent_domain_model_region',
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
					'searchFields' => 'name',
					'enablecolumns' => array(
						'disabled' => 'hidden',
						'starttime' => 'starttime',
						'endtime' => 'endtime',
					),
					'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Region.php',
					'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_icticontent_domain_model_region.gif'
				),
			);

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder


$pluginSignature = str_replace('_','',$_EXTKEY) . '_list';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_list' . '.xml');

$pluginSignature = str_replace('_','',$_EXTKEY) . '_calendar';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_calendar' . '.xml');

$pluginSignature = str_replace('_','',$_EXTKEY) . '_single';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_single' . '.xml');

$pluginSignature = str_replace('_','',$_EXTKEY) . '_rss';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_list' . '.xml');


$TCA['tx_icticontent_domain_model_content']['ctrl']['sortby'] = 'sorting';
$TCA['tx_icticontent_domain_model_content']['ctrl']['type'] = 'content_type';

$TCA['tx_icticontent_domain_model_media']['ctrl']['sortby'] = 'sorting';
$TCA['tx_icticontent_domain_model_media']['ctrl']['type'] = 'media_type';

$TCA['tx_icticontent_domain_model_geolocation']['ctrl']['sortby'] = 'sorting';

$TCA['tx_icticontent_domain_model_category']['ctrl']['default_sortby'] = 'ORDER BY name';


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	mod.web_list.table.tx_icticontent_domain_model_media.hideTable = 1
');
?>