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

/**
 * Controller for the Resource object
 */
class Tx_Icticontent_Controller_BaseController extends Tx_Extbase_MVC_Controller_ActionController {

    
	/**
	 * lookupService
	 *
	 * @var Tx_Icticontent_Service_LookupService
	 */
	protected $lookupService;

	/**
	 * filtersService
	 *
	 * @var Tx_Icticontent_Service_FiltersService
	 */
	protected $filtersService;    


    
	/**
	 * Add some shared items to the current view
	 *
	 * @return void
	 */
  protected function addCommonItems() {

    $this->view->assign('lookupService', $this->lookupService); 
    $this->view->assign('filtersService', $this->filtersService);
    $this->view->assign('globalRegisters', $GLOBALS['TSFE']->register);
		$contentObjectRenderer = $this->configurationManager->getContentObject();
		if ($contentObjectRenderer instanceof \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer) {
				$this->view->assign('contentObjectData', $contentObjectRenderer->data);
		}
  }

	/**
	 * initializeView
	 *
	 * @return void
	 * @param  $view
	 */
	protected function initializeView($view) {
		        parent::initializeView($view);
		        $this->filtersService->init($this->arguments, $this->settings);
		        $this->lookupService->setFiltersService($this->filtersService);
		        $this->addCommonItems();
				                
	}    

	
	/**
	 * Para modificar valores globales antes de crear la vista...	
	 * 
	 * @return type 
	 */
	protected function resolveView() {	
		
		if(!$this->settings['listPid']){
			$this->settings['listPid'] = $GLOBALS['TSFE']->id;
		}
		
		return parent::resolveView();
	}
	
	/**
	 * injectLookupService
	 *
	 * @param Tx_Icticontent_Service_LookupService $lookupService
	 * @return void
	 */
	public function injectLookupService(Tx_Icticontent_Service_LookupService $lookupService) {
		$this->lookupService = $lookupService;
}
    
    
	/**
	 * injectFiltersService
	 *
	 * @param Tx_Icticontent_Service_FiltersService $filtersService
	 * @return void
	 */
	public function injectFiltersService(Tx_Icticontent_Service_FiltersService $filtersService) {
		$this->filtersService = $filtersService;
	}   
    
    
    
	/**
     * Turning Controller Method Argument Mapping into 404
     * TODO: Activar para producción
     * 
     * @return void
     */
    /*
    public function mapRequestArgumentsToControllerArguments() {
        try {
            parent::mapRequestArgumentsToControllerArguments();
        } catch (Tx_Extbase_MVC_Exception_InvalidArgumentValue $exception) {
            $GLOBALS['TSFE']->pageNotFoundAndExit();
        }
    }    
    */  

	
	/**
	 * @var string
	 */
	protected $defaultViewObjectName = 'Tx_Ictiextbase_View_VariantView';   	
	
	/**
	 * @param Tx_Extbase_MVC_View_ViewInterface $view It's a Tx_YourExtension_View_VariantView here!
	 * @return void
	 */
	protected function setViewConfiguration(Tx_Extbase_MVC_View_ViewInterface $view) {
		parent::setViewConfiguration($view);
		$extbaseFrameworkConfiguration = $this->configurationManager->getConfiguration(Tx_Extbase_Configuration_ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);
		if (isset($extbaseFrameworkConfiguration['view']['layoutVariant'])
			&& strlen($extbaseFrameworkConfiguration['view']['layoutVariant']) > 0
			&& method_exists($view, 'setLayoutVariant')) {
			$view->setLayoutVariant($extbaseFrameworkConfiguration['view']['layoutVariant']);
		}
      
	}	

}
?>