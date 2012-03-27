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
	public function getContentTypeReturnsInitialValueForInteger() { 
		$this->assertSame(
			null,
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
		
		$this->markTestIncomplete();
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
		$this->markTestIncomplete();

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
	public function getEndDateReturnsInitialValueForDateTime() { 
		
		$this->assertEquals(
			false,
			$this->fixture->getEndDate()
		);		
		
	}

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
	public function getHighlightReturnsInitialValueForBoolean() { 
		$this->assertSame(
			false,
			$this->fixture->getHighlight()
		);
	}

	/**
	 * @test
	 */
	public function setHighlightForBooleanSetsHighlight() { 
		$this->fixture->setHighlight(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->getHighlight()
		);
	}
	
	/**
	 * @test
	 */
	public function getImagesCaptionsReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setImagesCaptionsForStringSetsImagesCaptions() { 
		$this->fixture->setImagesCaptions('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getImagesCaptions()
		);
	}
	
	/**
	 * @test
	 */
	public function getImagesAltTextReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setImagesAltTextForStringSetsImagesAltText() { 
		$this->fixture->setImagesAltText('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getImagesAltText()
		);
	}
	
	/**
	 * @test
	 */
	public function getIsRecurringEventReturnsInitialValueForBoolean() { 
		$this->assertSame(
			false,
			$this->fixture->getIsRecurringEvent()
		);
	}

	/**
	 * @test
	 */
	public function setIsRecurringEventForBooleanSetsIsRecurringEvent() { 
		$this->fixture->setIsRecurringEvent(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->getIsRecurringEvent()
		);
	}
	
	/**
	 * @test
	 */
	public function getRecurringTypeReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getRecurringType()
		);
	}

	/**
	 * @test
	 */
	public function setRecurringTypeForIntegerSetsRecurringType() { 
		$this->fixture->setRecurringType(12);

		$this->assertSame(
			12,
			$this->fixture->getRecurringType()
		);
	}
	
	/**
	 * @test
	 */
	public function getRecurringIntervalReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getRecurringInterval()
		);
	}

	/**
	 * @test
	 */
	public function setRecurringIntervalForIntegerSetsRecurringInterval() { 
		$this->fixture->setRecurringInterval(12);

		$this->assertSame(
			12,
			$this->fixture->getRecurringInterval()
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
		$video = new Tx_Icticontent_Domain_Model_MediaExternal();
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
		$video = new Tx_Icticontent_Domain_Model_MediaExternal();
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
		$video = new Tx_Icticontent_Domain_Model_MediaExternal();
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
	
	/**
	 * @test
	 */
	public function getDownloadsReturnsInitialValueForObjectStorageContainingTx_Icticontent_Domain_Model_Media() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getDownloads()
		);
	}

	/**
	 * @test
	 */
	public function setDownloadsForObjectStorageContainingTx_Icticontent_Domain_Model_MediaSetsDownloads() { 
		$download = new Tx_Icticontent_Domain_Model_MediaExternal();
		$objectStorageHoldingExactlyOneDownloads = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneDownloads->attach($download);
		$this->fixture->setDownloads($objectStorageHoldingExactlyOneDownloads);

		$this->assertSame(
			$objectStorageHoldingExactlyOneDownloads,
			$this->fixture->getDownloads()
		);
	}
	
	/**
	 * @test
	 */
	public function addDownloadToObjectStorageHoldingDownloads() {
		$download = new Tx_Icticontent_Domain_Model_MediaExternal();
		$objectStorageHoldingExactlyOneDownload = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneDownload->attach($download);
		$this->fixture->addDownload($download);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneDownload,
			$this->fixture->getDownloads()
		);
	}

	/**
	 * @test
	 */
	public function removeDownloadFromObjectStorageHoldingDownloads() {
		$download = new Tx_Icticontent_Domain_Model_MediaExternal();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($download);
		$localObjectStorage->detach($download);
		$this->fixture->addDownload($download);
		$this->fixture->removeDownload($download);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getDownloads()
		);
	}
	
	/**
	 * @test
	 */
	public function getLinksReturnsInitialValueForObjectStorageContainingTx_Icticontent_Domain_Model_Media() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getLinks()
		);
	}

	/**
	 * @test
	 */
	public function setLinksForObjectStorageContainingTx_Icticontent_Domain_Model_MediaSetsLinks() { 
		$link = new Tx_Icticontent_Domain_Model_MediaExternal();
		$objectStorageHoldingExactlyOneLinks = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneLinks->attach($link);
		$this->fixture->setLinks($objectStorageHoldingExactlyOneLinks);

		$this->assertSame(
			$objectStorageHoldingExactlyOneLinks,
			$this->fixture->getLinks()
		);
	}
	
	/**
	 * @test
	 */
	public function addLinkToObjectStorageHoldingLinks() {
		$link = new Tx_Icticontent_Domain_Model_MediaExternal();
		$objectStorageHoldingExactlyOneLink = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneLink->attach($link);
		$this->fixture->addLink($link);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneLink,
			$this->fixture->getLinks()
		);
	}

	/**
	 * @test
	 */
	public function removeLinkFromObjectStorageHoldingLinks() {
		$link = new Tx_Icticontent_Domain_Model_MediaExternal();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($link);
		$localObjectStorage->detach($link);
		$this->fixture->addLink($link);
		$this->fixture->removeLink($link);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getLinks()
		);
	}
	
	/**
	 * @test
	 */
	public function getAuthorsReturnsInitialValueForObjectStorageContainingTx_Icticontent_Domain_Model_Author() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getAuthors()
		);
	}

	/**
	 * @test
	 */
	public function setAuthorsForObjectStorageContainingTx_Icticontent_Domain_Model_AuthorSetsAuthors() { 
		$author = new Tx_Icticontent_Domain_Model_Author();
		$objectStorageHoldingExactlyOneAuthors = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneAuthors->attach($author);
		$this->fixture->setAuthors($objectStorageHoldingExactlyOneAuthors);

		$this->assertSame(
			$objectStorageHoldingExactlyOneAuthors,
			$this->fixture->getAuthors()
		);
	}
	
	/**
	 * @test
	 */
	public function addAuthorToObjectStorageHoldingAuthors() {
		$author = new Tx_Icticontent_Domain_Model_Author();
		$objectStorageHoldingExactlyOneAuthor = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneAuthor->attach($author);
		$this->fixture->addAuthor($author);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneAuthor,
			$this->fixture->getAuthors()
		);
	}

	/**
	 * @test
	 */
	public function removeAuthorFromObjectStorageHoldingAuthors() {
		$author = new Tx_Icticontent_Domain_Model_Author();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($author);
		$localObjectStorage->detach($author);
		$this->fixture->addAuthor($author);
		$this->fixture->removeAuthor($author);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getAuthors()
		);
	}
	
	/**
	 * @test
	 */
	public function getRegionsReturnsInitialValueForObjectStorageContainingTx_Icticontent_Domain_Model_Region() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getRegions()
		);
	}

	/**
	 * @test
	 */
	public function setRegionsForObjectStorageContainingTx_Icticontent_Domain_Model_RegionSetsRegions() { 
		$region = new Tx_Icticontent_Domain_Model_Region();
		$objectStorageHoldingExactlyOneRegions = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneRegions->attach($region);
		$this->fixture->setRegions($objectStorageHoldingExactlyOneRegions);

		$this->assertSame(
			$objectStorageHoldingExactlyOneRegions,
			$this->fixture->getRegions()
		);
	}
	
	/**
	 * @test
	 */
	public function addRegionToObjectStorageHoldingRegions() {
		$region = new Tx_Icticontent_Domain_Model_Region();
		$objectStorageHoldingExactlyOneRegion = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneRegion->attach($region);
		$this->fixture->addRegion($region);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneRegion,
			$this->fixture->getRegions()
		);
	}

	/**
	 * @test
	 */
	public function removeRegionFromObjectStorageHoldingRegions() {
		$region = new Tx_Icticontent_Domain_Model_Region();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($region);
		$localObjectStorage->detach($region);
		$this->fixture->addRegion($region);
		$this->fixture->removeRegion($region);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getRegions()
		);
	}
	
	
	
	/**
	 * @test
	 */
	public function isInCalendarDay() {
        
        $testDate = new DateTime;
        $testDate->setDate(1990, 1, 31);
        $testDate->setTime(0,0);
		$this->fixture->setStartDate($testDate);

        
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1990, 1, 31)
		);
        
    }
    
	/**
	 * @test
	 */
	public function isInCalendarDayPlus1() {
        
        $testDate = new DateTime;
        $testDate->setDate(1990, 1, 31);
        $testDate->setTime(0,0);
        
        
		$this->fixture->setStartDate($testDate);

        
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(1990, 2, 1)
		);
        
    }    
    
	/**
	 * @test
	 */
	public function isInCalendarDayMinus1() {
        
        $testDate = new DateTime;
        $testDate->setDate(1990, 1, 31);
        $testDate->setTime(0,0);
        
        
		$this->fixture->setStartDate($testDate);

        
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(1990, 1, 30)
		);
        
    }    
    
	/**
	 * @test
	 */
	public function isInCalendarDayOther() {
        
        $testDate = new DateTime;
        $testDate->setDate(1990, 1, 31);
        $testDate->setTime(0,0);
        
        
		$this->fixture->setStartDate($testDate);

        
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(1989, 1, 30)
		);
        
    }       
         
    
	/**
	 * @test
	 */
	public function isInCalendarDayNoDates() {

        
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(1990, 1, 30)
		);    
    }       	
	
	
	/**
	 * @test
	 */
	public function isInCalendarDayRecurringDaily() {
        
        $testDate = new DateTime;
        $testDate->setDate(1990, 1, 31);
        $testDate->setTime(0,10);
		$this->fixture->setStartDate($testDate);
		$this->fixture->setIsRecurringEvent(true);
		$this->fixture->setRecurringType(Tx_Icticontent_Domain_Model_Content::recurringTypeDaily);
        
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1990, 1, 31)
		);
		
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1990, 2, 1)
		);		
		
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(2020, 2, 1)
		);			
        
    }	
	
	/**
	 * @test
	 */
	public function isInCalendarDayRecurringDailyEndDate() {
        
        $testDate = new DateTime;
        $testDate->setDate(1990, 1, 31);
        $testDate->setTime(0,10);
		$this->fixture->setStartDate($testDate);
		
		
        $endDate = new DateTime;
        $endDate->setDate(1990, 2, 1);
        $endDate->setTime(0,10);	
		$this->fixture->setEndDate($endDate);
		
		$this->fixture->setIsRecurringEvent(true);
		$this->fixture->setRecurringType(Tx_Icticontent_Domain_Model_Content::recurringTypeDaily);
        
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1990, 1, 31)
		);
				
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1990, 2, 1)
		);	
		
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(1990, 2, 2)
		);		
		
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(2020, 2, 1)
		);			
        
    }	
	
	/**
	 * @test
	 */
	public function isInCalendarDayRecurringDailyEndDateInterval() {
        
        $testDate = new DateTime;
        $testDate->setDate(1990, 1, 31);
        $testDate->setTime(0,10);
		$this->fixture->setStartDate($testDate);
		
		
        $endDate = new DateTime;
        $endDate->setDate(1990, 2, 20);
        $endDate->setTime(0,10);	
		$this->fixture->setEndDate($endDate);
		
		$this->fixture->setIsRecurringEvent(true);
		$this->fixture->setRecurringType(Tx_Icticontent_Domain_Model_Content::recurringTypeDaily);
		$this->fixture->setRecurringInterval(1);
        
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1990, 1, 31)
		);
				
		// + 1 day
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(1990, 2, 1)
		);	
		
		// + 2 days
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1990, 2, 2)
		);	
		
		// + 3 days
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(1990, 2, 3)
		);		
		
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(1990, 2, 21)
		);		
		
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(2020, 2, 1)
		);			
        
    }		
	
	/**
	 * @test
	 */
	public function isInCalendarDayRecurringWeekly() {
        
        $testDate = new DateTime;
        $testDate->setDate(1990, 1, 31);
        $testDate->setTime(0,10);
		$this->fixture->setStartDate($testDate);
		$this->fixture->setIsRecurringEvent(true);
		$this->fixture->setRecurringType(Tx_Icticontent_Domain_Model_Content::recurringTypeWeekly);
        
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1990, 1, 31)
		);
		
		
		// + 1 day
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(1990, 2, 1)
		);		
		
		// + 1 week
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1990, 2, 7)
		);		
		
		// + 100 weeks
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1992, 1, 1)
		);			
        
    }	
	
	
	/**
	 * @test
	 */
	public function isInCalendarDayRecurringWeeklyEndDateInterval() {
        
        $testDate = new DateTime;
        $testDate->setDate(1990, 1, 31);
        $testDate->setTime(0,10);
		$this->fixture->setStartDate($testDate);
		$this->fixture->setIsRecurringEvent(true);
		$this->fixture->setRecurringType(Tx_Icticontent_Domain_Model_Content::recurringTypeWeekly);
		
		
        $endDate = new Tx_Ictiextbase_Helpers_DateTime;
        $endDate->setDate(1990, 2, 22);
        $endDate->setTime(0,10);	
		$this->fixture->setEndDate($endDate);		
		$this->fixture->setRecurringInterval(1);		
        
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1990, 1, 31)
		);
		
		
		// + 1 day
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(1990, 2, 1)
		);		
		
		// + 1 week
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(1990, 2, 7)
		);	
		
		// + 2 weeks
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1990, 2, 14)
		);		
		
		// + 3 weeks
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(1990, 2, 21)
		);			
		
		// + 100 weeks
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(1992, 1, 1)
		);	
				
        
    }		
	
	/**
	 * @test
	 */
	public function isInCalendarDayRecurringMonthly() {
        
        $testDate = new DateTime;
        $testDate->setDate(1990, 1, 15);
        $testDate->setTime(0,10);
		$this->fixture->setStartDate($testDate);
		$this->fixture->setIsRecurringEvent(true);
		$this->fixture->setRecurringType(Tx_Icticontent_Domain_Model_Content::recurringTypeMonthly);
        
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1990, 1, 15)
		);
		
		
		// + 1 day
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(1990, 1, 16)
		);		
		
		// + 1 month
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1990, 2, 15)
		);		
		
		// + 2 months
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1990, 3, 15)
		);			
	
		
		// + 12 months
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1991, 1, 15)
		);			
        
    }	
	
	/**
	 * @test
	 */
	public function isInCalendarDayRecurringMonthlyEdge1() {
        
        $testDate = new DateTime;
        $testDate->setDate(1990, 1, 31);
        $testDate->setTime(0,10);
		$this->fixture->setStartDate($testDate);
		$this->fixture->setIsRecurringEvent(true);
		$this->fixture->setRecurringType(Tx_Icticontent_Domain_Model_Content::recurringTypeMonthly);
        	
		
		// + 1 month
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1990, 2, 28)
		);	
		
		// + 1 month +2 year (leap)
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1992, 2, 29)
		);			
		
		// + 3 month
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1990, 4, 30)
		);			
		
		// + 13 months
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1991, 2, 28)
		);			
        
    }	
	
	/**
	 * @test
	 */
	public function isInCalendarDayRecurringMonthlyEdge2() {
        
        $testDate = new DateTime;
        $testDate->setDate(1990, 1, 31);
        $testDate->setTime(0,10);
		$this->fixture->setStartDate($testDate);
		$this->fixture->setIsRecurringEvent(true);
		$this->fixture->setRecurringType(Tx_Icticontent_Domain_Model_Content::recurringTypeMonthly);
		$this->fixture->setRecurringInterval(1);
        	
		
		// + 1 month
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(1990, 2, 28)
		);	

		// + 2 month
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1990, 3, 31)
		);	
				
		// + 3 month
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(1990, 4, 30)
		);			
			
        
    }		
	
	
	/**
	 * @test
	 */
	public function isInCalendarDayRecurringYearly() {
        
        $testDate = new DateTime;
        $testDate->setDate(1990, 1, 31);
        $testDate->setTime(0,10);
		$this->fixture->setStartDate($testDate);
		$this->fixture->setIsRecurringEvent(true);
		$this->fixture->setRecurringType(Tx_Icticontent_Domain_Model_Content::recurringTypeYearly);
        
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1990, 1, 31)
		);
		
		
		// + 1 day
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(1990, 2, 1)
		);		
		
		// + 1 year
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1991, 1, 31)
		);		
		
		// + 10 years
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(2000, 1, 31)
		);			
        
    }	
	
	/**
	 * @test
	 */
	public function isInCalendarDayRecurringYearlyEdge1() {
        
        $testDate = new DateTime;
        $testDate->setDate(1992, 2, 29);
        $testDate->setTime(0,10);
		$this->fixture->setStartDate($testDate);
		$this->fixture->setIsRecurringEvent(true);
		$this->fixture->setRecurringType(Tx_Icticontent_Domain_Model_Content::recurringTypeYearly);
		$this->fixture->setRecurringInterval(1);
        
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1992, 2, 29)
		);
		
		
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(1993, 2, 28)
		);		
		
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1994, 2, 28)
		);		
		
		$this->assertSame(
			false,
			$this->fixture->isInCalendarDay(1995, 2, 28)
		);		
		
		$this->assertSame(
			true,
			$this->fixture->isInCalendarDay(1996, 2, 29)
		);			
        
    }	
	
}
?>