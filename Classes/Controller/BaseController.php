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
     * @var t3lib_cache_frontend_StringFrontend
     */
    protected $cacheInstance;    
    protected $cacheLifetime = 3600;
    
    /**
     * Constructor
     */
    public function __construct() {
        $this->initializeCache();
    }
 
    /**
     * Initialize cache instance to be ready to use
     *
     * @return void
     */
    protected function initializeCache() {
        t3lib_cache::initializeCachingFramework();
        try {
            $this->cacheInstance = $GLOBALS['typo3CacheManager']->getCache('cache_icticontent_contentcache');
        }
        catch (t3lib_cache_exception_NoSuchCache $e) {
            $this->cacheInstance = $GLOBALS['typo3CacheFactory']->create(
                'cache_icticontent_contentcache',
                $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['cache_icticontent_contentcache']['frontend'],
                $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['cache_icticontent_contentcache']['backend'],
                $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['cache_icticontent_contentcache']['options']
            );
        }
    }  	
	
	
	/**
	 * Handles a request. The result output is returned by altering the given response.
	 *
	 * @param Tx_Extbase_MVC_Request $request The request object
	 * @param Tx_Extbase_MVC_Response $response The response, modified by this handler
	 * @return void
	 */
	public function processRequest(Tx_Extbase_MVC_RequestInterface $request, Tx_Extbase_MVC_ResponseInterface $response) {
		
		
		if (!$this->canProcessRequest($request)) {
			throw new Tx_Extbase_MVC_Exception_UnsupportedRequestType(get_class($this) . ' does not support requests of type "' . get_class($request) . '". Supported types are: ' . implode(' ', $this->supportedRequestTypes) , 1187701131);
		}

		$this->request = $request;
		$this->response = $response;
	
		
		if($this->isCacheEnabled()){
			$cacheHash = $this->getCacheHash($request);
		} else {
			$cacheHash = false;
		}
		
		
        if($cacheHash && $this->cacheInstance->get($cacheHash)){
			$this->request->setDispatched(TRUE);
			$this->response->appendContent( $this->cacheInstance->get($cacheHash) );
			//debug('Get '.$cacheHash);
        } else {		
			parent::processRequest($request,$response);
			
			if($cacheHash){
				$this->cacheInstance->set($cacheHash, $this->response->getContent(), array(), $this->cacheLifetime);
				//debug('Set '.$cacheHash);
			}
			
		}
	}	
	
	/**
	 *
	 * @param Tx_Extbase_MVC_RequestInterface $request
	 * @return type 
	 */
	protected function getCacheHash(Tx_Extbase_MVC_RequestInterface $request){
		$ttContentData = $request->getContentObjectData();
		return 'ttcontent_uid_'.$ttContentData['uid'].'_'.
				$request->getControllerName().'_'.$request->getControllerActionName().
				'_'.md5(serialize($request->getArguments()));
		
	}
	
	/**
	 *
	 * @return type 
	 */
	protected function isCacheEnabled(){
		
		if($this->isCacheDisabledOnConfiguration()){
			return false;
		}
		
		$actionMethodName = $this->resolveActionMethodName();
		$tags = $this->reflectionService->getMethodTagsValues( get_class($this), $actionMethodName);
		if(isset($tags['Ictiextbase\Controller\cache'])){
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 *
	 * @return type 
	 */
	protected function isCacheDisabledOnConfiguration(){
		$configuration = $this->configurationManager->getConfiguration(Tx_Extbase_Configuration_ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);
		if(isset($configuration['icticontent']['disableCache'])){
			return true;
		} else {
			return false;
		}		
	}
	
	
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
