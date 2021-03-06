<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Jose Antonio Guerra <jaguerra@icti.es>, ICTI Internet Passion S.L.
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
 * Test case for class Tx_Icticontent_Domain_Model_Province.
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
class Tx_Icticontent_Domain_Model_ProvinceTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Icticontent_Domain_Model_Province
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Icticontent_Domain_Model_Province();
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
	public function getCountryReturnsInitialValueForTx_Icticontent_Domain_Model_Country() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getCountry()
		);
	}

	/**
	 * @test
	 */
	public function setCountryForTx_Icticontent_Domain_Model_CountrySetsCountry() { 
		$dummyObject = new Tx_Icticontent_Domain_Model_Country();
		$this->fixture->setCountry($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getCountry()
		);
	}
	
	/**
	 * @test
	 */
	public function getRegionReturnsInitialValueForTx_Icticontent_Domain_Model_Region() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getRegion()
		);
	}

	/**
	 * @test
	 */
	public function setRegionForTx_Icticontent_Domain_Model_RegionSetsRegion() { 
		$dummyObject = new Tx_Icticontent_Domain_Model_Region();
		$this->fixture->setRegion($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getRegion()
		);
	}
	
}
?>