<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType;

/**
 * Class representing RoomTypesAType
 */
class RoomTypesAType
{

    /**
     * RoomType MUST specify the details of an available room type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType[]
     * $roomType
     */
    private $roomType = null;

    /**
     * Adds as roomType
     *
     * RoomType MUST specify the details of an available room type.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType
     * $roomType
     */
    public function addToRoomType(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType $roomType
    ) {
        $this->roomType[] = $roomType;

        return $this;
    }

    /**
     * isset roomType
     *
     * RoomType MUST specify the details of an available room type.
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
     * RoomType MUST specify the details of an available room type.
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
     * RoomType MUST specify the details of an available room type.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType[]
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Sets a new roomType
     *
     * RoomType MUST specify the details of an available room type.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType[]
     * $roomType
     * @return self
     */
    public function setRoomType(array $roomType)
    {
        $this->roomType = $roomType;

        return $this;
    }


}

