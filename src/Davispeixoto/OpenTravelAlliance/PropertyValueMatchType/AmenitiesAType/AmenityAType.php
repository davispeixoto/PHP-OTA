<?php

namespace Davispeixoto\OpenTravelAlliance\PropertyValueMatchType\AmenitiesAType;

use Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType;

/**
 * Class representing AmenityAType
 */
class AmenityAType extends RoomAmenityPrefType
{

    /**
     * Identifies the amenities offered by the hotel. Refer to OpenTravel Code List
     * Hotel Amenity Code (HAC).
     *
     * @property string $propertyAmenityType
     */
    private $propertyAmenityType = null;

    /**
     * Gets as propertyAmenityType
     *
     * Identifies the amenities offered by the hotel. Refer to OpenTravel Code List
     * Hotel Amenity Code (HAC).
     *
     * @return string
     */
    public function getPropertyAmenityType()
    {
        return $this->propertyAmenityType;
    }

    /**
     * Sets a new propertyAmenityType
     *
     * Identifies the amenities offered by the hotel. Refer to OpenTravel Code List
     * Hotel Amenity Code (HAC).
     *
     * @param string $propertyAmenityType
     * @return self
     */
    public function setPropertyAmenityType($propertyAmenityType)
    {
        $this->propertyAmenityType = $propertyAmenityType;

        return $this;
    }


}

