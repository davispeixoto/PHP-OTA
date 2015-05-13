<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TourActivityLodgingType
 *
 * Participant lodging information if required by a tour supplier/ operator.
 * XSD Type: TourActivityLodgingType
 */
class TourActivityLodgingType
{

    /**
     * The name of the hotel and/or other lodging facility the participant and/or group
     * is staying at.
     *
     * @property string $hotelName
     */
    private $hotelName = null;

    /**
     * The location of the hotel and/or other lodging facility.
     *
     * @property string $hotelLocation
     */
    private $hotelLocation = null;

    /**
     * The room number in the hotel and/or other lodging facility.
     *
     * @property string $roomNumber
     */
    private $roomNumber = null;

    /**
     * Gets as hotelName
     *
     * The name of the hotel and/or other lodging facility the participant and/or group
     * is staying at.
     *
     * @return string
     */
    public function getHotelName()
    {
        return $this->hotelName;
    }

    /**
     * Sets a new hotelName
     *
     * The name of the hotel and/or other lodging facility the participant and/or group
     * is staying at.
     *
     * @param string $hotelName
     * @return self
     */
    public function setHotelName($hotelName)
    {
        $this->hotelName = $hotelName;

        return $this;
    }

    /**
     * Gets as hotelLocation
     *
     * The location of the hotel and/or other lodging facility.
     *
     * @return string
     */
    public function getHotelLocation()
    {
        return $this->hotelLocation;
    }

    /**
     * Sets a new hotelLocation
     *
     * The location of the hotel and/or other lodging facility.
     *
     * @param string $hotelLocation
     * @return self
     */
    public function setHotelLocation($hotelLocation)
    {
        $this->hotelLocation = $hotelLocation;

        return $this;
    }

    /**
     * Gets as roomNumber
     *
     * The room number in the hotel and/or other lodging facility.
     *
     * @return string
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    /**
     * Sets a new roomNumber
     *
     * The room number in the hotel and/or other lodging facility.
     *
     * @param string $roomNumber
     * @return self
     */
    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;

        return $this;
    }


}

