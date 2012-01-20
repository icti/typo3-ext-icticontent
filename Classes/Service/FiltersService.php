<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Jose Antonio Guerra <jaguerra@icti.es>, ICTI Internet Passion
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


class Tx_Icticontent_Service_FiltersService extends Tx_Ictiextbase_Service_AbstractFiltersService {

	
	
	
	
	/**
	 * @Ictiextbase\Service\Filters\filter
	 * @Ictiextbase\Service\Filters\class Tx_Icticontent_Domain_Model_Category
	 * 
	 */
	protected $filterCategory;
	
	/**
	 * @Ictiextbase\Service\Filters\filter
	 * @Ictiextbase\Service\Filters\class Tx_Icticontent_Domain_Model_Keyword
	 * 
	 */
	protected $filterKeyword;	
	
	
	/**
	 * @Ictiextbase\Service\Filters\filter
	 * 
	 */
	protected $filterOrderBy;		
	
	
	/**
	 * @Ictiextbase\Service\Filters\filter
	 * 
	 */
	protected $filterHighlight;	
	
	/**
	 * @Ictiextbase\Service\Filters\filter
	 * 
	 */
	protected $filterNewerDates;	
	
	/**
	 * @Ictiextbase\Service\Filters\filter
	 * @Ictiextbase\Service\Filters\class Tx_Icticontent_Domain_Model_GeoArea
	 * 
	 */
	protected $filterGeoArea;	
	
	
	/**
	 * @Ictiextbase\Service\Filters\filter
	 * 
	 */
	protected $filterMonth;		
	
	/**
	 * @Ictiextbase\Service\Filters\filter
	 * 
	 */
	protected $filterYear;	
	
	
	public function getFilterMonth(){
        
        if(!$this->filterMonth){
            $this->filterMonth = strftime('%m');
        }
		
		return $this->filterMonth;
	}
	
	public function getFilterYear(){
		
        if(!$this->filterYear){
            $this->filterYear = strftime('%Y');
        }
		
		return $this->filterYear;		
	}	
 

}
?>