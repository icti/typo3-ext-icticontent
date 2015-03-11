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
	 * highlight
	 *
	 * @var boolean
	 */
	protected $highlight = FALSE;

	/**
	 * imagesCaptions
	 *
	 * @var string
	 */
	protected $imagesCaptions;

	/**
	 * imagesAltText
	 *
	 * @var string
	 */
	protected $imagesAltText;

	/**
	 * isRecurringEvent
	 *
	 * @var boolean
	 */
	protected $isRecurringEvent = FALSE;

	/**
	 * recurringType
	 *
	 * @var integer
	 */
	protected $recurringType = 0;
	
	const recurringTypeNone = 0;
	const recurringTypeDaily = 1;
	const recurringTypeWeekly = 2;
	const recurringTypeMonthly = 3;
	const recurringTypeYearly = 4;

	/**
	 * recurringInterval
	 *
	 * @var integer
	 */
	protected $recurringInterval = 0;

	/**
	 * videos
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Media>
	 * @lazy
	 */
	protected $videos;

	/**
	 * geoLocations
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_GeoLocation>
	 * @lazy
	 */
	protected $geoLocations;

	/**
	 * keywords
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Keyword>
	 * @lazy
	 */
	protected $keywords;

	/**
	 * relatedPage
	 *
	 * @var Tx_Icticontent_Domain_Model_Typo3Page
	 * @lazy
	 */
	protected $relatedPage;

	/**
	 * categories
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Category>
	 * @lazy
	 */
	protected $categories;

	/**
	 * relatedContents
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Content>
	 * @lazy
	 */
	protected $relatedContents;

	/**
	 * geoAreas
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_GeoArea>
	 * @lazy
	 */
	protected $geoAreas;

	/**
	 * countries
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Country>
	 * @lazy
	 */
	protected $countries;

	/**
	 * provinces
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Province>
	 * @lazy
	 */
	protected $provinces;

	/**
	 * downloads
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Media>
	 * @lazy
	 */
	protected $downloads;

	/**
	 * links
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Media>
	 * @lazy
	 */
	protected $links;

	/**
	 * authors
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Author>
	 * @lazy
	 */
	protected $authors;

	/**
	 * regions
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Region>
	 * @lazy
	 */
	protected $regions;

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
	 * Initializes all \TYPO3\CMS\Extbase\Persistence\ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->videos = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->geoLocations = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->keywords = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->categories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->relatedContents = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->geoAreas = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->countries = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->provinces = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->downloads = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->links = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->authors = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->regions = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
	 * @return Tx_Ictiextbase_Domain_Model_CsvMediaItem $frontImage
	 */
	public function getFrontImage() {
		if($this->frontImage){
			return new Tx_Ictiextbase_Domain_Model_CsvMediaItem($this->frontImage, 'uploads/tx_icticontent/');
		} else {
			return false;
		}
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
	 * @return Tx_Ictiextbase_Domain_Model_CsvMediaIterator $images
	 */
	public function getImages() {
		if($this->images){
			return new Tx_Ictiextbase_Domain_Model_CsvMediaIterator($this->images, 
					'uploads/tx_icticontent/', 
					$this->getImagesCaptions(), $this->getImagesAltText());
		}
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
	 * @return Tx_Ictiextbase_Helpers_DateTime $startDate
	 */
	public function getStartDate() {
		return $this->startDate;
	}

	/**
	 * Sets the startDate
	 *
	 * @param Tx_Ictiextbase_Helpers_DateTime $startDate
	 * @return void
	 */
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
	}

	/**
	 * Returns the endDate
	 *
	 * @return Tx_Ictiextbase_Helpers_DateTime $endDate
	 */
	public function getEndDate() {
		return $this->endDate;
	}

	/**
	 * Sets the endDate
	 *
	 * @param Tx_Ictiextbase_Helpers_DateTime $endDate
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
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Media> $videos
	 */
	public function getVideos() {
		return $this->videos;
	}

	/**
	 * Sets the videos
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Media> $videos
	 * @return void
	 */
	public function setVideos(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $videos) {
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
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_GeoLocation> $geoLocations
	 */
	public function getGeoLocations() {
		return $this->geoLocations;
	}

	/**
	 * Sets the geoLocations
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_GeoLocation> $geoLocations
	 * @return void
	 */
	public function setGeoLocations(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $geoLocations) {
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
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Keyword> $keywords
	 */
	public function getKeywords() {
		return $this->keywords;
	}

	/**
	 * Sets the keywords
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Keyword> $keywords
	 * @return void
	 */
	public function setKeywords(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $keywords) {
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
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Category> $categories
	 */
	public function getCategories() {
		return $this->categories;
	}

	/**
	 * Sets the categories
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Category> $categories
	 * @return void
	 */
	public function setCategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories) {
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
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Content> $relatedContents
	 */
	public function getRelatedContents() {
		return $this->relatedContents;
	}

	/**
	 * Sets the relatedContents
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Content> $relatedContents
	 * @return void
	 */
	public function setRelatedContents(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $relatedContents) {
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
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_GeoArea> $geoAreas
	 */
	public function getGeoAreas() {
		return $this->geoAreas;
	}

	/**
	 * Sets the geoAreas
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_GeoArea> $geoAreas
	 * @return void
	 */
	public function setGeoAreas(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $geoAreas) {
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
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Country> $countries
	 */
	public function getCountries() {
		return $this->countries;
	}

	/**
	 * Sets the countries
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Country> $countries
	 * @return void
	 */
	public function setCountries(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $countries) {
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
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Province> $provinces
	 */
	public function getProvinces() {
		return $this->provinces;
	}

	/**
	 * Sets the provinces
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Province> $provinces
	 * @return void
	 */
	public function setProvinces(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $provinces) {
		$this->provinces = $provinces;
	}

	/**
	 * Returns the highlight
	 *
	 * @return boolean $highlight
	 */
	public function getHighlight() {
		return $this->highlight;
	}

	/**
	 * Sets the highlight
	 *
	 * @param boolean $highlight
	 * @return void
	 */
	public function setHighlight($highlight) {
		$this->highlight = $highlight;
	}

	/**
	 * Returns the boolean state of highlight
	 *
	 * @return boolean
	 */
	public function isHighlight() {
		return $this->getHighlight();
	}

	/**
	 * Adds a Media
	 *
	 * @param Tx_Icticontent_Domain_Model_Media $download
	 * @return void
	 */
	public function addDownload(Tx_Icticontent_Domain_Model_Media $download) {
		$this->downloads->attach($download);
	}

	/**
	 * Removes a Media
	 *
	 * @param Tx_Icticontent_Domain_Model_Media $downloadToRemove The Media to be removed
	 * @return void
	 */
	public function removeDownload(Tx_Icticontent_Domain_Model_Media $downloadToRemove) {
		$this->downloads->detach($downloadToRemove);
	}

	/**
	 * Returns the downloads
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Media> $downloads
	 */
	public function getDownloads() {
		return $this->downloads;
	}

	/**
	 * Sets the downloads
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Media> $downloads
	 * @return void
	 */
	public function setDownloads(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $downloads) {
		$this->downloads = $downloads;
	}

	/**
	 * Adds a Media
	 *
	 * @param Tx_Icticontent_Domain_Model_Media $link
	 * @return void
	 */
	public function addLink(Tx_Icticontent_Domain_Model_Media $link) {
		$this->links->attach($link);
	}

	/**
	 * Removes a Media
	 *
	 * @param Tx_Icticontent_Domain_Model_Media $linkToRemove The Media to be removed
	 * @return void
	 */
	public function removeLink(Tx_Icticontent_Domain_Model_Media $linkToRemove) {
		$this->links->detach($linkToRemove);
	}

	/**
	 * Returns the links
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Media> $links
	 */
	public function getLinks() {
		return $this->links;
	}

	/**
	 * Sets the links
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Media> $links
	 * @return void
	 */
	public function setLinks(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $links) {
		$this->links = $links;
	}

	/**
	 * Returns the imagesCaptions
	 *
	 * @return string $imagesCaptions
	 */
	public function getImagesCaptions() {
		return $this->imagesCaptions;
	}

	/**
	 * Sets the imagesCaptions
	 *
	 * @param string $imagesCaptions
	 * @return void
	 */
	public function setImagesCaptions($imagesCaptions) {
		$this->imagesCaptions = $imagesCaptions;
	}

	/**
	 * Returns the imagesAltText
	 *
	 * @return string $imagesAltText
	 */
	public function getImagesAltText() {
		return $this->imagesAltText;
	}

	/**
	 * Sets the imagesAltText
	 *
	 * @param string $imagesAltText
	 * @return void
	 */
	public function setImagesAltText($imagesAltText) {
		$this->imagesAltText = $imagesAltText;
	}

	/**
	 * Adds a Author
	 *
	 * @param Tx_Icticontent_Domain_Model_Author $author
	 * @return void
	 */
	public function addAuthor(Tx_Icticontent_Domain_Model_Author $author) {
		$this->authors->attach($author);
	}

	/**
	 * Removes a Author
	 *
	 * @param Tx_Icticontent_Domain_Model_Author $authorToRemove The Author to be removed
	 * @return void
	 */
	public function removeAuthor(Tx_Icticontent_Domain_Model_Author $authorToRemove) {
		$this->authors->detach($authorToRemove);
	}

	/**
	 * Returns the authors
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Author> $authors
	 */
	public function getAuthors() {
		return $this->authors;
	}

	/**
	 * Sets the authors
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Author> $authors
	 * @return void
	 */
	public function setAuthors(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $authors) {
		$this->authors = $authors;
	}

	/**
	 * Adds a Region
	 *
	 * @param Tx_Icticontent_Domain_Model_Region $region
	 * @return void
	 */
	public function addRegion(Tx_Icticontent_Domain_Model_Region $region) {
		$this->regions->attach($region);
	}

	/**
	 * Removes a Region
	 *
	 * @param Tx_Icticontent_Domain_Model_Region $regionToRemove The Region to be removed
	 * @return void
	 */
	public function removeRegion(Tx_Icticontent_Domain_Model_Region $regionToRemove) {
		$this->regions->detach($regionToRemove);
	}

	/**
	 * Returns the regions
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Region> $regions
	 */
	public function getRegions() {
		return $this->regions;
	}

	/**
	 * Sets the regions
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Icticontent_Domain_Model_Region> $regions
	 * @return void
	 */
	public function setRegions(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $regions) {
		$this->regions = $regions;
	}

	/**
	 * Check if this content should appear on the given calendar day
	 *
	 * @param int $year
	 * @param int $month
	 * @param int $day
	 * @return boolean
	 */
	public function isInCalendarDay($year, $month, $day) {
		
		if(!$this->isIsRecurringEvent()){
			return $this->isInCalendarDayNotRecurring($year, $month, $day);
		} else {
			switch($this->getRecurringType()){
				
				case Tx_Icticontent_Domain_Model_Content::recurringTypeDaily:
					return $this->isInCalendarDayRecurringTypeDaily($year, $month, $day);

				case Tx_Icticontent_Domain_Model_Content::recurringTypeWeekly:
					return $this->isInCalendarDayRecurringTypeWeekly($year, $month, $day);
					
				case Tx_Icticontent_Domain_Model_Content::recurringTypeMonthly:
					return $this->isInCalendarDayRecurringTypeMonthly($year, $month, $day);

				case Tx_Icticontent_Domain_Model_Content::recurringTypeYearly:
					return $this->isInCalendarDayRecurringTypeYearly($year, $month, $day);
					
				default:
					return false;
			}
		}

	}
	
	/**
	 * Check if this content should appear on the given calendar day
	 *
	 * @param int $year
	 * @param int $month
	 * @param int $day
	 * @return boolean
	 */
	protected function isInCalendarDayNotRecurring($year, $month, $day) {
		
		$startDate = new DateTime;
		$startDate->setDate($year, $month, $day);
		$startDate->setTime(0,0);
		$endDate = new DateTime;
		$endDate->setDate($year, $month, $day);
		$endDate->setTime(23,59,59);

		if($this->getStartDate() >= $startDate && $this->getStartDate() <= $endDate){
			return true;
		} else {
			return false;
		}
	}	
	
	/**
	 * Check if this content should appear on the given calendar day
	 *
	 * @param int $year
	 * @param int $month
	 * @param int $day
	 * @return boolean
	 */
	protected function isInCalendarDayRecurringTypeDaily($year, $month, $day) {
		
		$dayBegin = new DateTime;
		$dayBegin->setDate($year, $month, $day);
		$dayBegin->setTime(0,0);
		$dayEnd = new DateTime;
		$dayEnd->setDate($year, $month, $day);
		$dayEnd->setTime(23,59,59);

		if($this->getStartDate() <= $dayEnd){
			
			if($this->getRecurringInterval() > 0){
				/**
				 * Can't use DateDiff, need to be PHP 5.2 compatible...
				 */
				$diffTstamp =  $dayEnd->format('U') - $this->getStartDate()->format('U');
				$diffDays = (int)floor($diffTstamp / (60*60*24));
				if( ($diffDays % ($this->getRecurringInterval() + 1)) != 0) {
					return false;
				}
				
			}
			
			
			if($this->getEndDate() && $this->getEndDate() < $dayBegin){
				return false;
			} else {
				return true;
			}
			
		} else {
			return false;
		}
	}	
	
	/**
	 * Check if this content should appear on the given calendar day
	 *
	 * @param int $year
	 * @param int $month
	 * @param int $day
	 * @return boolean
	 */
	protected function isInCalendarDayRecurringTypeWeekly($year, $month, $day) {
		
		$dayBegin = new DateTime;
		$dayBegin->setDate($year, $month, $day);
		$dayBegin->setTime(0,0);
		$dayEnd = new DateTime;
		$dayEnd->setDate($year, $month, $day);
		$dayEnd->setTime(23,59,59);

		if($this->getStartDate() <= $dayEnd){
			
			/**
			 * Can't use DateDiff, need to be PHP 5.2 compatible...
			 */
			$diffTstamp =  $dayEnd->format('U') - $this->getStartDate()->format('U');
			$diffDays = (int)floor($diffTstamp / (60*60*24));
			if( ($diffDays % (($this->getRecurringInterval() + 1) * 7)) != 0) {
				return false;
			}
				
			
			
			if($this->getEndDate() && $this->getEndDate() < $dayBegin){
				return false;
			} else {
				return true;
			}
			
		} else {
			return false;
		}
	}		
	
	
	/**
	 * Check if this content should appear on the given calendar day
	 *
	 * @param int $year
	 * @param int $month
	 * @param int $day
	 * @return boolean
	 */
	protected function isInCalendarDayRecurringTypeMonthly($year, $month, $day) {
		
		$dayBegin = new Tx_Ictiextbase_Helpers_DateTime;
		$dayBegin->setDate($year, $month, $day);
		$dayBegin->setTime(0,0);
		$dayEnd = new Tx_Ictiextbase_Helpers_DateTime;
		$dayEnd->setDate($year, $month, $day);
		$dayEnd->setTime(23,59,59);
		
		$dayBegin_debug = $dayBegin->format('c');
		$dayEnd_debug = $dayEnd->format('c');
		$startDate_debug = $this->getStartDate()->format('c');

		if($this->getStartDate() <= $dayEnd){
			
			$diffMonths = $dayBegin->diffMonths($this->getStartDate()) * -1;
			
			if( ($diffMonths % ($this->getRecurringInterval() + 1)) != 0) {
				return false;
			}
				
			$checkDate = Tx_Ictiextbase_Helpers_DateTime::copyFromDateTime($this->getStartDate());
			if($diffMonths > 0){
				$checkDate->addMonths($diffMonths);
			}

			if($checkDate >= $dayBegin && $checkDate <= $dayEnd){
				if($this->getEndDate() && $this->getEndDate() < $dayBegin){
					return false;
				} else {
					return true;
				}				
			} else {
				return false;
			}
			
		} else {
			return false;
		}
	}		
	
	
	/**
	 * Check if this content should appear on the given calendar day
	 *
	 * @param int $year
	 * @param int $month
	 * @param int $day
	 * @return boolean
	 */
	protected function isInCalendarDayRecurringTypeYearly($year, $month, $day) {
		
		$dayBegin = new Tx_Ictiextbase_Helpers_DateTime;
		$dayBegin->setDate($year, $month, $day);
		$dayBegin->setTime(0,0);
		$dayEnd = new Tx_Ictiextbase_Helpers_DateTime;
		$dayEnd->setDate($year, $month, $day);
		$dayEnd->setTime(23,59,59);

				
		if($this->getStartDate() <= $dayEnd){
			
			$diffMonths = $dayBegin->diffMonths($this->getStartDate()) * -1;
			
			if( ($diffMonths % (($this->getRecurringInterval() + 1) * 12) ) != 0) {
				return false;
			}
				
			$checkDate = Tx_Ictiextbase_Helpers_DateTime::copyFromDateTime($this->getStartDate());
			if($diffMonths > 0){
				$checkDate->addMonths($diffMonths);
			}

			if($checkDate >= $dayBegin && $checkDate <= $dayEnd){
				if($this->getEndDate() && $this->getEndDate() < $dayBegin){
					return false;
				} else {
					return true;
				}				
			} else {
				return false;
			}
			
		} else {
			return false;
		}
	}		

	/**
	 * Returns the isRecurringEvent
	 *
	 * @return boolean $isRecurringEvent
	 */
	public function getIsRecurringEvent() {
		return $this->isRecurringEvent;
	}

	/**
	 * Sets the isRecurringEvent
	 *
	 * @param boolean $isRecurringEvent
	 * @return void
	 */
	public function setIsRecurringEvent($isRecurringEvent) {
		$this->isRecurringEvent = $isRecurringEvent;
	}

	/**
	 * Returns the boolean state of isRecurringEvent
	 *
	 * @return boolean
	 */
	public function isIsRecurringEvent() {
		return $this->getIsRecurringEvent();
	}

	/**
	 * Returns the recurringType
	 *
	 * @return integer $recurringType
	 */
	public function getRecurringType() {
		return $this->recurringType;
	}

	/**
	 * Sets the recurringType
	 *
	 * @param integer $recurringType
	 * @return void
	 */
	public function setRecurringType($recurringType) {
		$this->recurringType = $recurringType;
	}

	/**
	 * Returns the recurringInterval
	 *
	 * @return integer $recurringInterval
	 */
	public function getRecurringInterval() {
		return $this->recurringInterval;
	}

	/**
	 * Sets the recurringInterval
	 *
	 * @param integer $recurringInterval
	 * @return void
	 */
	public function setRecurringInterval($recurringInterval) {
		$this->recurringInterval = $recurringInterval;
	}
	
	/**
	 * getObjectSignature
	 *
	 * @return
	 */
	public function getObjectSignature() {
		return get_class($this);
	}	

}
?>
