<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType;

/**
 * Class representing AmenitiesAType
 */
class AmenitiesAType
{

    /**
     * An amenity for the contact.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType[] $amenity
     */
    private $amenity = null;

    /**
     * Adds as amenity
     *
     * An amenity for the contact.
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
     * An amenity for the contact.
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
     * An amenity for the contact.
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
     * An amenity for the contact.
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
     * An amenity for the contact.
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

