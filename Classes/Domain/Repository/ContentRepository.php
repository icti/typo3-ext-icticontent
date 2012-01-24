<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Jose Antonio Guerra <jaguerra@icti.es>, ICTI Internet Passion S.L.
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/


/**
 *
 *
 * @package icticontent
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_Icticontent_Domain_Repository_ContentRepository extends Tx_Extbase_Persistence_Repository {

	
	/**
	 * findByFiltersService
	 *
	 * @return Tx_Extbase_Persistence_QueryResultInterface
	 * @param $filtersService
	 */
	public function findByFiltersService(Tx_IctiContent_Service_FiltersService $filtersService) {	
		$this->initQuery($filtersService);
		
		$this->addCategoryConstraint();
		$this->addNewerDatesConstraint();
		$this->addHighlightConstraint();
		$this->addOrderingFromFilters();
		$this->addKeywordConstraint();
		$this->addGeoAreaConstraint();
		
		return $this->executeQueryWithConstraintArray();
	}
	
	/**
	 *
	 * @param Tx_IctiContent_Service_FiltersService $filtersService
	 * @return type 
	 */
	public function findByCalendarMonth(Tx_IctiContent_Service_FiltersService $filtersService) {
		        
		$this->initQuery($filtersService);
		
		$this->addCalendarMonthConstraint();

		$this->query->setOrderings(array(
			'startDate' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING
				));
		
		return $this->executeQueryWithConstraintArray();
         
	}
	
	
	protected function addCalendarMonthConstraint(){
		
		$year = $this->filtersService->getFilterYear();
		$month = $this->filtersService->getFilterMonth();
		
		if($year && $month){
			
			/*
			 * En el calendario no sólo aparecen los días de este mes sino que para rellenar la tabla
			 * pueden aparecer hasta los últimos 6 del mes pasado y los 6 primeros
			 * del mes siguiente...
			 */			
			$startDate = mktime(0,0,0,$month,-7,$year);
			$endDate = mktime(0,0,0,$month+1,7,$year);			
			
			$this->constraintArr[] = $this->query->greaterThan('startDate', $startDate);
			$this->constraintArr[] = $this->query->lessThan('startDate', $endDate);
			
		}
			
	}	
	
		
	
	
	protected function addCategoryConstraint(){
		if($this->filtersService->getFilterCategory()){
			
			if($this->filtersService->getFilterCategory() instanceof Tx_Icticontent_Domain_Model_Category){
				$this->constraintArr[] = $this->query->contains('categories', $this->filtersService->getFilterCategory());
			} else {
				$constraintArray = array();
				
				foreach( $this->filtersService->getFilterCategory() as $category ){
					$constraintArray[] = $this->query->contains('categories', $category);
				}
				
				$this->constraintArr[] = $this->query->logicalOr($constraintArray);
				
			}
		}
	}
	
	protected function addKeywordConstraint(){
		if($this->filtersService->getFilterKeyword()){
			$this->constraintArr[] = $this->query->contains('keywords', $this->filtersService->getFilterKeyword());
		}
	}	
	
	protected function addNewerDatesConstraint(){
		if($this->filtersService->getFilterNewerDates()){
			$this->constraintArr[] = $this->query->greaterThanOrEqual('startDate', time());
		}
	}	
	
	protected function addHighlightConstraint(){
		if($this->filtersService->getFilterHighlight()){
			$this->constraintArr[] = $this->query->equals('highlight', true);
		}
	}	
	
	protected function addGeoAreaConstraint(){
		if($this->filtersService->getFilterGeoArea()){
			$this->constraintArr[] = $this->query->contains('geoAreas', $this->filtersService->getFilterGeoArea());
		}
	}	
	
	protected function addOrderingFromFilters(){
		if($this->filtersService->getFilterOrderBy()){

            switch($this->filtersService->getFilterOrderBy()){
                case 'startDate':
                    $this->query->setOrderings(array('startDate' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING));
                    break;
                
                case 'startDateDesc':
                    $this->query->setOrderings(array('startDate' => Tx_Extbase_Persistence_QueryInterface::ORDER_DESCENDING));
                    break;                
                
                case 'name':
                    $this->query->setOrderings(array('name' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING));
                    break; 
                
                case 'sorting':
                    $this->query->setOrderings(array('sorting' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING));
                    break;   
                
                case 'highlightStartDate':
                    $this->query->setOrderings(array(
                        'highlight' => Tx_Extbase_Persistence_QueryInterface::ORDER_DESCENDING,
                        'startDate' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING
                        ));
                    break;
                
                case 'highlightStartDateDesc':
                    $this->query->setOrderings(array(
                        'highlight' => Tx_Extbase_Persistence_QueryInterface::ORDER_DESCENDING,
                        'startDate' => Tx_Extbase_Persistence_QueryInterface::ORDER_DESCENDING
                        ));
                    break;                
                
                case 'highlightName':
                    $this->query->setOrderings(array(
                        'highlight' => Tx_Extbase_Persistence_QueryInterface::ORDER_DESCENDING,
                        'name' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING
                        ));
                    break; 
                
                case 'highlightSorting':
                    $this->query->setOrderings(array(
                        'highlight' => Tx_Extbase_Persistence_QueryInterface::ORDER_DESCENDING,
                        'sorting' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING
                        ));
                    break;                 
            }			
			
		}
	}	
	
	
	/**
	 *
	 * @var Tx_IctiContent_Service_FiltersService 
	 */
	protected $filtersService;
	
	/**
	 *
	 * @var array 
	 */
	protected $constraintArray;
	
	/**
	 *
	 * @var Tx_Extbase_Persistence_QueryInterface 
	 */
	protected $query;
	
	
	/**
	 *
	 * @param Tx_IctiContent_Service_FiltersService $filtersService 
	 */
	protected function initQuery(Tx_IctiContent_Service_FiltersService $filtersService){
		$this->filtersService = $filtersService;
		$this->query = $this->createQuery();
		$this->constraintArray = array();
	}
	
	/**
	 *
	 * @return Tx_Extbase_Persistence_QueryResultInterface 
	 */
	protected function executeQueryWithConstraintArray(){
        /*
         * Agregamos los constraints y ejecutamos la consulta definitiva
         */
		if(count($this->constraintArr)){
			$this->query->matching($this->query->logicalAnd($this->constraintArr));
		}        
        
        return $this->query->execute();        
	}
	
	
}
?>