<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PropertyValueMatchType
 *
 * A property that matches some or all of the search criteria.
 * XSD Type: PropertyValueMatchType
 */
class PropertyValueMatchType extends BasicPropertyInfoType
{

    /**
     * The search response returns this attribute if there were additional items that
     * could not fit within the response. The text value returned should be echoed in
     * the subsequent request in "Criteria/Criterion@MoreDataEchoToken" to indicate
     * where to begin the next block of data.
     *
     * @property string $moreDataEchoToken
     */
    private $moreDataEchoToken = null;

    /**
     * When true, this property is in the same country as the requested city's country.
     * When false, indicates this country is not the same as the requested city's
     * country.
     *
     * @property boolean $sameCountryInd
     */
    private $sameCountryInd = null;

    /**
     * The availability status of the property.
     *
     * @property string $availabilityStatus
     */
    private $availabilityStatus = null;

    /**
     * The string value used to search for a property is returned. The SearchValueMatch
     * element returns the input value and offers systems the ability to generate text
     * in the Warnings that communicate the reason for failure to locate a hotel. For
     * example, a Reference Point search may return the following processing message;
     * "No hotels found within 5 miles of Oswego Regional Airport".
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PropertyValueMatchType\SearchValueMatchAType[]
     * $searchValueMatch
     */
    private $searchValueMatch = null;

    /**
     * A collection of available amenities.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PropertyValueMatchType\AmenitiesAType\AmenityAType[]
     * $amenities
     */
    private $amenities = null;

    /**
     * Used to provide the minimum and maximum range of rates at this hotel property.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PropertyValueMatchType\RateRangeAType
     * $rateRange
     */
    private $rateRange = null;

    /**
     * Gets as moreDataEchoToken
     *
     * The search response returns this attribute if there were additional items that
     * could not fit within the response. The text value returned should be echoed in
     * the subsequent request in "Criteria/Criterion@MoreDataEchoToken" to indicate
     * where to begin the next block of data.
     *
     * @return string
     */
    public function getMoreDataEchoToken()
    {
        return $this->moreDataEchoToken;
    }

    /**
     * Sets a new moreDataEchoToken
     *
     * The search response returns this attribute if there were additional items that
     * could not fit within the response. The text value returned should be echoed in
     * the subsequent request in "Criteria/Criterion@MoreDataEchoToken" to indicate
     * where to begin the next block of data.
     *
     * @param string $moreDataEchoToken
     * @return self
     */
    public function setMoreDataEchoToken($moreDataEchoToken)
    {
        $this->moreDataEchoToken = $moreDataEchoToken;

        return $this;
    }

    /**
     * Gets as sameCountryInd
     *
     * When true, this property is in the same country as the requested city's country.
     * When false, indicates this country is not the same as the requested city's
     * country.
     *
     * @return boolean
     */
    public function getSameCountryInd()
    {
        return $this->sameCountryInd;
    }

    /**
     * Sets a new sameCountryInd
     *
     * When true, this property is in the same country as the requested city's country.
     * When false, indicates this country is not the same as the requested city's
     * country.
     *
     * @param boolean $sameCountryInd
     * @return self
     */
    public function setSameCountryInd($sameCountryInd)
    {
        $this->sameCountryInd = $sameCountryInd;

        return $this;
    }

    /**
     * Gets as availabilityStatus
     *
     * The availability status of the property.
     *
     * @return string
     */
    public function getAvailabilityStatus()
    {
        return $this->availabilityStatus;
    }

    /**
     * Sets a new availabilityStatus
     *
     * The availability status of the property.
     *
     * @param string $availabilityStatus
     * @return self
     */
    public function setAvailabilityStatus($availabilityStatus)
    {
        $this->availabilityStatus = $availabilityStatus;

        return $this;
    }

    /**
     * Adds as searchValueMatch
     *
     * The string value used to search for a property is returned. The SearchValueMatch
     * element returns the input value and offers systems the ability to generate text
     * in the Warnings that communicate the reason for failure to locate a hotel. For
     * example, a Reference Point search may return the following processing message;
     * "No hotels found within 5 miles of Oswego Regional Airport".
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PropertyValueMatchType\SearchValueMatchAType
     * $searchValueMatch
     */
    public function addToSearchValueMatch(
        \Davispeixoto\OpenTravelAlliance\PropertyValueMatchType\SearchValueMatchAType $searchValueMatch
    ) {
        $this->searchValueMatch[] = $searchValueMatch;

        return $this;
    }

