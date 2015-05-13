<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing DynamicPkgHotelSearchType
 *
 * A collection of hotel search criteria.
 * XSD Type: DynamicPkgHotelSearchType
 */
class DynamicPkgHotelSearchType extends DynamicPkgSearchType
{

    /**
     * The type of search.
     *
     * @property string $requestType
     */
    private $requestType = null;

    /**
     * Hotel search criteria.
     *
     * @property \Davispeixoto\OpenTravelAlliance\HotelSearchCriteriaType
     * $hotelSearchCriteria
     */
    private $hotelSearchCriteria = null;

    /**
     * Provides the ability to link a hotel search to a previsously booked hotel room.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelReservationIDsType\HotelReservationIDAType[]
     * $hotelReservationIDs
     */
    private $hotelReservationIDs = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as requestType
     *
     * The type of search.
     *
     * @return string
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * Sets a new requestType
     *
     * The type of search.
     *
     * @param string $requestType
     * @return self
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;

        return $this;
    }

    /**
     * Gets as hotelSearchCriteria
     *
     * Hotel search criteria.
     *
     * @return \Davispeixoto\OpenTravelAlliance\HotelSearchCriteriaType
     */
    public function getHotelSearchCriteria()
    {
        return $this->hotelSearchCriteria;
    }

    /**
     * Sets a new hotelSearchCriteria
     *
     * Hotel search criteria.
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelSearchCriteriaType
     * $hotelSearchCriteria
     * @return self
     */
    public function setHotelSearchCriteria(
        \Davispeixoto\OpenTravelAlliance\HotelSearchCriteriaType $hotelSearchCriteria
    ) {
        $this->hotelSearchCriteria = $hotelSearchCriteria;

        return $this;
    }

    /**
     * Adds as hotelReservationID
     *
     * Provides the ability to link a hotel search to a previsously booked hotel room.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelReservationIDsType\HotelReservationIDAType
     * $hotelReservationID
     */
    public function addToHotelReservationIDs(
        \Davispeixoto\OpenTravelAlliance\HotelReservationIDsType\HotelReservationIDAType $hotelReservationID
    ) {
        $this->hotelReservationIDs[] = $hotelReservationID;

        return $this;
    }

    /**
     * isset hotelReservationIDs
     *
     * Provides the ability to link a hotel search to a previsously booked hotel room.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelReservationIDs($index)
    {
        return isset($this->hotelReservationIDs[$index]);
    }

    /**
     * unset hotelReservationIDs
     *
     * Provides the ability to link a hotel search to a previsously booked hotel room.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelReservationIDs($index)
    {
        unset($this->hotelReservationIDs[$index]);
    }

    /**
     * Gets as hotelReservationIDs
     *
     * Provides the ability to link a hotel search to a previsously booked hotel room.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelReservationIDsType\HotelReservationIDAType[]
     */
    public function getHotelReservationIDs()
    {
        return $this->hotelReservationIDs;
    }

    /**
     * Sets a new hotelReservationIDs
     *
     * Provides the ability to link a hotel search to a previsously booked hotel room.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelReservationIDsType\HotelReservationIDAType[]
     * $hotelReservationIDs
     * @return self
     */
    public function setHotelReservationIDs(array $hotelReservationIDs)
    {
        $this->hotelReservationIDs = $hotelReservationIDs;

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

