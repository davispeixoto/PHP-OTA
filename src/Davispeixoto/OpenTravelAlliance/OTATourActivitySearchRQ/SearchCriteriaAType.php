<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ;

/**
 * Class representing SearchCriteriaAType
 */
class SearchCriteriaAType
{

    /**
     * The name and supplier/ trading partner unique IDs. Note, this level of
     * information is typically only specified to search for the existence (validity)
     * of a tour and/or activity.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityIDType $basicInfo
     */
    private $basicInfo = null;

    /**
     * Category and type preferences.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\CategoryTypePrefAType[]
     * $categoryTypePref
     */
    private $categoryTypePref = null;

    /**
     * Specifies the number of customers, optionally by customer type or group size.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\CustomerCountsAType[]
     * $customerCounts
     */
    private $customerCounts = null;

    /**
     * The preferred start date/ time and allowable time window for the search.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\DateTimePrefAType
     * $dateTimePref
     */
    private $dateTimePref = null;

    /**
     * Allows the inclusion or exclusion of keywords to be matched.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\KeywordPrefAType[]
     * $keywordPref
     */
    private $keywordPref = null;

    /**
     * Up to 9 locations to be included in or excluded from the search.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\LocationPrefAType[]
     * $locationPref
     */
    private $locationPref = null;

    /**
     * Other preferences, including guide, spoken language and physically challenged
     * accessibility.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\OtherPrefAType
     * $otherPref
     */
    private $otherPref = null;

    /**
     * Range or limit of budget.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\PricePrefAType
     * $pricePref
     */
    private $pricePref = null;

    /**
     * Allows the inclusion or exclusion of a supplier/ operator.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\SupplierOperatorPrefAType[]
     * $supplierOperatorPref
     */
    private $supplierOperatorPref = null;

    /**
     * Multimodal offer influencers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer
     */
    private $multimodalOffer = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as basicInfo
     *
     * The name and supplier/ trading partner unique IDs. Note, this level of
     * information is typically only specified to search for the existence (validity)
     * of a tour and/or activity.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityIDType
     */
    public function getBasicInfo()
    {
        return $this->basicInfo;
    }

    /**
     * Sets a new basicInfo
     *
     * The name and supplier/ trading partner unique IDs. Note, this level of
     * information is typically only specified to search for the existence (validity)
     * of a tour and/or activity.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityIDType $basicInfo
     * @return self
     */
    public function setBasicInfo(\Davispeixoto\OpenTravelAlliance\TourActivityIDType $basicInfo)
    {
        $this->basicInfo = $basicInfo;

        return $this;
    }

    /**
     * Adds as categoryTypePref
     *
     * Category and type preferences.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\CategoryTypePrefAType
     * $categoryTypePref
     */
    public function addToCategoryTypePref(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\CategoryTypePrefAType $categoryTypePref
    ) {
        $this->categoryTypePref[] = $categoryTypePref;

        return $this;
    }

    /**
     * isset categoryTypePref
     *
     * Category and type preferences.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCategoryTypePref($index)
    {
        return isset($this->categoryTypePref[$index]);
    }

    /**
     * unset categoryTypePref
     *
     * Category and type preferences.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCategoryTypePref($index)
    {
        unset($this->categoryTypePref[$index]);
    }

    /**
     * Gets as categoryTypePref
     *
     * Category and type preferences.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\CategoryTypePrefAType[]
     */
    public function getCategoryTypePref()
    {
        return $this->categoryTypePref;
    }

    /**
     * Sets a new categoryTypePref
     *
     * Category and type preferences.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\CategoryTypePrefAType[]
     * $categoryTypePref
     * @return self
     */
    public function setCategoryTypePref(array $categoryTypePref)
    {
        $this->categoryTypePref = $categoryTypePref;

        return $this;
    }

    /**
     * Adds as customerCounts
     *
     * Specifies the number of customers, optionally by customer type or group size.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\CustomerCountsAType
     * $customerCounts
     */
    public function addToCustomerCounts(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\CustomerCountsAType $customerCounts
    ) {
        $this->customerCounts[] = $customerCounts;

        return $this;
    }

    /**
     * isset customerCounts
     *
     * Specifies the number of customers, optionally by customer type or group size.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCustomerCounts($index)
    {
        return isset($this->customerCounts[$index]);
    }

    /**
     * unset customerCounts
     *
     * Specifies the number of customers, optionally by customer type or group size.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCustomerCounts($index)
    {
        unset($this->customerCounts[$index]);
    }

    /**
     * Gets as customerCounts
     *
     * Specifies the number of customers, optionally by customer type or group size.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\CustomerCountsAType[]
     */
    public function getCustomerCounts()
    {
        return $this->customerCounts;
    }

    /**
     * Sets a new customerCounts
     *
     * Specifies the number of customers, optionally by customer type or group size.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\CustomerCountsAType[]
     * $customerCounts
     * @return self
     */
    public function setCustomerCounts(array $customerCounts)
    {
        $this->customerCounts = $customerCounts;

        return $this;
    }

    /**
     * Gets as dateTimePref
     *
     * The preferred start date/ time and allowable time window for the search.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\DateTimePrefAType
     */
    public function getDateTimePref()
    {
        return $this->dateTimePref;
    }

