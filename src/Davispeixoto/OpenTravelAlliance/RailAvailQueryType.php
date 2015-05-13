<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RailAvailQueryType
 *
 * Defines criteria for a rail availability query.
 * XSD Type: RailAvailQueryType
 */
class RailAvailQueryType
{

    /**
     * A collection of information about the locations for which availability is to be
     * checked. It may be repeated to query availability of each individual train in
     * multiple train segments for a specified route.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailAvailScheduleQueryType[]
     * $availBaseQueryCriteria
     */
    private $availBaseQueryCriteria = null;

    /**
     * Specify passenger type/category.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPassengerCategoryType[]
     * $passengerType
     */
    private $passengerType = null;

    /**
     * Indicates the date and time search criteria for the return journey.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelDateTimeType $returnInfo
     */
    private $returnInfo = null;

    /**
     * Specifies the preferences for the availability request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailAvailPrefsType $railPrefs
     */
    private $railPrefs = null;

    /**
     * Adds as availBaseQueryCriteria
     *
     * A collection of information about the locations for which availability is to be
     * checked. It may be repeated to query availability of each individual train in
     * multiple train segments for a specified route.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailAvailScheduleQueryType
     * $availBaseQueryCriteria
     */
    public function addToAvailBaseQueryCriteria(
        \Davispeixoto\OpenTravelAlliance\RailAvailScheduleQueryType $availBaseQueryCriteria
    ) {
        $this->availBaseQueryCriteria[] = $availBaseQueryCriteria;

        return $this;
    }

    /**
     * isset availBaseQueryCriteria
     *
     * A collection of information about the locations for which availability is to be
     * checked. It may be repeated to query availability of each individual train in
     * multiple train segments for a specified route.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAvailBaseQueryCriteria($index)
    {
        return isset($this->availBaseQueryCriteria[$index]);
    }

    /**
     * unset availBaseQueryCriteria
     *
     * A collection of information about the locations for which availability is to be
     * checked. It may be repeated to query availability of each individual train in
     * multiple train segments for a specified route.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAvailBaseQueryCriteria($index)
    {
        unset($this->availBaseQueryCriteria[$index]);
    }

    /**
     * Gets as availBaseQueryCriteria
     *
     * A collection of information about the locations for which availability is to be
     * checked. It may be repeated to query availability of each individual train in
     * multiple train segments for a specified route.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailAvailScheduleQueryType[]
     */
    public function getAvailBaseQueryCriteria()
    {
        return $this->availBaseQueryCriteria;
    }

    /**
     * Sets a new availBaseQueryCriteria
     *
     * A collection of information about the locations for which availability is to be
     * checked. It may be repeated to query availability of each individual train in
     * multiple train segments for a specified route.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailAvailScheduleQueryType[]
     * $availBaseQueryCriteria
     * @return self
     */
    public function setAvailBaseQueryCriteria(array $availBaseQueryCriteria)
    {
        $this->availBaseQueryCriteria = $availBaseQueryCriteria;

        return $this;
    }

    /**
     * Adds as passengerType
     *
     * Specify passenger type/category.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPassengerCategoryType $passengerType
     */
    public function addToPassengerType(\Davispeixoto\OpenTravelAlliance\RailPassengerCategoryType $passengerType)
    {
        $this->passengerType[] = $passengerType;

        return $this;
    }

    /**
     * isset passengerType
     *
     * Specify passenger type/category.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerType($index)
    {
        return isset($this->passengerType[$index]);
    }

    /**
     * unset passengerType
     *
     * Specify passenger type/category.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerType($index)
    {
        unset($this->passengerType[$index]);
    }

    /**
     * Gets as passengerType
     *
     * Specify passenger type/category.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPassengerCategoryType[]
     */
    public function getPassengerType()
    {
        return $this->passengerType;
    }

    /**
     * Sets a new passengerType
     *
     * Specify passenger type/category.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPassengerCategoryType[]
     * $passengerType
     * @return self
     */
    public function setPassengerType(array $passengerType)
    {
        $this->passengerType = $passengerType;

        return $this;
    }

    /**
     * Gets as returnInfo
     *
     * Indicates the date and time search criteria for the return journey.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelDateTimeType
     */
    public function getReturnInfo()
    {
        return $this->returnInfo;
    }

    /**
     * Sets a new returnInfo
     *
     * Indicates the date and time search criteria for the return journey.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelDateTimeType $returnInfo
     * @return self
     */
    public function setReturnInfo(\Davispeixoto\OpenTravelAlliance\TravelDateTimeType $returnInfo)
    {
        $this->returnInfo = $returnInfo;

        return $this;
    }

    /**
     * Gets as railPrefs
     *
     * Specifies the preferences for the availability request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailAvailPrefsType
     */
    public function getRailPrefs()
    {
        return $this->railPrefs;
    }

    /**
     * Sets a new railPrefs
     *
     * Specifies the preferences for the availability request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailAvailPrefsType $railPrefs
     * @return self
     */
    public function setRailPrefs(\Davispeixoto\OpenTravelAlliance\RailAvailPrefsType $railPrefs)
    {
        $this->railPrefs = $railPrefs;

        return $this;
    }


}

