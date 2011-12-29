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
 * Test case for class Tx_Icticontent_Domain_Model_Content.
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
class Tx_Icticontent_Domain_Model_ContentTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Icticontent_Domain_Model_Content
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Icticontent_Domain_Model_Content();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getContentTypeReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getContentType()
		);
	}

	/**
	 * @test
	 */
	public function setContentTypeForIntegerSetsContentType() { 
		$this->fixture->setContentType(12);

		$this->assertSame(
			12,
			$this->fixture->getContentType()
		);
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
	public function getShortReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setShortForStringSetsShort() { 
		$this->fixture->setShort('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getShort()
		);
	}
	
	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() { 
		$this->fixture->setDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getFrontImageReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFrontImageForStringSetsFrontImage() { 
		$this->fixture->setFrontImage('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFrontImage()
		);
	}
	
	/**
	 * @test
	 */
	public function getImagesReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setImagesForStringSetsImages() { 
		$this->fixture->setImages('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getImages()
		);
	}
	
	/**
	 * @test
	 */
	public function getStartDateReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setStartDateForDateTimeSetsStartDate() { }
	
	/**
	 * @test
	 */
	public function getEndDateReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setEndDateForDateTimeSetsEndDate() { }
	
	/**
	 * @test
	 */
	public function getCityReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCityForStringSetsCity() { 
		$this->fixture->setCity('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCity()
		);
	}
	
	/**
	 * @test
	 */
	public function getVideosReturnsInitialValueForObjectStorageContainingTx_Icticontent_Domain_Model_Media() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getVideos()
		);
	}

	/**
	 * @test
	 */
	public function setVideosForObjectStorageContainingTx_Icticontent_Domain_Model_MediaSetsVideos() { 
		$video = new Tx_Icticontent_Domain_Model_Media();
		$objectStorageHoldingExactlyOneVideos = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneVideos->attach($video);
		$this->fixture->setVideos($objectStorageHoldingExactlyOneVideos);

		$this->assertSame(
			$objectStorageHoldingExactlyOneVideos,
			$this->fixture->getVideos()
		);
	}
	
	/**
	 * @test
	 */
	public function addVideoToObjectStorageHoldingVideos() {
		$video = new Tx_Icticontent_Domain_Model_Media();
		$objectStorageHoldingExactlyOneVideo = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneVideo->attach($video);
		$this->fixture->addVideo($video);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneVideo,
			$this->fixture->getVideos()
		);
	}

	/**
	 * @test
	 */
	public function removeVideoFromObjectStorageHoldingVideos() {
		$video = new Tx_Icticontent_Domain_Model_Media();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($video);
		$localObjectStorage->detach($video);
		$this->fixture->addVideo($video);
		$this->fixture->removeVideo($video);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getVideos()
		);
	}
	
	/**
	 * @test
	 */
	public function getGeoLocationsReturnsInitialValueForObjectStorageContainingTx_Icticontent_Domain_Model_GeoLocation() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getGeoLocations()
		);
	}

	/**
	 * @test
	 */
	public function setGeoLocationsForObjectStorageContainingTx_Icticontent_Domain_Model_GeoLocationSetsGeoLocations() { 
		$geoLocation = new Tx_Icticontent_Domain_Model_GeoLocation();
		$objectStorageHoldingExactlyOneGeoLocations = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneGeoLocations->attach($geoLocation);
		$this->fixture->setGeoLocations($objectStorageHoldingExactlyOneGeoLocations);

		$this->assertSame(
			$objectStorageHoldingExactlyOneGeoLocations,
			$this->fixture->getGeoLocations()
		);
	}
	
	/**
	 * @test
	 */
	public function addGeoLocationToObjectStorageHoldingGeoLocations() {
		$geoLocation = new Tx_Icticontent_Domain_Model_GeoLocation();
		$objectStorageHoldingExactlyOneGeoLocation = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneGeoLocation->attach($geoLocation);
		$this->fixture->addGeoLocation($geoLocation);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneGeoLocation,
			$this->fixture->getGeoLocations()
		);
	}

	/**
	 * @test
	 */
	public function removeGeoLocationFromObjectStorageHoldingGeoLocations() {
		$geoLocation = new Tx_Icticontent_Domain_Model_GeoLocation();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($geoLocation);
		$localObjectStorage->detach($geoLocation);
		$this->fixture->addGeoLocation($geoLocation);
		$this->fixture->removeGeoLocation($geoLocation);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getGeoLocations()
		);
	}
	
	/**
	 * @test
	 */
	public function getKeywordsReturnsInitialValueForObjectStorageContainingTx_Icticontent_Domain_Model_Keyword() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getKeywords()
		);
	}

	/**
	 * @test
	 */
	public function setKeywordsForObjectStorageContainingTx_Icticontent_Domain_Model_KeywordSetsKeywords() { 
		$keyword = new Tx_Icticontent_Domain_Model_Keyword();
		$objectStorageHoldingExactlyOneKeywords = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneKeywords->attach($keyword);
		$this->fixture->setKeywords($objectStorageHoldingExactlyOneKeywords);

		$this->assertSame(
			$objectStorageHoldingExactlyOneKeywords,
			$this->fixture->getKeywords()
		);
	}
	
	/**
	 * @test
	 */
	public function addKeywordToObjectStorageHoldingKeywords() {
		$keyword = new Tx_Icticontent_Domain_Model_Keyword();
		$objectStorageHoldingExactlyOneKeyword = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneKeyword->attach($keyword);
		$this->fixture->addKeyword($keyword);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneKeyword,
			$this->fixture->getKeywords()
		);
	}

	/**
	 * @test
	 */
	public function removeKeywordFromObjectStorageHoldingKeywords() {
		$keyword = new Tx_Icticontent_Domain_Model_Keyword();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($keyword);
		$localObjectStorage->detach($keyword);
		$this->fixture->addKeyword($keyword);
		$this->fixture->removeKeyword($keyword);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getKeywords()
		);
	}
	
	/**
	 * @test
	 */
	public function getRelatedPageReturnsInitialValueForTx_Icticontent_Domain_Model_Typo3Page() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getRelatedPage()
		);
	}

	/**
	 * @test
	 */
	public function setRelatedPageForTx_Icticontent_Domain_Model_Typo3PageSetsRelatedPage() { 
		$dummyObject = new Tx_Icticontent_Domain_Model_Typo3Page();
		$this->fixture->setRelatedPage($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getRelatedPage()
		);
	}
	
	/**
	 * @test
	 */
	public function getCategoriesReturnsInitialValueForObjectStorageContainingTx_Icticontent_Domain_Model_Category() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getCategories()
		);
	}

	/**
	 * @test
	 */
	public function setCategoriesForObjectStorageContainingTx_Icticontent_Domain_Model_CategorySetsCategories() { 
		$category = new Tx_Icticontent_Domain_Model_Category();
		$objectStorageHoldingExactlyOneCategories = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCategories->attach($category);
		$this->fixture->setCategories($objectStorageHoldingExactlyOneCategories);

		$this->assertSame(
			$objectStorageHoldingExactlyOneCategories,
			$this->fixture->getCategories()
		);
	}
	
	/**
	 * @test
	 */
	public function addCategoryToObjectStorageHoldingCategories() {
		$category = new Tx_Icticontent_Domain_Model_Category();
		$objectStorageHoldingExactlyOneCategory = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCategory->attach($category);
		$this->fixture->addCategory($category);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneCategory,
			$this->fixture->getCategories()
		);
	}

	/**
	 * @test
	 */
	public function removeCategoryFromObjectStorageHoldingCategories() {
		$category = new Tx_Icticontent_Domain_Model_Category();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($category);
		$localObjectStorage->detach($category);
		$this->fixture->addCategory($category);
		$this->fixture->removeCategory($category);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getCategories()
		);
	}
	
	/**
	 * @test
	 */
	public function getRelatedContentsReturnsInitialValueForObjectStorageContainingTx_Icticontent_Domain_Model_Content() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getRelatedContents()
		);
	}

	/**
	 * @test
	 */
	public function setRelatedContentsForObjectStorageContainingTx_Icticontent_Domain_Model_ContentSetsRelatedContents() { 
		$relatedContent = new Tx_Icticontent_Domain_Model_Content();
		$objectStorageHoldingExactlyOneRelatedContents = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneRelatedContents->attach($relatedContent);
		$this->fixture->setRelatedContents($objectStorageHoldingExactlyOneRelatedContents);

		$this->assertSame(
			$objectStorageHoldingExactlyOneRelatedContents,
			$this->fixture->getRelatedContents()
		);
	}
	
	/**
	 * @test
	 */
	public function addRelatedContentToObjectStorageHoldingRelatedContents() {
		$relatedContent = new Tx_Icticontent_Domain_Model_Content();
		$objectStorageHoldingExactlyOneRelatedContent = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneRelatedContent->attach($relatedContent);
		$this->fixture->addRelatedContent($relatedContent);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneRelatedContent,
			$this->fixture->getRelatedContents()
		);
	}

	/**
	 * @test
	 */
	public function removeRelatedContentFromObjectStorageHoldingRelatedContents() {
		$relatedContent = new Tx_Icticontent_Domain_Model_Content();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($relatedContent);
		$localObjectStorage->detach($relatedContent);
		$this->fixture->addRelatedContent($relatedContent);
		$this->fixture->removeRelatedContent($relatedContent);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getRelatedContents()
		);
	}
	
	/**
	 * @test
	 */
	public function getGeoAreasReturnsInitialValueForObjectStorageContainingTx_Icticontent_Domain_Model_GeoArea() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getGeoAreas()
		);
	}

	/**
	 * @test
	 */
	public function setGeoAreasForObjectStorageContainingTx_Icticontent_Domain_Model_GeoAreaSetsGeoAreas() { 
		$geoArea = new Tx_Icticontent_Domain_Model_GeoArea();
		$objectStorageHoldingExactlyOneGeoAreas = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneGeoAreas->attach($geoArea);
		$this->fixture->setGeoAreas($objectStorageHoldingExactlyOneGeoAreas);

		$this->assertSame(
			$objectStorageHoldingExactlyOneGeoAreas,
			$this->fixture->getGeoAreas()
		);
	}
	
	/**
	 * @test
	 */
	public function addGeoAreaToObjectStorageHoldingGeoAreas() {
		$geoArea = new Tx_Icticontent_Domain_Model_GeoArea();
		$objectStorageHoldingExactlyOneGeoArea = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneGeoArea->attach($geoArea);
		$this->fixture->addGeoArea($geoArea);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneGeoArea,
			$this->fixture->getGeoAreas()
		);
	}

	/**
	 * @test
	 */
	public function removeGeoAreaFromObjectStorageHoldingGeoAreas() {
		$geoArea = new Tx_Icticontent_Domain_Model_GeoArea();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($geoArea);
		$localObjectStorage->detach($geoArea);
		$this->fixture->addGeoArea($geoArea);
		$this->fixture->removeGeoArea($geoArea);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getGeoAreas()
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
	
	/**
	 * @test
	 */
	public function getProvincesReturnsInitialValueForObjectStorageContainingTx_Icticontent_Domain_Model_Province() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getProvinces()
		);
	}

	/**
	 * @test
	 */
	public function setProvincesForObjectStorageContainingTx_Icticontent_Domain_Model_ProvinceSetsProvinces() { 
		$province = new Tx_Icticontent_Domain_Model_Province();
		$objectStorageHoldingExactlyOneProvinces = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneProvinces->attach($province);
		$this->fixture->setProvinces($objectStorageHoldingExactlyOneProvinces);

		$this->assertSame(
			$objectStorageHoldingExactlyOneProvinces,
			$this->fixture->getProvinces()
		);
	}
	
	/**
	 * @test
	 */
	public function addProvinceToObjectStorageHoldingProvinces() {
		$province = new Tx_Icticontent_Domain_Model_Province();
		$objectStorageHoldingExactlyOneProvince = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneProvince->attach($province);
		$this->fixture->addProvince($province);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneProvince,
			$this->fixture->getProvinces()
		);
	}

	/**
	 * @test
	 */
	public function removeProvinceFromObjectStorageHoldingProvinces() {
		$province = new Tx_Icticontent_Domain_Model_Province();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($province);
		$localObjectStorage->detach($province);
		$this->fixture->addProvince($province);
		$this->fixture->removeProvince($province);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getProvinces()
		);
	}
	
}
?>