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
class Tx_Icticontent_Controller_CountryController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * action delete
	 *
	 * @param $country
	 * @return void
	 */
	public function deleteAction(Tx_Icticontent_Domain_Model_Country $country) {
		$this->countryRepository->remove($country);
		$this->flashMessageContainer->add('Your Country was removed.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param $country
	 * @return void
	 */
	public function editAction(Tx_Icticontent_Domain_Model_Country $country) {
		$this->view->assign('country', $country);
	}

	/**
	 * action update
	 *
	 * @param $country
	 * @return void
	 */
	public function updateAction(Tx_Icticontent_Domain_Model_Country $country) {
		$this->countryRepository->update($country);
		$this->flashMessageContainer->add('Your Country was updated.');
		$this->redirect('list');
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$countries = $this->countryRepository->findAll();
		$this->view->assign('countries', $countries);
	}

	/**
	 * action new
	 *
	 * @param $newCountry
	 * @dontvalidate $newCountry
	 * @return void
	 */
	public function newAction(Tx_Icticontent_Domain_Model_Country $newCountry = NULL) {
		$this->view->assign('newCountry', $newCountry);
	}

	/**
	 * action create
	 *
	 * @param $newCountry
	 * @return void
	 */
	public function createAction(Tx_Icticontent_Domain_Model_Country $newCountry) {
		$this->countryRepository->add($newCountry);
		$this->flashMessageContainer->add('Your new Country was created.');
		$this->redirect('list');
	}

	/**
	 * action show
	 *
	 * @param $country
	 * @return void
	 */
	public function showAction(Tx_Icticontent_Domain_Model_Country $country) {
		$this->view->assign('country', $country);
	}

}
?>