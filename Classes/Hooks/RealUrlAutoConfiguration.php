<?php

class Tx_Icticontent_Hooks_RealUrlAutoConfiguration {
		public function addConfig($params, &$pObj) {

				return array_merge_recursive($params['config'], array(

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
												),		
												array(
														'GETvar' => 'tx_icticontent[controller]' ,
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
										'iccat' => array(
												array(
														'GETvar' => 'tx_icticontent[filterCategory]',
														'lookUpTable' => array(
                        				'autoUpdate' => true,
																'table' => 'tx_icticontent_domain_model_category',
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
				));
		}
}

?>