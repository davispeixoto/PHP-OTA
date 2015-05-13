<?php

namespace Davispeixoto\OpenTravelAlliance\GuestRoomType\AmenitiesAType;

/**
 * Class representing AmenityAType
 */
class AmenityAType
{

    /**
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @property string $amenityCode
     */
    private $amenityCode = null;

    /**
     * Gets as amenityCode
     *
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @return string
     */
    public function getAmenityCode()
    {
        return $this->amenityCode;
    }

    /**
     * Sets a new amenityCode
     *
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @param string $amenityCode
     * @return self
     */
    public function setAmenityCode($amenityCode)
    {
        $this->amenityCode = $amenityCode;

        return $this;
    }


}

