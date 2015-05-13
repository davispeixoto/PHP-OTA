<?php

namespace Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType;

/**
 * Class representing RoomTypeRefsAType
 */
class RoomTypeRefsAType
{

    /**
     * Specifies the room type code for other systems.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType\RoomTypeRefsAType\RoomTypeRefAType[]
     * $roomTypeRef
     */
    private $roomTypeRef = null;

    /**
     * Adds as roomTypeRef
     *
     * Specifies the room type code for other systems.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType\RoomTypeRefsAType\RoomTypeRefAType
     * $roomTypeRef
     */
    public function addToRoomTypeRef(
        \Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType\RoomTypeRefsAType\RoomTypeRefAType $roomTypeRef
    ) {
        $this->roomTypeRef[] = $roomTypeRef;

        return $this;
    }

    /**
     * isset roomTypeRef
     *
     * Specifies the room type code for other systems.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomTypeRef($index)
    {
        return isset($this->roomTypeRef[$index]);
    }

    /**
     * unset roomTypeRef
     *
     * Specifies the room type code for other systems.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomTypeRef($index)
    {
        unset($this->roomTypeRef[$index]);
    }

    /**
     * Gets as roomTypeRef
     *
     * Specifies the room type code for other systems.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType\RoomTypeRefsAType\RoomTypeRefAType[]
     */
    public function getRoomTypeRef()
    {
        return $this->roomTypeRef;
    }

    /**
     * Sets a new roomTypeRef
     *
     * Specifies the room type code for other systems.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType\RoomTypeRefsAType\RoomTypeRefAType[]
     * $roomTypeRef
     * @return self
     */
    public function setRoomTypeRef(array $roomTypeRef)
    {
        $this->roomTypeRef = $roomTypeRef;

        return $this;
    }


}

