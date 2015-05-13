<?php

namespace Davispeixoto\OpenTravelAlliance\RoomTypeType;

/**
 * Class representing AmenitiesAType
 */
class AmenitiesAType
{

    /**
     * Used to provide room amenity information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType[] $amenity
     */
    private $amenity = null;

    /**
     * Adds as amenity
     *
     * Used to provide room amenity information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType $amenity
     */
    public function addToAmenity(\Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType $amenity)
    {
        $this->amenity[] = $amenity;

        return $this;
    }

    /**
     * isset amenity
     *
     * Used to provide room amenity information.
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
     * Used to provide room amenity information.
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
     * Used to provide room amenity information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType[]
     */
    public function getAmenity()
    {
        return $this->amenity;
    }

    /**
     * Sets a new amenity
     *
     * Used to provide room amenity information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType[] $amenity
     * @return self
     */
    public function setAmenity(array $amenity)
    {
        $this->amenity = $amenity;

        return $this;
    }


}

