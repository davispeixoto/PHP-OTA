<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PackageOptionSearchCriterionType
 *
 *
 * XSD Type: PackageOptionSearchCriterionType
 */
class PackageOptionSearchCriterionType
{

    /**
     * The Reference Point element allows for a search by proximity to a designated
     * reference point by name.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RefPointAType[]
     * $refPoint
     */
    private $refPoint = null;

    /**
     * Indicates the detail of hotel reference information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\HotelRefAType[]
     * $hotelRef
     */
    private $hotelRef = null;

    /**
     * Indicates the detail of package option reference information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\OptionRefAType[]
     * $optionRef
     */
    private $optionRef = null;

    /**
     * Indicates the detail of feature reference information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RatePlanRefAType[]
     * $ratePlanRef
     */
    private $ratePlanRef = null;

    /**
     * Range of dates, or fixed set of dates for Availability Request. Date range can
     * also be specified by using start dates and number of nights (minimum, maximum or
     * fixed).
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateTimeSpanType $dateRange
     */
    private $dateRange = null;

    /**
     * The types of package options to request.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RequestTypesAType\RequestTypeAType[]
     * $requestTypes
     */
    private $requestTypes = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\GuestCountType $guestCounts
     */
    private $guestCounts = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as refPoint
     *
     * The Reference Point element allows for a search by proximity to a designated
     * reference point by name.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RefPointAType
     * $refPoint
     */
    public function addToRefPoint(
        \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RefPointAType $refPoint
    ) {
        $this->refPoint[] = $refPoint;

        return $this;
    }

    /**
     * isset refPoint
     *
     * The Reference Point element allows for a search by proximity to a designated
     * reference point by name.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefPoint($index)
    {
        return isset($this->refPoint[$index]);
    }

    /**
     * unset refPoint
     *
     * The Reference Point element allows for a search by proximity to a designated
     * reference point by name.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefPoint($index)
    {
        unset($this->refPoint[$index]);
    }

    /**
     * Gets as refPoint
     *
     * The Reference Point element allows for a search by proximity to a designated
     * reference point by name.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RefPointAType[]
     */
    public function getRefPoint()
    {
        return $this->refPoint;
    }

    /**
     * Sets a new refPoint
     *
     * The Reference Point element allows for a search by proximity to a designated
     * reference point by name.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RefPointAType[]
     * $refPoint
     * @return self
     */
    public function setRefPoint(array $refPoint)
    {
        $this->refPoint = $refPoint;

        return $this;
    }

    /**
     * Adds as hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\HotelRefAType
     * $hotelRef
     */
    public function addToHotelRef(
        \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\HotelRefAType $hotelRef
    ) {
        $this->hotelRef[] = $hotelRef;

        return $this;
    }

    /**
     * isset hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelRef($index)
    {
        return isset($this->hotelRef[$index]);
    }

    /**
     * unset hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelRef($index)
    {
        unset($this->hotelRef[$index]);
    }

    /**
     * Gets as hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\HotelRefAType[]
     */
    public function getHotelRef()
    {
        return $this->hotelRef;
    }

    /**
     * Sets a new hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\HotelRefAType[]
     * $hotelRef
     * @return self
     */
    public function setHotelRef(array $hotelRef)
    {
        $this->hotelRef = $hotelRef;

        return $this;
    }

    /**
     * Adds as optionRef
     *
     * Indicates the detail of package option reference information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\OptionRefAType
     * $optionRef
     */
    public function addToOptionRef(
        \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\OptionRefAType $optionRef
    ) {
        $this->optionRef[] = $optionRef;

        return $this;
    }

    /**
     * isset optionRef
     *
     * Indicates the detail of package option reference information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOptionRef($index)
    {
        return isset($this->optionRef[$index]);
    }

    /**
     * unset optionRef
     *
     * Indicates the detail of package option reference information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOptionRef($index)
    {
        unset($this->optionRef[$index]);
    }

    /**
     * Gets as optionRef
     *
     * Indicates the detail of package option reference information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\OptionRefAType[]
     */
    public function getOptionRef()
    {
        return $this->optionRef;
    }

