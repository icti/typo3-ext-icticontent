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
class Tx_Icticontent_Domain_Model_Content extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * contentType
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $contentType;

	/**
	 * short
	 *
	 * @var string
	 */
	protected $short;

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * frontImage
	 *
	 * @var string
	 */
	protected $frontImage;

	/**
	 * images
	 *
	 * @var string
	 */
	protected $images;

	/**
	 * startDate
	 *
	 * @var DateTime
	 */
	protected $startDate;

	/**
	 * endDate
	 *
	 * @var DateTime
	 */
	protected $endDate;

	/**
	 * city
	 *
	 * @var string
	 */
	protected $city;

	/**
	 * videos
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_Media>
	 */
	protected $videos;

	/**
	 * geoLocations
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_GeoLocation>
	 */
	protected $geoLocations;

	/**
	 * keywords
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_Keyword>
	 */
	protected $keywords;

	/**
	 * relatedPage
	 *
	 * @var Tx_Icticontent_Domain_Model_Typo3Page
	 */
	protected $relatedPage;

	/**
	 * categories
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_Category>
	 */
	protected $categories;

	/**
	 * relatedContents
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_Content>
	 */
	protected $relatedContents;

	/**
	 * geoAreas
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_GeoArea>
	 */
	protected $geoAreas;

	/**
	 * countries
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_Country>
	 */
	protected $countries;

	/**
	 * provinces
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_Province>
	 */
	protected $provinces;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->videos = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->geoLocations = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->keywords = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->categories = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->relatedContents = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->geoAreas = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->countries = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->provinces = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns the contentType
	 *
	 * @return integer $contentType
	 */
	public function getContentType() {
		return $this->contentType;
	}

	/**
	 * Sets the contentType
	 *
	 * @param integer $contentType
	 * @return void
	 */
	public function setContentType($contentType) {
		$this->contentType = $contentType;
	}

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
	 * Returns the short
	 *
	 * @return string $short
	 */
	public function getShort() {
		return $this->short;
	}

	/**
	 * Sets the short
	 *
	 * @param string $short
	 * @return void
	 */
	public function setShort($short) {
		$this->short = $short;
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
	 * Returns the frontImage
	 *
	 * @return string $frontImage
	 */
	public function getFrontImage() {
		return $this->frontImage;
	}

	/**
	 * Sets the frontImage
	 *
	 * @param string $frontImage
	 * @return void
	 */
	public function setFrontImage($frontImage) {
		$this->frontImage = $frontImage;
	}

	/**
	 * Returns the images
	 *
	 * @return string $images
	 */
	public function getImages() {
		return $this->images;
	}

	/**
	 * Sets the images
	 *
	 * @param string $images
	 * @return void
	 */
	public function setImages($images) {
		$this->images = $images;
	}

	/**
	 * Returns the startDate
	 *
	 * @return DateTime $startDate
	 */
	public function getStartDate() {
		return $this->startDate;
	}

	/**
	 * Sets the startDate
	 *
	 * @param DateTime $startDate
	 * @return void
	 */
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
	}

	/**
	 * Returns the endDate
	 *
	 * @return DateTime $endDate
	 */
	public function getEndDate() {
		return $this->endDate;
	}

	/**
	 * Sets the endDate
	 *
	 * @param DateTime $endDate
	 * @return void
	 */
	public function setEndDate($endDate) {
		$this->endDate = $endDate;
	}

	/**
	 * Returns the city
	 *
	 * @return string $city
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * Sets the city
	 *
	 * @param string $city
	 * @return void
	 */
	public function setCity($city) {
		$this->city = $city;
	}

	/**
	 * Adds a Media
	 *
	 * @param Tx_Icticontent_Domain_Model_Media $video
	 * @return void
	 */
	public function addVideo(Tx_Icticontent_Domain_Model_Media $video) {
		$this->videos->attach($video);
	}

	/**
	 * Removes a Media
	 *
	 * @param Tx_Icticontent_Domain_Model_Media $videoToRemove The Media to be removed
	 * @return void
	 */
	public function removeVideo(Tx_Icticontent_Domain_Model_Media $videoToRemove) {
		$this->videos->detach($videoToRemove);
	}

	/**
	 * Returns the videos
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_Media> $videos
	 */
	public function getVideos() {
		return $this->videos;
	}

	/**
	 * Sets the videos
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_Media> $videos
	 * @return void
	 */
	public function setVideos(Tx_Extbase_Persistence_ObjectStorage $videos) {
		$this->videos = $videos;
	}

	/**
	 * Adds a GeoLocation
	 *
	 * @param Tx_Icticontent_Domain_Model_GeoLocation $geoLocation
	 * @return void
	 */
	public function addGeoLocation(Tx_Icticontent_Domain_Model_GeoLocation $geoLocation) {
		$this->geoLocations->attach($geoLocation);
	}

	/**
	 * Removes a GeoLocation
	 *
	 * @param Tx_Icticontent_Domain_Model_GeoLocation $geoLocationToRemove The GeoLocation to be removed
	 * @return void
	 */
	public function removeGeoLocation(Tx_Icticontent_Domain_Model_GeoLocation $geoLocationToRemove) {
		$this->geoLocations->detach($geoLocationToRemove);
	}

	/**
	 * Returns the geoLocations
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_GeoLocation> $geoLocations
	 */
	public function getGeoLocations() {
		return $this->geoLocations;
	}

	/**
	 * Sets the geoLocations
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_GeoLocation> $geoLocations
	 * @return void
	 */
	public function setGeoLocations(Tx_Extbase_Persistence_ObjectStorage $geoLocations) {
		$this->geoLocations = $geoLocations;
	}

	/**
	 * Adds a Keyword
	 *
	 * @param Tx_Icticontent_Domain_Model_Keyword $keyword
	 * @return void
	 */
	public function addKeyword(Tx_Icticontent_Domain_Model_Keyword $keyword) {
		$this->keywords->attach($keyword);
	}

	/**
	 * Removes a Keyword
	 *
	 * @param Tx_Icticontent_Domain_Model_Keyword $keywordToRemove The Keyword to be removed
	 * @return void
	 */
	public function removeKeyword(Tx_Icticontent_Domain_Model_Keyword $keywordToRemove) {
		$this->keywords->detach($keywordToRemove);
	}

	/**
	 * Returns the keywords
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_Keyword> $keywords
	 */
	public function getKeywords() {
		return $this->keywords;
	}

	/**
	 * Sets the keywords
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_Keyword> $keywords
	 * @return void
	 */
	public function setKeywords(Tx_Extbase_Persistence_ObjectStorage $keywords) {
		$this->keywords = $keywords;
	}

	/**
	 * Returns the relatedPage
	 *
	 * @return Tx_Icticontent_Domain_Model_Typo3Page $relatedPage
	 */
	public function getRelatedPage() {
		return $this->relatedPage;
	}

	/**
	 * Sets the relatedPage
	 *
	 * @param Tx_Icticontent_Domain_Model_Typo3Page $relatedPage
	 * @return void
	 */
	public function setRelatedPage(Tx_Icticontent_Domain_Model_Typo3Page $relatedPage) {
		$this->relatedPage = $relatedPage;
	}

	/**
	 * Adds a Category
	 *
	 * @param Tx_Icticontent_Domain_Model_Category $category
	 * @return void
	 */
	public function addCategory(Tx_Icticontent_Domain_Model_Category $category) {
		$this->categories->attach($category);
	}

	/**
	 * Removes a Category
	 *
	 * @param Tx_Icticontent_Domain_Model_Category $categoryToRemove The Category to be removed
	 * @return void
	 */
	public function removeCategory(Tx_Icticontent_Domain_Model_Category $categoryToRemove) {
		$this->categories->detach($categoryToRemove);
	}

	/**
	 * Returns the categories
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_Category> $categories
	 */
	public function getCategories() {
		return $this->categories;
	}

	/**
	 * Sets the categories
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_Category> $categories
	 * @return void
	 */
	public function setCategories(Tx_Extbase_Persistence_ObjectStorage $categories) {
		$this->categories = $categories;
	}

	/**
	 * Adds a Content
	 *
	 * @param Tx_Icticontent_Domain_Model_Content $relatedContent
	 * @return void
	 */
	public function addRelatedContent(Tx_Icticontent_Domain_Model_Content $relatedContent) {
		$this->relatedContents->attach($relatedContent);
	}

	/**
	 * Removes a Content
	 *
	 * @param Tx_Icticontent_Domain_Model_Content $relatedContentToRemove The Content to be removed
	 * @return void
	 */
	public function removeRelatedContent(Tx_Icticontent_Domain_Model_Content $relatedContentToRemove) {
		$this->relatedContents->detach($relatedContentToRemove);
	}

	/**
	 * Returns the relatedContents
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_Content> $relatedContents
	 */
	public function getRelatedContents() {
		return $this->relatedContents;
	}

	/**
	 * Sets the relatedContents
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_Content> $relatedContents
	 * @return void
	 */
	public function setRelatedContents(Tx_Extbase_Persistence_ObjectStorage $relatedContents) {
		$this->relatedContents = $relatedContents;
	}

	/**
	 * Adds a GeoArea
	 *
	 * @param Tx_Icticontent_Domain_Model_GeoArea $geoArea
	 * @return void
	 */
	public function addGeoArea(Tx_Icticontent_Domain_Model_GeoArea $geoArea) {
		$this->geoAreas->attach($geoArea);
	}

	/**
	 * Removes a GeoArea
	 *
	 * @param Tx_Icticontent_Domain_Model_GeoArea $geoAreaToRemove The GeoArea to be removed
	 * @return void
	 */
	public function removeGeoArea(Tx_Icticontent_Domain_Model_GeoArea $geoAreaToRemove) {
		$this->geoAreas->detach($geoAreaToRemove);
	}

	/**
	 * Returns the geoAreas
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_GeoArea> $geoAreas
	 */
	public function getGeoAreas() {
		return $this->geoAreas;
	}

	/**
	 * Sets the geoAreas
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_GeoArea> $geoAreas
	 * @return void
	 */
	public function setGeoAreas(Tx_Extbase_Persistence_ObjectStorage $geoAreas) {
		$this->geoAreas = $geoAreas;
	}

	/**
	 * Adds a Country
	 *
	 * @param Tx_Icticontent_Domain_Model_Country $country
	 * @return void
	 */
	public function addCountry(Tx_Icticontent_Domain_Model_Country $country) {
		$this->countries->attach($country);
	}

	/**
	 * Removes a Country
	 *
	 * @param Tx_Icticontent_Domain_Model_Country $countryToRemove The Country to be removed
	 * @return void
	 */
	public function removeCountry(Tx_Icticontent_Domain_Model_Country $countryToRemove) {
		$this->countries->detach($countryToRemove);
	}

	/**
	 * Returns the countries
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_Country> $countries
	 */
	public function getCountries() {
		return $this->countries;
	}

	/**
	 * Sets the countries
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_Country> $countries
	 * @return void
	 */
	public function setCountries(Tx_Extbase_Persistence_ObjectStorage $countries) {
		$this->countries = $countries;
	}

	/**
	 * Adds a Province
	 *
	 * @param Tx_Icticontent_Domain_Model_Province $province
	 * @return void
	 */
	public function addProvince(Tx_Icticontent_Domain_Model_Province $province) {
		$this->provinces->attach($province);
	}

	/**
	 * Removes a Province
	 *
	 * @param Tx_Icticontent_Domain_Model_Province $provinceToRemove The Province to be removed
	 * @return void
	 */
	public function removeProvince(Tx_Icticontent_Domain_Model_Province $provinceToRemove) {
		$this->provinces->detach($provinceToRemove);
	}

	/**
	 * Returns the provinces
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_Province> $provinces
	 */
	public function getProvinces() {
		return $this->provinces;
	}

	/**
	 * Sets the provinces
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Icticontent_Domain_Model_Province> $provinces
	 * @return void
	 */
	public function setProvinces(Tx_Extbase_Persistence_ObjectStorage $provinces) {
		$this->provinces = $provinces;
	}

}
?>