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
class Tx_Icticontent_Domain_Model_GeoLocation extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * coordX
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $coordX;

	/**
	 * coordY
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $coordY;

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the coordX
	 *
	 * @return string $coordX
	 */
	public function getCoordX() {
		return $this->coordX;
	}

	/**
	 * Sets the coordX
	 *
	 * @param string $coordX
	 * @return void
	 */
	public function setCoordX($coordX) {
		$this->coordX = $coordX;
	}

	/**
	 * Returns the coordY
	 *
	 * @return string $coordY
	 */
	public function getCoordY() {
		return $this->coordY;
	}

	/**
	 * Sets the coordY
	 *
	 * @param string $coordY
	 * @return void
	 */
	public function setCoordY($coordY) {
		$this->coordY = $coordY;
	}

}
?>