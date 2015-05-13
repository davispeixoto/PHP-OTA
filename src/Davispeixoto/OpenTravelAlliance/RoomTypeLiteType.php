<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RoomTypeLiteType
 *
 * Summary version of the RoomTypeType, initially created for the Travel Itinerary
 * Message set.
 * XSD Type: RoomTypeLiteType
 */
class RoomTypeLiteType
{

    /**
     * Specfic system room type code, ex: A1K, A1Q etc.
     *
     * @property string $roomTypeCode
     */
    private $roomTypeCode = null;

    /**
     * @property integer $numberOfUnits
     */
    private $numberOfUnits = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $roomDescription
     */
    private $roomDescription = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType[] $amenity
     */
    private $amenity = null;

    /**
     * Gets as roomTypeCode
     *
     * Specfic system room type code, ex: A1K, A1Q etc.
     *
     * @return string
     */
    public function getRoomTypeCode()
    {
        return $this->roomTypeCode;
    }

    /**
     * Sets a new roomTypeCode
     *
     * Specfic system room type code, ex: A1K, A1Q etc.
     *
     * @param string $roomTypeCode
     * @return self
     */
    public function setRoomTypeCode($roomTypeCode)
    {
        $this->roomTypeCode = $roomTypeCode;

        return $this;
    }

    /**
     * Gets as numberOfUnits
     *
     * @return integer
     */
    public function getNumberOfUnits()
    {
        return $this->numberOfUnits;
    }

    /**
     * Sets a new numberOfUnits
     *
     * @param integer $numberOfUnits
     * @return self
     */
    public function setNumberOfUnits($numberOfUnits)
    {
        $this->numberOfUnits = $numberOfUnits;

        return $this;
    }

    /**
     * Gets as roomDescription
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getRoomDescription()
    {
        return $this->roomDescription;
    }

    /**
     * Sets a new roomDescription
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $roomDescription
     * @return self
     */
    public function setRoomDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $roomDescription)
    {
        $this->roomDescription = $roomDescription;

        return $this;
    }

    /**
     * Adds as amenity
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
     * @return \Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType[]
     */
    public function getAmenity()
    {
        return $this->amenity;
    }

    /**
     * Sets a new amenity
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

