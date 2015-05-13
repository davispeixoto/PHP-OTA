<?php

namespace Davispeixoto\OpenTravelAlliance\RoomStayType;

use Davispeixoto\OpenTravelAlliance\RoomTypeType;

/**
 * Class representing RoomTypesAType
 */
class RoomTypesAType
{

    /**
     * @property RoomTypeType[] $roomType
     */
    private $roomType = null;

    /**
     * Adds as roomType
     *
     * @return self
     * @param RoomTypeType $roomType
     */
    public function addToRoomType(RoomTypeType $roomType)
    {
        $this->roomType[] = $roomType;

        return $this;
    }

    /**
     * isset roomType
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomType($index)
    {
        return isset($this->roomType[$index]);
    }

    /**
     * unset roomType
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomType($index)
    {
        unset($this->roomType[$index]);
    }

    /**
     * Gets as roomType
     *
     * @return RoomTypeType[]
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Sets a new roomType
     *
     * @param RoomTypeType[] $roomType
     * @return self
     */
    public function setRoomType(array $roomType)
    {
        $this->roomType = $roomType;

        return $this;
    }


}

