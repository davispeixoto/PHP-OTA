<?php

namespace Davispeixoto\OpenTravelAlliance\GuestRoomType;

/**
 * Class representing AmenitiesAType
 */
class AmenitiesAType
{

    /**
     * Amenity Code Attribute is used to hold actual amenity code.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GuestRoomType\AmenitiesAType\AmenityAType[]
     * $amenity
     */
    private $amenity = null;

    /**
     * Adds as amenity
     *
     * Amenity Code Attribute is used to hold actual amenity code.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\GuestRoomType\AmenitiesAType\AmenityAType
     * $amenity
     */
    public function addToAmenity(\Davispeixoto\OpenTravelAlliance\GuestRoomType\AmenitiesAType\AmenityAType $amenity)
    {
        $this->amenity[] = $amenity;

        return $this;
    }

    /**
     * isset amenity
     *
     * Amenity Code Attribute is used to hold actual amenity code.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAmenity($index)
    {
        return isset($this->amenity[$index]);
    }

    /**
     * unset amenity
     *
     * Amenity Code Attribute is used to hold actual amenity code.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAmenity($index)
    {
        unset($this->amenity[$index]);
    }

    /**
     * Gets as amenity
     *
     * Amenity Code Attribute is used to hold actual amenity code.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GuestRoomType\AmenitiesAType\AmenityAType[]
     */
    public function getAmenity()
    {
        return $this->amenity;
    }

    /**
     * Sets a new amenity
     *
     * Amenity Code Attribute is used to hold actual amenity code.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\GuestRoomType\AmenitiesAType\AmenityAType[]
     * $amenity
     * @return self
     */
    public function setAmenity(array $amenity)
    {
        $this->amenity = $amenity;

        return $this;
    }


}

