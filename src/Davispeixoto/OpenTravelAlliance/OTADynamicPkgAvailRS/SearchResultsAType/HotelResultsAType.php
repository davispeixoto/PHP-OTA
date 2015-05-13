<?php

namespace Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType;

use Davispeixoto\OpenTravelAlliance\DynamicPkgResponseType;

/**
 * Class representing HotelResultsAType
 *
 * A collection of available hotel inventory.
 */
class HotelResultsAType extends DynamicPkgResponseType
{

    /**
     * The type of search (PropertyRateList, PropertyList, RoomList).
     *
     * @property string $responseType
     */
    private $responseType = null;

    /**
     * A collection of room stays.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\HotelResultsAType\RoomStaysAType
     * $roomStays
     */
    private $roomStays = null;

    /**
     * Gets as responseType
     *
     * The type of search (PropertyRateList, PropertyList, RoomList).
     *
     * @return string
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * Sets a new responseType
     *
     * The type of search (PropertyRateList, PropertyList, RoomList).
     *
     * @param string $responseType
     * @return self
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;

        return $this;
    }

    /**
     * Gets as roomStays
     *
     * A collection of room stays.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\HotelResultsAType\RoomStaysAType
     */
    public function getRoomStays()
    {
        return $this->roomStays;
    }

    /**
     * Sets a new roomStays
     *
     * A collection of room stays.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\HotelResultsAType\RoomStaysAType
     * $roomStays
     * @return self
     */
    public function setRoomStays(
        \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\HotelResultsAType\RoomStaysAType $roomStays
    ) {
        $this->roomStays = $roomStays;

        return $this;
    }


}

