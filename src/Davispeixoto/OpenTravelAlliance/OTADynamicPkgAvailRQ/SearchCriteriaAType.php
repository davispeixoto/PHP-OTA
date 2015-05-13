<?php

namespace Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRQ;

/**
 * Class representing SearchCriteriaAType
 */
class SearchCriteriaAType
{

    /**
     * Promotion codes that will be applied at either the package or component level.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRQ\SearchCriteriaAType\PromotionCodesAType\PromotionCodeAType[]
     * $promotionCodes
     */
    private $promotionCodes = null;

    /**
     * Identifies specific search criteria for air searches.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DynamicPkgAirSearchType[] $airSearch
     */
    private $airSearch = null;

    /**
     * Identifies specific search criteria for hotel searches.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DynamicPkgHotelSearchType[]
     * $hotelSearch
     */
    private $hotelSearch = null;

    /**
     * Identifies specific search criteria for package option searches.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DynamicPkgOptionSearchType[]
     * $packageOptionSearch
     */
    private $packageOptionSearch = null;

    /**
     * Identifies specific search criteria for rental car searches.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DynamicPkgCarSearchType[] $carSearch
     */
    private $carSearch = null;

    /**
     * Multimodal offer influencers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer
     */
    private $multimodalOffer = null;

    /**
     * Adds as promotionCode
     *
     * Promotion codes that will be applied at either the package or component level.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRQ\SearchCriteriaAType\PromotionCodesAType\PromotionCodeAType
     * $promotionCode
     */
    public function addToPromotionCodes(
        \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRQ\SearchCriteriaAType\PromotionCodesAType\PromotionCodeAType $promotionCode
    ) {
        $this->promotionCodes[] = $promotionCode;

        return $this;
    }

    /**
     * isset promotionCodes
     *
     * Promotion codes that will be applied at either the package or component level.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPromotionCodes($index)
    {
        return isset($this->promotionCodes[$index]);
    }

    /**
     * unset promotionCodes
     *
     * Promotion codes that will be applied at either the package or component level.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPromotionCodes($index)
    {
        unset($this->promotionCodes[$index]);
    }

    /**
     * Gets as promotionCodes
     *
     * Promotion codes that will be applied at either the package or component level.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRQ\SearchCriteriaAType\PromotionCodesAType\PromotionCodeAType[]
     */
    public function getPromotionCodes()
    {
        return $this->promotionCodes;
    }

    /**
     * Sets a new promotionCodes
     *
     * Promotion codes that will be applied at either the package or component level.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRQ\SearchCriteriaAType\PromotionCodesAType\PromotionCodeAType[]
     * $promotionCodes
     * @return self
     */
    public function setPromotionCodes(array $promotionCodes)
    {
        $this->promotionCodes = $promotionCodes;

        return $this;
    }

    /**
     * Adds as airSearch
     *
     * Identifies specific search criteria for air searches.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DynamicPkgAirSearchType $airSearch
     */
    public function addToAirSearch(\Davispeixoto\OpenTravelAlliance\DynamicPkgAirSearchType $airSearch)
    {
        $this->airSearch[] = $airSearch;

        return $this;
    }

    /**
     * isset airSearch
     *
     * Identifies specific search criteria for air searches.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirSearch($index)
    {
        return isset($this->airSearch[$index]);
    }

    /**
     * unset airSearch
     *
     * Identifies specific search criteria for air searches.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirSearch($index)
    {
        unset($this->airSearch[$index]);
    }

    /**
     * Gets as airSearch
     *
     * Identifies specific search criteria for air searches.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DynamicPkgAirSearchType[]
     */
    public function getAirSearch()
    {
        return $this->airSearch;
    }

    /**
     * Sets a new airSearch
     *
     * Identifies specific search criteria for air searches.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DynamicPkgAirSearchType[] $airSearch
     * @return self
     */
    public function setAirSearch(array $airSearch)
    {
        $this->airSearch = $airSearch;

        return $this;
    }

    /**
     * Adds as hotelSearch
     *
     * Identifies specific search criteria for hotel searches.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DynamicPkgHotelSearchType $hotelSearch
     */
    public function addToHotelSearch(\Davispeixoto\OpenTravelAlliance\DynamicPkgHotelSearchType $hotelSearch)
    {
        $this->hotelSearch[] = $hotelSearch;

        return $this;
    }

