<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelProductRQ\HotelProductsAType\HotelProductAType;

/**
 * Class representing RoomTypesAType
 */
class RoomTypesAType
{

    /**
     * When true, send all room types. When false, only send the room type(s)
     * requested.
     *
     * @property boolean $sendAllInd
     */
    private $sendAllInd = null;

    /**
     * Specifies the amount of content that should be returned in the response, such as
     * the full details or just the unique reference.
     *
     * @property string $contentLevel
     */
    private $contentLevel = null;

    /**
     * An individual room type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelProductRQ\HotelProductsAType\HotelProductAType\RoomTypesAType\RoomTypeAType[]
     * $roomType
     */
    private $roomType = null;

    /**
     * Gets as sendAllInd
     *
     * When true, send all room types. When false, only send the room type(s)
     * requested.
     *
     * @return boolean
     */
    public function getSendAllInd()
    {
        return $this->sendAllInd;
    }

    /**
     * Sets a new sendAllInd
     *
     * When true, send all room types. When false, only send the room type(s)
     * requested.
     *
     * @param boolean $sendAllInd
     * @return self
     */
    public function setSendAllInd($sendAllInd)
    {
        $this->sendAllInd = $sendAllInd;

        return $this;
    }

    /**
     * Gets as contentLevel
     *
     * Specifies the amount of content that should be returned in the response, such as
     * the full details or just the unique reference.
     *
     * @return string
     */
    public function getContentLevel()
    {
        return $this->contentLevel;
    }

    /**
     * Sets a new contentLevel
     *
     * Specifies the amount of content that should be returned in the response, such as
     * the full details or just the unique reference.
     *
     * @param string $contentLevel
     * @return self
     */
    public function setContentLevel($contentLevel)
    {
        $this->contentLevel = $contentLevel;

        return $this;
    }

    /**
     * Adds as roomType
     *
     * An individual room type.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelProductRQ\HotelProductsAType\HotelProductAType\RoomTypesAType\RoomTypeAType
     * $roomType
     */
    public function addToRoomType(
        \Davispeixoto\OpenTravelAlliance\OTAHotelProductRQ\HotelProductsAType\HotelProductAType\RoomTypesAType\RoomTypeAType $roomType
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelProductRQ\HotelProductsAType\HotelProductAType\RoomTypesAType\RoomTypeAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelProductRQ\HotelProductsAType\HotelProductAType\RoomTypesAType\RoomTypeAType[]
     * $roomType
     * @return self
     */
    public function setRoomType(array $roomType)
    {
        $this->roomType = $roomType;

        return $this;
    }


}

