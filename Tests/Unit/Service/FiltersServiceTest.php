<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FiltersServiceTest
 *
 * @author jaguerra
 */
class Tx_Icticontent_Service_FiltersServiceTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Icticontent_Service_FiltersService
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Icticontent_Service_FiltersService();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getFilterMonthReturnsInitialValue() { 
		$this->assertSame(
			strftime('%m'),
			$this->fixture->getFilterMonth()
		);
	}	
	
	/**
	 * @test
	 */
	public function getFilterYearReturnsInitialValue() { 
		$this->assertSame(
			strftime('%Y'),
			$this->fixture->getFilterYear()
		);
	}		
}

?>
