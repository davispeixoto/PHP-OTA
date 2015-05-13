<?php

namespace Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType;

/**
 * Class representing RoomTypesAType
 */
class RoomTypesAType
{

    /**
     * Defines each room type included in Client negotiated rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType[]
     * $roomType
     */
    private $roomType = null;

    /**
     * Adds as roomType
     *
     * Defines each room type included in Client negotiated rate.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType
     * $roomType
     */
    public function addToRoomType(
        \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType $roomType
    ) {
        $this->roomType[] = $roomType;

        return $this;
    }

    /**
     * isset roomType
     *
     * Defines each room type included in Client negotiated rate.
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
     * Defines each room type included in Client negotiated rate.
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
     * Defines each room type included in Client negotiated rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType[]
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Sets a new roomType
     *
     * Defines each room type included in Client negotiated rate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType[]
     * $roomType
     * @return self
     */
    public function setRoomType(array $roomType)
    {
        $this->roomType = $roomType;

        return $this;
    }


}

