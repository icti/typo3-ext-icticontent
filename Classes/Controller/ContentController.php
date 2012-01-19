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
class Tx_Icticontent_Controller_ContentController extends Tx_Icticontent_Controller_BaseController {

	/**
	 * contentRepository
	 *
	 * @var Tx_Icticontent_Domain_Repository_ContentRepository
	 */
	protected $contentRepository;

	/**
	 * injectContentRepository
	 *
	 * @param Tx_Icticontent_Domain_Repository_ContentRepository $contentRepository
	 * @return void
	 */
	public function injectContentRepository(Tx_Icticontent_Domain_Repository_ContentRepository $contentRepository) {
		$this->contentRepository = $contentRepository;
	}
	
	/**
	 * filtersService
	 *
	 * @var Tx_IctiContent_Service_FiltersService
	 */
	protected $filtersService; 
	
	/**
	 * injectFiltersService
	 *
	 * @param Tx_IctiContent_Service_FiltersService $filtersService
	 * @return void
	 */
	public function injectFiltersService(Tx_Icticontent_Service_FiltersService $filtersService) {
		$this->filtersService = $filtersService;
	} 	

	/**
	 * action filters
	 *
	 * @return void
	 * 
	 * @dontverifyrequesthash true
	 */
	public function filtersAction() {

	}

	/**
	 * action calendar
	 *
	 * @return void
	 */
	public function calendarAction() {

	}

	/**
	 * action list
	 * 
	 * @param Tx_Icticontent_Domain_Model_Category $filterCategory
	 * @param Tx_Icticontent_Domain_Model_Keyword $filterKeyword
	 *
	 * @return void
	 * 
	 * @dontverifyrequesthash true
	 */
	public function listAction(
			Tx_Icticontent_Domain_Model_Category $filterCategory = null,
			Tx_Icticontent_Domain_Model_Keyword $filterKeyword = null
	) {
		$contents = $this->contentRepository->findByFiltersService($this->filtersService);
		$this->view->assign('contents', $contents);
	}

	/**
	 * action show
	 *
	 * @param $content
	 * @return void
	 */
	public function showAction(Tx_Icticontent_Domain_Model_Content $content) {
		$this->view->assign('content', $content);
	}
	

}
?>