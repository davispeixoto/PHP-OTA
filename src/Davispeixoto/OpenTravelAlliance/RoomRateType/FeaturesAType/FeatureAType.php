<?php

namespace Davispeixoto\OpenTravelAlliance\RoomRateType\FeaturesAType;

/**
 * Class representing FeatureAType
 */
class FeatureAType
{

    /**
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @property string $roomAmenity
     */
    private $roomAmenity = null;

    /**
     * Provides the quantity of the amenity in the room. When zero, the amenity is
     * either unavailable or not allowed.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Specifies the type of view a room has. Refer to OpenTravel Code List Room View
     * Type (RVT).
     *
     * @property string $roomViewCode
     */
    private $roomViewCode = null;

    /**
     * A hotel accessibility feature. Please use a value from the OpenTravel Disability
     * Feature Code (PHY) code list.
     *
     * @property string $accessibilityCode
     */
    private $accessibilityCode = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $description
     */
    private $description = null;

    /**
     * Gets as roomAmenity
     *
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @return string
     */
    public function getRoomAmenity()
    {
        return $this->roomAmenity;
    }

    /**
     * Sets a new roomAmenity
     *
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @param string $roomAmenity
     * @return self
     */
    public function setRoomAmenity($roomAmenity)
    {
        $this->roomAmenity = $roomAmenity;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * Provides the quantity of the amenity in the room. When zero, the amenity is
     * either unavailable or not allowed.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Provides the quantity of the amenity in the room. When zero, the amenity is
     * either unavailable or not allowed.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as roomViewCode
     *
     * Specifies the type of view a room has. Refer to OpenTravel Code List Room View
     * Type (RVT).
     *
     * @return string
     */
    public function getRoomViewCode()
    {
        return $this->roomViewCode;
    }

    /**
     * Sets a new roomViewCode
     *
     * Specifies the type of view a room has. Refer to OpenTravel Code List Room View
     * Type (RVT).
     *
     * @param string $roomViewCode
     * @return self
     */
    public function setRoomViewCode($roomViewCode)
    {
        $this->roomViewCode = $roomViewCode;

        return $this;
    }

    /**
     * Gets as accessibilityCode
     *
     * A hotel accessibility feature. Please use a value from the OpenTravel Disability
     * Feature Code (PHY) code list.
     *
     * @return string
     */
    public function getAccessibilityCode()
    {
        return $this->accessibilityCode;
    }

    /**
     * Sets a new accessibilityCode
     *
     * A hotel accessibility feature. Please use a value from the OpenTravel Disability
     * Feature Code (PHY) code list.
     *
     * @param string $accessibilityCode
     * @return self
     */
    public function setAccessibilityCode($accessibilityCode)
    {
        $this->accessibilityCode = $accessibilityCode;

        return $this;
    }

    /**
     * Adds as description
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     */
    public function addToDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $description)
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * isset description
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;

        return $this;
    }


}

