<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelProductRQ\HotelProductsAType\HotelProductAType\RoomTypesAType;

/**
 * Class representing RoomTypeAType
 */
class RoomTypeAType
{

    /**
     * Specific system room type code, ex: A1K, A1Q etc. This may be the sending
     * system's room type code or the receiving system's room type code depending on
     * the trading partner agreement.
     *
     * @property string $roomTypeCode
     */
    private $roomTypeCode = null;

    /**
     * Gets as roomTypeCode
     *
     * Specific system room type code, ex: A1K, A1Q etc. This may be the sending
     * system's room type code or the receiving system's room type code depending on
     * the trading partner agreement.
     *
     * @return string
     */
    public function getRoomTypeCode()
    {
        return $this->roomTypeCode;
    }

    /**
     * Sets a new roomTypeCode
     *
     * Specific system room type code, ex: A1K, A1Q etc. This may be the sending
     * system's room type code or the receiving system's room type code depending on
     * the trading partner agreement.
     *
     * @param string $roomTypeCode
     * @return self
     */
    public function setRoomTypeCode($roomTypeCode)
    {
        $this->roomTypeCode = $roomTypeCode;

        return $this;
    }


}

