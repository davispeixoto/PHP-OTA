<?php

namespace Davispeixoto\OpenTravelAlliance\PropertyValueMatchType;

/**
 * Class representing AmenitiesAType
 */
class AmenitiesAType
{

    /**
     * This provides an area to pass amenity information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PropertyValueMatchType\AmenitiesAType\AmenityAType[]
     * $amenity
     */
    private $amenity = null;

    /**
     * Adds as amenity
     *
     * This provides an area to pass amenity information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PropertyValueMatchType\AmenitiesAType\AmenityAType
     * $amenity
     */
    public function addToAmenity(
        \Davispeixoto\OpenTravelAlliance\PropertyValueMatchType\AmenitiesAType\AmenityAType $amenity
    ) {
        $this->amenity[] = $amenity;

        return $this;
    }

    /**
     * isset amenity
     *
     * This provides an area to pass amenity information.
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
     * This provides an area to pass amenity information.
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
     * This provides an area to pass amenity information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PropertyValueMatchType\AmenitiesAType\AmenityAType[]
     */
    public function getAmenity()
    {
        return $this->amenity;
    }

    /**
     * Sets a new amenity
     *
     * This provides an area to pass amenity information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PropertyValueMatchType\AmenitiesAType\AmenityAType[]
     * $amenity
     * @return self
     */
    public function setAmenity(array $amenity)
    {
        $this->amenity = $amenity;

        return $this;
    }


}