    /**
     * Sets a new optionRef
     *
     * Indicates the detail of package option reference information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\OptionRefAType[]
     * $optionRef
     * @return self
     */
    public function setOptionRef(array $optionRef)
    {
        $this->optionRef = $optionRef;

        return $this;
    }

    /**
     * Adds as ratePlanRef
     *
     * Indicates the detail of feature reference information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RatePlanRefAType
     * $ratePlanRef
     */
    public function addToRatePlanRef(
        \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RatePlanRefAType $ratePlanRef
    ) {
        $this->ratePlanRef[] = $ratePlanRef;

        return $this;
    }

    /**
     * isset ratePlanRef
     *
     * Indicates the detail of feature reference information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRatePlanRef($index)
    {
        return isset($this->ratePlanRef[$index]);
    }

    /**
     * unset ratePlanRef
     *
     * Indicates the detail of feature reference information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRatePlanRef($index)
    {
        unset($this->ratePlanRef[$index]);
    }

    /**
     * Gets as ratePlanRef
     *
     * Indicates the detail of feature reference information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RatePlanRefAType[]
     */
    public function getRatePlanRef()
    {
        return $this->ratePlanRef;
    }

    /**
     * Sets a new ratePlanRef
     *
     * Indicates the detail of feature reference information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RatePlanRefAType[]
     * $ratePlanRef
     * @return self
     */
    public function setRatePlanRef(array $ratePlanRef)
    {
        $this->ratePlanRef = $ratePlanRef;

        return $this;
    }

    /**
     * Gets as dateRange
     *
     * Range of dates, or fixed set of dates for Availability Request. Date range can
     * also be specified by using start dates and number of nights (minimum, maximum or
     * fixed).
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateTimeSpanType
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * Sets a new dateRange
     *
     * Range of dates, or fixed set of dates for Availability Request. Date range can
     * also be specified by using start dates and number of nights (minimum, maximum or
     * fixed).
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType $dateRange
     * @return self
     */
    public function setDateRange(\Davispeixoto\OpenTravelAlliance\DateTimeSpanType $dateRange)
    {
        $this->dateRange = $dateRange;

        return $this;
    }

    /**
     * Adds as requestType
     *
     * The types of package options to request.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RequestTypesAType\RequestTypeAType
     * $requestType
     */
    public function addToRequestTypes(
        \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RequestTypesAType\RequestTypeAType $requestType
    ) {
        $this->requestTypes[] = $requestType;

        return $this;
    }

    /**
     * isset requestTypes
     *
     * The types of package options to request.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRequestTypes($index)
    {
        return isset($this->requestTypes[$index]);
    }

    /**
     * unset requestTypes
     *
     * The types of package options to request.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRequestTypes($index)
    {
        unset($this->requestTypes[$index]);
    }

    /**
     * Gets as requestTypes
     *
     * The types of package options to request.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RequestTypesAType\RequestTypeAType[]
     */
    public function getRequestTypes()
    {
        return $this->requestTypes;
    }

    /**
     * Sets a new requestTypes
     *
     * The types of package options to request.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RequestTypesAType\RequestTypeAType[]
     * $requestTypes
     * @return self
     */
    public function setRequestTypes(array $requestTypes)
    {
        $this->requestTypes = $requestTypes;

        return $this;
    }

    /**
     * Gets as guestCounts
     *
     * @return \Davispeixoto\OpenTravelAlliance\GuestCountType
     */
    public function getGuestCounts()
    {
        return $this->guestCounts;
    }

    /**
     * Sets a new guestCounts
     *
     * @param \Davispeixoto\OpenTravelAlliance\GuestCountType $guestCounts
     * @return self
     */
    public function setGuestCounts(\Davispeixoto\OpenTravelAlliance\GuestCountType $guestCounts)
    {
        $this->guestCounts = $guestCounts;

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

