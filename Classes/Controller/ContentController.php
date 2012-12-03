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
	 * action filters
	 *
   * @param Tx_Icticontent_Domain_Model_Category $filterCategory
   * @param Tx_Icticontent_Domain_Model_Region $filterRegion
   * @param Tx_Icticontent_Domain_Model_Country $filterCountry
   * @param Tx_Icticontent_Domain_Model_Author $filterAuthor
	 * 
	 * @return void
	 * 
	 * @dontverifyrequesthash true
	 */
  public function filtersAction(
    Tx_Icticontent_Domain_Model_Category $filterCategory = null,
    Tx_Icticontent_Domain_Model_Region $filterRegion = null,
    Tx_Icticontent_Domain_Model_Country $filterCountry = null,
    Tx_Icticontent_Domain_Model_Author $filterAuthor = null
  ) {

	}


	/**
	 * action list
	 * 
	 * @param Tx_Icticontent_Domain_Model_Category $filterCategory
   * @param Tx_Icticontent_Domain_Model_Keyword $filterKeyword
   * @param Tx_Icticontent_Domain_Model_Region $filterRegion
   * @param Tx_Icticontent_Domain_Model_Country $filterCountry
   * @param Tx_Icticontent_Domain_Model_Author $filterAuthor
	 *
	 * @return void
	 * 
	 * @dontverifyrequesthash true
	 */
  public function listAction(
    Tx_Icticontent_Domain_Model_Category $filterCategory = null,
    Tx_Icticontent_Domain_Model_Keyword $filterKeyword = null,
    Tx_Icticontent_Domain_Model_Region $filterRegion = null,
    Tx_Icticontent_Domain_Model_Country $filterCountry = null,
    Tx_Icticontent_Domain_Model_Author $filterAuthor = null
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
	
	
	/**
	 * action calendar
     * 
     * @param string $filterMonth
     * @param string $filterYear
	 *
	 * @return string The rendered show action
	 */
	public function calendarAction($filterMonth = null, $filterYear = null) {
        
        $year = $this->filtersService->getFilterYear();
        $month = $this->filtersService->getFilterMonth();
        
        $content = $this->contentRepository->findByCalendarMonth($this->filtersService);
        $this->view->assign('content', $content);
        
        
        $prevMonth = strftime('%m',mktime(0,0,0,$month - 1,1,$year));
        $nextMonth = strftime('%m',mktime(0,0,0,$month + 1,1,$year));
        $prevYear = strftime('%Y',mktime(0,0,0,$month - 1,1,$year));
        $nextYear = strftime('%Y',mktime(0,0,0,$month + 1,1,$year));
		
		$currentMonthDateTime = new DateTime();
		$currentMonthDateTime->setDate($year, $month, 1);
        
        /* draw table */
        $calendarArray = array();
        $runningWeek = 0;

        /* table headings */
        $headings = array('L','M','X','J','V','S','D');
        

        /* days and weeks vars now ... */
        $running_day = strftime('%u',mktime(0,0,0,$month,1,$year));
        $start_day = strftime('%e',mktime(0,0,0,$month,2 - $running_day,$year));
        $days_in_month = date('t',mktime(0,0,0,$month,1,$year));
        $days_in_this_week = 1;
        $day_counter = 0;
        $dates_array = array();

        /* row for week one */
        $list_day = $start_day;
        /* print "blank" days until the first of the current week */
        for($x = 1; $x < $running_day; $x++){
            $dayArray = array('day' => $list_day, 'notThisMonth' => true, 'content' => array(), 'today' => false);
            $this->addDayContentToCalendarDayArray($dayArray, $content, $prevYear, $prevMonth, $list_day);  
            $calendarArray[$runningWeek][] = $dayArray;
            $list_day++;
            $days_in_this_week++;
        }

        /* keep going with days.... */
        for($list_day = 1; $list_day <= $days_in_month; $list_day++){
            
            $dayArray = array('day' => $list_day, 'content' => array(), 'today' => false);
            
            if($list_day == strftime("%d") && $month == strftime('%m') && $year == strftime('%Y')){
                $dayArray['today'] = true;
            }
            

            /** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
            
            $this->addDayContentToCalendarDayArray($dayArray, $content, $year, $month, $list_day);
            
            $calendarArray[$runningWeek][] = $dayArray;

            if($running_day == 7){
                $runningWeek++;
              $running_day = 0;
              $days_in_this_week = 0;
            }
            $days_in_this_week++; $running_day++; $day_counter++;
        }

        /* finish the rest of the days in the week */
        $list_day = 1;
        if($days_in_this_week < 8){
            for($x = 1; $x <= (8 - $days_in_this_week); $x++){
                $dayArray = array('day' => $list_day, 'notThisMonth' => true, 'content' => array(), 'today' => false);
                
                $this->addDayContentToCalendarDayArray($dayArray, $content, $nextYear, $nextMonth, $list_day);   
                
              $calendarArray[$runningWeek][] = $dayArray;
              $list_day++;
            }
        }

        
        $this->view->assign('calendarHeadings', $headings);
        $this->view->assign('calendarArray', $calendarArray);
        $this->view->assign('month', $month);
        $this->view->assign('year', $year);
        $this->view->assign('prevMonth', $prevMonth);
        $this->view->assign('prevYear', $prevYear);
        $this->view->assign('nextMonth', $nextMonth);
        $this->view->assign('nextYear', $nextYear);
        $this->view->assign('content', $content);
		$this->view->assign('currentMonthDateTime', $currentMonthDateTime);
		
        
	}
    
    protected function addDayContentToCalendarDayArray(&$dayArray, &$content, $year, $month, $day){
        for($content->rewind();$content->valid();$content->next()){
            if($content->current()->isInCalendarDay($year, $month, $day)){
                /* 
                 * Necesitamos agregar tanto los content.startDate como los content.calendarDates.date...
                 */
				$dayArray['content'][] = $content->current();
            }
        }         
    }   


  /**
	 * action rss
	 * 
	 * @return void
	 */
  public function rssAction() {
    $contents = $this->contentRepository->findByFiltersService($this->filtersService);
    $this->view->assign('contents', $contents);

    $this->view->assign('rssTitle',$GLOBALS['TSFE']->page['title']);
    $this->view->assign('rssSiteLink',t3lib_div::getIndpEnv('TYPO3_SITE_URL'));
    $this->view->assign('rssDescription',$GLOBALS['TSFE']->page['description']);
    $this->view->assign('rssUrl', t3lib_div::getIndpEnv('TYPO3_REQUEST_URL'));

    if(!$this->settings['doNotOverrideRenderPipeline']){
      header('Content-type: text/xml');
      echo $this->view->render();
      exit();
    }
  }

}
?>