    /**
     * isset searchValueMatch
     *
     * The string value used to search for a property is returned. The SearchValueMatch
     * element returns the input value and offers systems the ability to generate text
     * in the Warnings that communicate the reason for failure to locate a hotel. For
     * example, a Reference Point search may return the following processing message;
     * "No hotels found within 5 miles of Oswego Regional Airport".
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSearchValueMatch($index)
    {
        return isset($this->searchValueMatch[$index]);
    }

    /**
     * unset searchValueMatch
     *
     * The string value used to search for a property is returned. The SearchValueMatch
     * element returns the input value and offers systems the ability to generate text
     * in the Warnings that communicate the reason for failure to locate a hotel. For
     * example, a Reference Point search may return the following processing message;
     * "No hotels found within 5 miles of Oswego Regional Airport".
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSearchValueMatch($index)
    {
        unset($this->searchValueMatch[$index]);
    }

    /**
     * Gets as searchValueMatch
     *
     * The string value used to search for a property is returned. The SearchValueMatch
     * element returns the input value and offers systems the ability to generate text
     * in the Warnings that communicate the reason for failure to locate a hotel. For
     * example, a Reference Point search may return the following processing message;
     * "No hotels found within 5 miles of Oswego Regional Airport".
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PropertyValueMatchType\SearchValueMatchAType[]
     */
    public function getSearchValueMatch()
    {
        return $this->searchValueMatch;
    }

    /**
     * Sets a new searchValueMatch
     *
     * The string value used to search for a property is returned. The SearchValueMatch
     * element returns the input value and offers systems the ability to generate text
     * in the Warnings that communicate the reason for failure to locate a hotel. For
     * example, a Reference Point search may return the following processing message;
     * "No hotels found within 5 miles of Oswego Regional Airport".
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PropertyValueMatchType\SearchValueMatchAType[]
     * $searchValueMatch
     * @return self
     */
    public function setSearchValueMatch(array $searchValueMatch)
    {
        $this->searchValueMatch = $searchValueMatch;

        return $this;
    }

    /**
     * Adds as amenity
     *
     * A collection of available amenities.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PropertyValueMatchType\AmenitiesAType\AmenityAType
     * $amenity
     */
    public function addToAmenities(
        \Davispeixoto\OpenTravelAlliance\PropertyValueMatchType\AmenitiesAType\AmenityAType $amenity
    ) {
        $this->amenities[] = $amenity;

        return $this;
    }

    /**
     * isset amenities
     *
     * A collection of available amenities.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAmenities($index)
    {
        return isset($this->amenities[$index]);
    }

    /**
     * unset amenities
     *
     * A collection of available amenities.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAmenities($index)
    {
        unset($this->amenities[$index]);
    }

    /**
     * Gets as amenities
     *
     * A collection of available amenities.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PropertyValueMatchType\AmenitiesAType\AmenityAType[]
     */
    public function getAmenities()
    {
        return $this->amenities;
    }

    /**
     * Sets a new amenities
     *
     * A collection of available amenities.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PropertyValueMatchType\AmenitiesAType\AmenityAType[]
     * $amenities
     * @return self
     */
    public function setAmenities(array $amenities)
    {
        $this->amenities = $amenities;

        return $this;
    }

    /**
     * Gets as rateRange
     *
     * Used to provide the minimum and maximum range of rates at this hotel property.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PropertyValueMatchType\RateRangeAType
     */
    public function getRateRange()
    {
        return $this->rateRange;
    }

    /**
     * Sets a new rateRange
     *
     * Used to provide the minimum and maximum range of rates at this hotel property.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PropertyValueMatchType\RateRangeAType
     * $rateRange
     * @return self
     */
    public function setRateRange(\Davispeixoto\OpenTravelAlliance\PropertyValueMatchType\RateRangeAType $rateRange)
    {
        $this->rateRange = $rateRange;

        return $this;
    }


}