    /**
     * Sets a new dateTimePref
     *
     * The preferred start date/ time and allowable time window for the search.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\DateTimePrefAType
     * $dateTimePref
     * @return self
     */
    public function setDateTimePref(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\DateTimePrefAType $dateTimePref
    ) {
        $this->dateTimePref = $dateTimePref;

        return $this;
    }

    /**
     * Adds as keywordPref
     *
     * Allows the inclusion or exclusion of keywords to be matched.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\KeywordPrefAType
     * $keywordPref
     */
    public function addToKeywordPref(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\KeywordPrefAType $keywordPref
    ) {
        $this->keywordPref[] = $keywordPref;

        return $this;
    }

    /**
     * isset keywordPref
     *
     * Allows the inclusion or exclusion of keywords to be matched.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetKeywordPref($index)
    {
        return isset($this->keywordPref[$index]);
    }

    /**
     * unset keywordPref
     *
     * Allows the inclusion or exclusion of keywords to be matched.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetKeywordPref($index)
    {
        unset($this->keywordPref[$index]);
    }

    /**
     * Gets as keywordPref
     *
     * Allows the inclusion or exclusion of keywords to be matched.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\KeywordPrefAType[]
     */
    public function getKeywordPref()
    {
        return $this->keywordPref;
    }

    /**
     * Sets a new keywordPref
     *
     * Allows the inclusion or exclusion of keywords to be matched.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\KeywordPrefAType[]
     * $keywordPref
     * @return self
     */
    public function setKeywordPref(array $keywordPref)
    {
        $this->keywordPref = $keywordPref;

        return $this;
    }

    /**
     * Adds as locationPref
     *
     * Up to 9 locations to be included in or excluded from the search.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\LocationPrefAType
     * $locationPref
     */
    public function addToLocationPref(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\LocationPrefAType $locationPref
    ) {
        $this->locationPref[] = $locationPref;

        return $this;
    }

    /**
     * isset locationPref
     *
     * Up to 9 locations to be included in or excluded from the search.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLocationPref($index)
    {
        return isset($this->locationPref[$index]);
    }

    /**
     * unset locationPref
     *
     * Up to 9 locations to be included in or excluded from the search.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLocationPref($index)
    {
        unset($this->locationPref[$index]);
    }

    /**
     * Gets as locationPref
     *
     * Up to 9 locations to be included in or excluded from the search.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\LocationPrefAType[]
     */
    public function getLocationPref()
    {
        return $this->locationPref;
    }

    /**
     * Sets a new locationPref
     *
     * Up to 9 locations to be included in or excluded from the search.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\LocationPrefAType[]
     * $locationPref
     * @return self
     */
    public function setLocationPref(array $locationPref)
    {
        $this->locationPref = $locationPref;

        return $this;
    }

    /**
     * Gets as otherPref
     *
     * Other preferences, including guide, spoken language and physically challenged
     * accessibility.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\OtherPrefAType
     */
    public function getOtherPref()
    {
        return $this->otherPref;
    }

    /**
     * Sets a new otherPref
     *
     * Other preferences, including guide, spoken language and physically challenged
     * accessibility.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\OtherPrefAType
     * $otherPref
     * @return self
     */
    public function setOtherPref(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\OtherPrefAType $otherPref
    ) {
        $this->otherPref = $otherPref;

        return $this;
    }

    /**
     * Gets as pricePref
     *
     * Range or limit of budget.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\PricePrefAType
     */
    public function getPricePref()
    {
        return $this->pricePref;
    }

    /**
     * Sets a new pricePref
     *
     * Range or limit of budget.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\PricePrefAType
     * $pricePref
     * @return self
     */
    public function setPricePref(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\PricePrefAType $pricePref
    ) {
        $this->pricePref = $pricePref;

        return $this;
    }

    /**
     * Adds as supplierOperatorPref
     *
     * Allows the inclusion or exclusion of a supplier/ operator.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\SupplierOperatorPrefAType
     * $supplierOperatorPref
     */
    public function addToSupplierOperatorPref(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\SupplierOperatorPrefAType $supplierOperatorPref
    ) {
        $this->supplierOperatorPref[] = $supplierOperatorPref;

        return $this;
    }

    /**
     * isset supplierOperatorPref
     *
     * Allows the inclusion or exclusion of a supplier/ operator.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSupplierOperatorPref($index)
    {
        return isset($this->supplierOperatorPref[$index]);
    }

    /**
     * unset supplierOperatorPref
     *
     * Allows the inclusion or exclusion of a supplier/ operator.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSupplierOperatorPref($index)
    {
        unset($this->supplierOperatorPref[$index]);
    }

    /**
     * Gets as supplierOperatorPref
     *
     * Allows the inclusion or exclusion of a supplier/ operator.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\SupplierOperatorPrefAType[]
     */
    public function getSupplierOperatorPref()
    {
        return $this->supplierOperatorPref;
    }

    /**
     * Sets a new supplierOperatorPref
     *
     * Allows the inclusion or exclusion of a supplier/ operator.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\SupplierOperatorPrefAType[]
     * $supplierOperatorPref
     * @return self
     */
    public function setSupplierOperatorPref(array $supplierOperatorPref)
    {
        $this->supplierOperatorPref = $supplierOperatorPref;

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

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

