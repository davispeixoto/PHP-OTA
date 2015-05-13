<?php

namespace Davispeixoto\OpenTravelAlliance\InvBlockType;

/**
 * Class representing RoomTypesAType
 */
class RoomTypesAType
{

    /**
     * This is a specific room type defined within an inventory block.
     *
     * @property \Davispeixoto\OpenTravelAlliance\InvBlockRoomType[] $roomType
     */
    private $roomType = null;

    /**
     * Adds as roomType
     *
     * This is a specific room type defined within an inventory block.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\InvBlockRoomType $roomType
     */
    public function addToRoomType(\Davispeixoto\OpenTravelAlliance\InvBlockRoomType $roomType)
    {
        $this->roomType[] = $roomType;

        return $this;
    }

    /**
     * isset roomType
     *
     * This is a specific room type defined within an inventory block.
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
     * This is a specific room type defined within an inventory block.
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
     * This is a specific room type defined within an inventory block.
     *
     * @return \Davispeixoto\OpenTravelAlliance\InvBlockRoomType[]
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Sets a new roomType
     *
     * This is a specific room type defined within an inventory block.
     *
     * @param \Davispeixoto\OpenTravelAlliance\InvBlockRoomType[] $roomType
     * @return self
     */
    public function setRoomType(array $roomType)
    {
        $this->roomType = $roomType;

        return $this;
    }


}

