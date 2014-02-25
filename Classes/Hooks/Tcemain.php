<?php

/**
 * Hook into tcemain which is used to show preview
 *
 * @package TYPO3
 * @subpackage tx_icticontent
 */
class Tx_Icticontent_Hooks_Tcemain {


		/**
		 * Generate a different preview link     *
		 * @param string $status status
		 * @param string $table table name
		 * @param integer $recordUid id of the record
		 * @param array $fields fieldArray
		 * @param t3lib_TCEmain $parentObject parent Object
		 * @return void
		 */
		public function processDatamap_afterDatabaseOperations($status, $table, $recordUid, array $fields, t3lib_TCEmain $parentObject) {

				// Preview link
				if ($table === 'tx_icticontent_domain_model_content') {

						// direct preview
						if (!is_numeric($recordUid)) {
								$recordUid = $parentObject->substNEWwithIDs[$recordUid];
						}

						if (isset($GLOBALS['_POST']['_savedokview_x']) && !$GLOBALS['BE_USER']->workspace) {
								$pagesTsConfig = t3lib_BEfunc::getPagesTSconfig($GLOBALS['_POST']['popViewId']);
								if ($pagesTsConfig['tx_icticontent.']['singlePid']) {
										$record = t3lib_BEfunc::getRecord('tx_icticontent_domain_model_content', $recordUid);

										$parameters = array(
												'no_cache' => 1,
												'tx_icticontent[controller]' => 'Content',
												'tx_icticontent[action]' => 'show',
												'tx_icticontent[uid_preview]' => $record['uid'],
										);
										if ($record['sys_language_uid'] > 0) {
												if ($record['l10n_parent'] > 0) {
														$parameters['tx_icticontent[uid_preview]'] = $record['l10n_parent'];
												}
												$parameters['L'] = $record['sys_language_uid'];
										}

										$GLOBALS['_POST']['popViewId_addParams'] = t3lib_div::implodeArrayForUrl('', $parameters, '', FALSE, TRUE);
										$GLOBALS['_POST']['popViewId'] = $pagesTsConfig['tx_icticontent.']['singlePid'];
								}
						}
				}
		}

}