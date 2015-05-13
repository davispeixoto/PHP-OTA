<?php

namespace Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType;

/**
 * Class representing AmenitiesAType
 */
class AmenitiesAType
{

    /**
     * Tangible room item(s) (e.g., newspaper) available to the guest.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType\AmenitiesAType\AmenityAType[]
     * $amenity
     */
    private $amenity = null;

    /**
     * Adds as amenity
     *
     * Tangible room item(s) (e.g., newspaper) available to the guest.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType\AmenitiesAType\AmenityAType
     * $amenity
     */
    public function addToAmenity(
        \Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType\AmenitiesAType\AmenityAType $amenity
    ) {
        $this->amenity[] = $amenity;

        return $this;
    }

    /**
     * isset amenity
     *
     * Tangible room item(s) (e.g., newspaper) available to the guest.
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
     * Tangible room item(s) (e.g., newspaper) available to the guest.
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
     * Tangible room item(s) (e.g., newspaper) available to the guest.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType\AmenitiesAType\AmenityAType[]
     */
    public function getAmenity()
    {
        return $this->amenity;
    }

    /**
     * Sets a new amenity
     *
     * Tangible room item(s) (e.g., newspaper) available to the guest.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType\AmenitiesAType\AmenityAType[]
     * $amenity
     * @return self
     */
    public function setAmenity(array $amenity)
    {
        $this->amenity = $amenity;

        return $this;
    }


}

