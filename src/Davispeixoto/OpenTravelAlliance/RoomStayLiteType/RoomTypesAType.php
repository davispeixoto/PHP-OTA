<?php

namespace Davispeixoto\OpenTravelAlliance\RoomStayLiteType;

/**
 * Class representing RoomTypesAType
 */
class RoomTypesAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\RoomTypeLiteType[] $roomType
     */
    private $roomType = null;

    /**
     * Adds as roomType
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RoomTypeLiteType $roomType
     */
    public function addToRoomType(\Davispeixoto\OpenTravelAlliance\RoomTypeLiteType $roomType)
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
     * @return \Davispeixoto\OpenTravelAlliance\RoomTypeLiteType[]
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Sets a new roomType
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomTypeLiteType[] $roomType
     * @return self
     */
    public function setRoomType(array $roomType)
    {
        $this->roomType = $roomType;

        return $this;
    }


}