    /**
     * isset hotelSearch
     *
     * Identifies specific search criteria for hotel searches.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelSearch($index)
    {
        return isset($this->hotelSearch[$index]);
    }

    /**
     * unset hotelSearch
     *
     * Identifies specific search criteria for hotel searches.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelSearch($index)
    {
        unset($this->hotelSearch[$index]);
    }

    /**
     * Gets as hotelSearch
     *
     * Identifies specific search criteria for hotel searches.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DynamicPkgHotelSearchType[]
     */
    public function getHotelSearch()
    {
        return $this->hotelSearch;
    }

    /**
     * Sets a new hotelSearch
     *
     * Identifies specific search criteria for hotel searches.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DynamicPkgHotelSearchType[] $hotelSearch
     * @return self
     */
    public function setHotelSearch(array $hotelSearch)
    {
        $this->hotelSearch = $hotelSearch;

        return $this;
    }

    /**
     * Adds as packageOptionSearch
     *
     * Identifies specific search criteria for package option searches.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DynamicPkgOptionSearchType
     * $packageOptionSearch
     */
    public function addToPackageOptionSearch(
        \Davispeixoto\OpenTravelAlliance\DynamicPkgOptionSearchType $packageOptionSearch
    ) {
        $this->packageOptionSearch[] = $packageOptionSearch;

        return $this;
    }

    /**
     * isset packageOptionSearch
     *
     * Identifies specific search criteria for package option searches.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPackageOptionSearch($index)
    {
        return isset($this->packageOptionSearch[$index]);
    }

    /**
     * unset packageOptionSearch
     *
     * Identifies specific search criteria for package option searches.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPackageOptionSearch($index)
    {
        unset($this->packageOptionSearch[$index]);
    }

    /**
     * Gets as packageOptionSearch
     *
     * Identifies specific search criteria for package option searches.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DynamicPkgOptionSearchType[]
     */
    public function getPackageOptionSearch()
    {
        return $this->packageOptionSearch;
    }

    /**
     * Sets a new packageOptionSearch
     *
     * Identifies specific search criteria for package option searches.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DynamicPkgOptionSearchType[]
     * $packageOptionSearch
     * @return self
     */
    public function setPackageOptionSearch(array $packageOptionSearch)
    {
        $this->packageOptionSearch = $packageOptionSearch;

        return $this;
    }

    /**
     * Adds as carSearch
     *
     * Identifies specific search criteria for rental car searches.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DynamicPkgCarSearchType $carSearch
     */
    public function addToCarSearch(\Davispeixoto\OpenTravelAlliance\DynamicPkgCarSearchType $carSearch)
    {
        $this->carSearch[] = $carSearch;

        return $this;
    }

    /**
     * isset carSearch
     *
     * Identifies specific search criteria for rental car searches.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCarSearch($index)
    {
        return isset($this->carSearch[$index]);
    }

    /**
     * unset carSearch
     *
     * Identifies specific search criteria for rental car searches.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCarSearch($index)
    {
        unset($this->carSearch[$index]);
    }

    /**
     * Gets as carSearch
     *
     * Identifies specific search criteria for rental car searches.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DynamicPkgCarSearchType[]
     */
    public function getCarSearch()
    {
        return $this->carSearch;
    }

    /**
     * Sets a new carSearch
     *
     * Identifies specific search criteria for rental car searches.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DynamicPkgCarSearchType[] $carSearch
     * @return self
     */
    public function setCarSearch(array $carSearch)
    {
        $this->carSearch = $carSearch;

        return $this;
    }

    /**
     * Gets as multimodalOffer
     *
     * Multimodal offer influencers.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MultiModalOfferType
     */
    public function getMultimodalOffer()
    {
        return $this->multimodalOffer;
    }

    /**
     * Sets a new multimodalOffer
     *
     * Multimodal offer influencers.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer
     * @return self
     */
    public function setMultimodalOffer(\Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer)
    {
        $this->multimodalOffer = $multimodalOffer;

        return $this;
    }


}

