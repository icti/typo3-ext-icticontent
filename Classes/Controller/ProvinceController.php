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
class Tx_Icticontent_Controller_ProvinceController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * action delete
	 *
	 * @param $province
	 * @return void
	 */
	public function deleteAction(Tx_Icticontent_Domain_Model_Province $province) {
		$this->provinceRepository->remove($province);
		$this->flashMessageContainer->add('Your Province was removed.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param $province
	 * @return void
	 */
	public function editAction(Tx_Icticontent_Domain_Model_Province $province) {
		$this->view->assign('province', $province);
	}

	/**
	 * action update
	 *
	 * @param $province
	 * @return void
	 */
	public function updateAction(Tx_Icticontent_Domain_Model_Province $province) {
		$this->provinceRepository->update($province);
		$this->flashMessageContainer->add('Your Province was updated.');
		$this->redirect('list');
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$provinces = $this->provinceRepository->findAll();
		$this->view->assign('provinces', $provinces);
	}

	/**
	 * action new
	 *
	 * @param $newProvince
	 * @dontvalidate $newProvince
	 * @return void
	 */
	public function newAction(Tx_Icticontent_Domain_Model_Province $newProvince = NULL) {
		$this->view->assign('newProvince', $newProvince);
	}

	/**
	 * action create
	 *
	 * @param $newProvince
	 * @return void
	 */
	public function createAction(Tx_Icticontent_Domain_Model_Province $newProvince) {
		$this->provinceRepository->add($newProvince);
		$this->flashMessageContainer->add('Your new Province was created.');
		$this->redirect('list');
	}

	/**
	 * action show
	 *
	 * @param $province
	 * @return void
	 */
	public function showAction(Tx_Icticontent_Domain_Model_Province $province) {
		$this->view->assign('province', $province);
	}

}
?>