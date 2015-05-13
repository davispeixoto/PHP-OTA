<?php

namespace Davispeixoto\OpenTravelAlliance\HotelProductType;

/**
 * Class representing RoomTypesAType
 */
class RoomTypesAType
{

    /**
     * An individual room type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType[]
     * $roomType
     */
    private $roomType = null;

    /**
     * Adds as roomType
     *
     * An individual room type.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType
     * $roomType
     */
    public function addToRoomType(
        \Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType $roomType
    ) {
        $this->roomType[] = $roomType;

        return $this;
    }

    /**
     * isset roomType
     *
     * An individual room type.
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
     * An individual room type.
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
     * An individual room type.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType[]
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Sets a new roomType
     *
     * An individual room type.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType[]
     * $roomType
     * @return self
     */
    public function setRoomType(array $roomType)
    {
        $this->roomType = $roomType;

        return $this;
    }


}

