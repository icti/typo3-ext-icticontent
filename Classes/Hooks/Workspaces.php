<?php

use TYPO3\CMS\Backend\Utility\BackendUtility;

/**
 * Hook into workspaces which is used to show preview
 *
 * @package TYPO3
 * @subpackage tx_icticontent
 */
class Tx_Icticontent_Hooks_Workspaces {

		public function viewSingleRecord($params, $ref) {
				if ($params['table'] === 'tx_icticontent_domain_model_content') {

						$record = $liveRecord = $params['liveRecord'];
						$versionRecord = $params['versionRecord'];
						$table = $params['table'];
						$uid = $params['uid'];

						if ($liveRecord === NULL) {
								$liveRecord = BackendUtility::getLiveVersionOfRecord($table, $uid);
						}
						if ($versionRecord === NULL) {
								$versionRecord = BackendUtility::getRecord($table, $uid);
						}

						$parameters = array(
								'no_cache' => 1,
								'tx_icticontent[controller]' => 'Content',
								'tx_icticontent[action]' => 'show',
								'tx_icticontent[uid_preview]' => $record['uid'],
								'tx_workspaces_web_workspacesworkspaces[previewWS]' => $versionRecord['t3ver_wsid']

						);

						$languageField = $GLOBALS['TCA'][$table]['ctrl']['languageField'];
						if ($versionRecord[$languageField] > 0) {
								$parameters['L'] = $versionRecord[$languageField];
						}

						$additionalParameters = t3lib_div::implodeArrayForUrl('', $parameters, '', FALSE, TRUE);

						$pagesTsConfig = t3lib_BEfunc::getPagesTSconfig($liveRecord['pid']);

						$previewPid = $pagesTsConfig['tx_icticontent.']['singlePid']?$pagesTsConfig['tx_icticontent.']['singlePid']:$liveRecord['pid'];

						return BackendUtility::viewOnClick($previewPid, '', '', '', '', $additionalParameters);
				} else {
						return '';
				}

		}


}