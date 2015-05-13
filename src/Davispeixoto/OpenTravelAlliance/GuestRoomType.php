<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GuestRoomType
 *
 * GuestRoomType is used to contain all the information on a guest room.
 * XSD Type: GuestRoomType
 */
class GuestRoomType
{

    /**
     * Max rollaways, number of beds.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GuestRoomType\QuantitiesAType
     * $quantities
     */
    private $quantities = null;

    /**
     * Provides parameters of occupancy limits.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GuestRoomType\OccupancyAType[]
     * $occupancy
     */
    private $occupancy = null;

    /**
     * Attributes to describe the room from room category to location to view to bed
     * type.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GuestRoomType\RoomAType $room
     */
    private $room = null;

    /**
     * Collection of room level amenities.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GuestRoomType\AmenitiesAType\AmenityAType[]
     * $amenities
     */
    private $amenities = null;

    /**
     * Collection of fees charged at the room level.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GuestRoomType\RoomLevelFeesAType
     * $roomLevelFees
     */
    private $roomLevelFees = null;

    /**
     * Additional guest amounts which are attached to room, not rate.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AdditionalGuestAmountType[]
     * $additionalGuestAmount
     */
    private $additionalGuestAmount = null;

    /**
     * Description of the Room.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     */
    private $description = null;

    /**
     * Gets as quantities
     *
     * Max rollaways, number of beds.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GuestRoomType\QuantitiesAType
     */
    public function getQuantities()
    {
        return $this->quantities;
    }

    /**
     * Sets a new quantities
     *
     * Max rollaways, number of beds.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GuestRoomType\QuantitiesAType
     * $quantities
     * @return self
     */
    public function setQuantities(\Davispeixoto\OpenTravelAlliance\GuestRoomType\QuantitiesAType $quantities)
    {
        $this->quantities = $quantities;

        return $this;
    }

    /**
     * Adds as occupancy
     *
     * Provides parameters of occupancy limits.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GuestRoomType\OccupancyAType $occupancy
     */
    public function addToOccupancy(\Davispeixoto\OpenTravelAlliance\GuestRoomType\OccupancyAType $occupancy)
    {
        $this->occupancy[] = $occupancy;

        return $this;
    }

    /**
     * isset occupancy
     *
     * Provides parameters of occupancy limits.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOccupancy($index)
    {
        return isset($this->occupancy[$index]);
    }

    /**
     * unset occupancy
     *
     * Provides parameters of occupancy limits.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOccupancy($index)
    {
        unset($this->occupancy[$index]);
    }

    /**
     * Gets as occupancy
     *
     * Provides parameters of occupancy limits.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GuestRoomType\OccupancyAType[]
     */
    public function getOccupancy()
    {
        return $this->occupancy;
    }

    /**
     * Sets a new occupancy
     *
     * Provides parameters of occupancy limits.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GuestRoomType\OccupancyAType[]
     * $occupancy
     * @return self
     */
    public function setOccupancy(array $occupancy)
    {
        $this->occupancy = $occupancy;

        return $this;
    }

    /**
     * Gets as room
     *
     * Attributes to describe the room from room category to location to view to bed
     * type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GuestRoomType\RoomAType
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Sets a new room
     *
     * Attributes to describe the room from room category to location to view to bed
     * type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GuestRoomType\RoomAType $room
     * @return self
     */
    public function setRoom(\Davispeixoto\OpenTravelAlliance\GuestRoomType\RoomAType $room)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Adds as amenity
     *
     * Collection of room level amenities.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\GuestRoomType\AmenitiesAType\AmenityAType
     * $amenity
     */
    public function addToAmenities(\Davispeixoto\OpenTravelAlliance\GuestRoomType\AmenitiesAType\AmenityAType $amenity)
    {
        $this->amenities[] = $amenity;

        return $this;
    }

    /**
     * isset amenities
     *
     * Collection of room level amenities.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAmenities($index)
    {
        return isset($this->amenities[$index]);
    }

    /**
     * unset amenities
     *
     * Collection of room level amenities.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAmenities($index)
    {
        unset($this->amenities[$index]);
    }

    /**
     * Gets as amenities
     *
     * Collection of room level amenities.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GuestRoomType\AmenitiesAType\AmenityAType[]
     */
    public function getAmenities()
    {
        return $this->amenities;
    }

    /**
     * Sets a new amenities
     *
     * Collection of room level amenities.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\GuestRoomType\AmenitiesAType\AmenityAType[]
     * $amenities
     * @return self
     */
    public function setAmenities(array $amenities)
    {
        $this->amenities = $amenities;

        return $this;
    }

    /**
     * Gets as roomLevelFees
     *
     * Collection of fees charged at the room level.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GuestRoomType\RoomLevelFeesAType
     */
    public function getRoomLevelFees()
    {
        return $this->roomLevelFees;
    }

    /**
     * Sets a new roomLevelFees
     *
     * Collection of fees charged at the room level.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GuestRoomType\RoomLevelFeesAType
     * $roomLevelFees
     * @return self
     */
    public function setRoomLevelFees(\Davispeixoto\OpenTravelAlliance\GuestRoomType\RoomLevelFeesAType $roomLevelFees)
    {
        $this->roomLevelFees = $roomLevelFees;

        return $this;
    }

    /**
     * Adds as additionalGuestAmount
     *
     * Additional guest amounts which are attached to room, not rate.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AdditionalGuestAmountType
     * $additionalGuestAmount
     */
    public function addToAdditionalGuestAmount(
        \Davispeixoto\OpenTravelAlliance\AdditionalGuestAmountType $additionalGuestAmount
    ) {
        $this->additionalGuestAmount[] = $additionalGuestAmount;

        return $this;
    }

    /**
     * isset additionalGuestAmount
     *
     * Additional guest amounts which are attached to room, not rate.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalGuestAmount($index)
    {
        return isset($this->additionalGuestAmount[$index]);
    }

    /**
     * unset additionalGuestAmount
     *
     * Additional guest amounts which are attached to room, not rate.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalGuestAmount($index)
    {
        unset($this->additionalGuestAmount[$index]);
    }

    /**
     * Gets as additionalGuestAmount
     *
     * Additional guest amounts which are attached to room, not rate.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AdditionalGuestAmountType[]
     */
    public function getAdditionalGuestAmount()
    {
        return $this->additionalGuestAmount;
    }

    /**
     * Sets a new additionalGuestAmount
     *
     * Additional guest amounts which are attached to room, not rate.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AdditionalGuestAmountType[]
     * $additionalGuestAmount
     * @return self
     */
    public function setAdditionalGuestAmount(array $additionalGuestAmount)
    {
        $this->additionalGuestAmount = $additionalGuestAmount;

        return $this;
    }

    /**
     * Gets as description
     *
     * Description of the Room.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description of the Room.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     * @return self
     */
    public function setDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $description)
    {
        $this->description = $description;

        return $this;
    }


}

