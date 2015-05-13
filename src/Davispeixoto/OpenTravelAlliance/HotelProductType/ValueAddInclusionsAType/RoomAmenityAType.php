<?php

namespace Davispeixoto\OpenTravelAlliance\HotelProductType\ValueAddInclusionsAType;

/**
 * Class representing RoomAmenityAType
 */
class RoomAmenityAType
{

    /**
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @property string $roomAmenityCode
     */
    private $roomAmenityCode = null;

    /**
     * May be used to give further detail on the code.
     *
     * @property string $codeDetail
     */
    private $codeDetail = null;

    /**
     * The maximum number provided subject to guests in the room.
     *
     * @property integer $maxNumberProvided
     */
    private $maxNumberProvided = null;

    /**
     * Descriptive information for the room amentiy.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     */
    private $description = null;

    /**
     * Gets as roomAmenityCode
     *
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @return string
     */
    public function getRoomAmenityCode()
    {
        return $this->roomAmenityCode;
    }

    /**
     * Sets a new roomAmenityCode
     *
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @param string $roomAmenityCode
     * @return self
     */
    public function setRoomAmenityCode($roomAmenityCode)
    {
        $this->roomAmenityCode = $roomAmenityCode;

        return $this;
    }

    /**
     * Gets as codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;

        return $this;
    }

    /**
     * Gets as maxNumberProvided
     *
     * The maximum number provided subject to guests in the room.
     *
     * @return integer
     */
    public function getMaxNumberProvided()
    {
        return $this->maxNumberProvided;
    }

    /**
     * Sets a new maxNumberProvided
     *
     * The maximum number provided subject to guests in the room.
     *
     * @param integer $maxNumberProvided
     * @return self
     */
    public function setMaxNumberProvided($maxNumberProvided)
    {
        $this->maxNumberProvided = $maxNumberProvided;

        return $this;
    }

    /**
     * Gets as description
     *
     * Descriptive information for the room amentiy.
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
     * Descriptive information for the room amentiy.
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

