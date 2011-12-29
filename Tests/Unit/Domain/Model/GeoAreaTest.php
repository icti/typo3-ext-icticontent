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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_Icticontent_Domain_Model_GeoArea.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage ICTI structured content framework
 *
 * @author Jose Antonio Guerra <jaguerra@icti.es>
 */
class Tx_Icticontent_Domain_Model_GeoAreaTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Icticontent_Domain_Model_GeoArea
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Icticontent_Domain_Model_GeoArea();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNameForStringSetsName() { 
		$this->fixture->setName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getName()
		);
	}
	
	/**
	 * @test
	 */
	public function getCountriesReturnsInitialValueForObjectStorageContainingTx_Icticontent_Domain_Model_Country() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getCountries()
		);
	}

	/**
	 * @test
	 */
	public function setCountriesForObjectStorageContainingTx_Icticontent_Domain_Model_CountrySetsCountries() { 
		$country = new Tx_Icticontent_Domain_Model_Country();
		$objectStorageHoldingExactlyOneCountries = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCountries->attach($country);
		$this->fixture->setCountries($objectStorageHoldingExactlyOneCountries);

		$this->assertSame(
			$objectStorageHoldingExactlyOneCountries,
			$this->fixture->getCountries()
		);
	}
	
	/**
	 * @test
	 */
	public function addCountryToObjectStorageHoldingCountries() {
		$country = new Tx_Icticontent_Domain_Model_Country();
		$objectStorageHoldingExactlyOneCountry = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCountry->attach($country);
		$this->fixture->addCountry($country);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneCountry,
			$this->fixture->getCountries()
		);
	}

	/**
	 * @test
	 */
	public function removeCountryFromObjectStorageHoldingCountries() {
		$country = new Tx_Icticontent_Domain_Model_Country();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($country);
		$localObjectStorage->detach($country);
		$this->fixture->addCountry($country);
		$this->fixture->removeCountry($country);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getCountries()
		);
	}
	
}
?>