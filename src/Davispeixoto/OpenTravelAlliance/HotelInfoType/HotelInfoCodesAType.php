<?php

namespace Davispeixoto\OpenTravelAlliance\HotelInfoType;

/**
 * Class representing HotelInfoCodesAType
 */
class HotelInfoCodesAType
{

    /**
     * Contains code information about the hotel.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\HotelInfoCodesAType\HotelInfoCodeAType[]
     * $hotelInfoCode
     */
    private $hotelInfoCode = null;

    /**
     * Adds as hotelInfoCode
     *
     * Contains code information about the hotel.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\HotelInfoCodesAType\HotelInfoCodeAType
     * $hotelInfoCode
     */
    public function addToHotelInfoCode(
        \Davispeixoto\OpenTravelAlliance\HotelInfoType\HotelInfoCodesAType\HotelInfoCodeAType $hotelInfoCode
    ) {
        $this->hotelInfoCode[] = $hotelInfoCode;

        return $this;
    }

    /**
     * isset hotelInfoCode
     *
     * Contains code information about the hotel.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelInfoCode($index)
    {
        return isset($this->hotelInfoCode[$index]);
    }

    /**
     * unset hotelInfoCode
     *
     * Contains code information about the hotel.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelInfoCode($index)
    {
        unset($this->hotelInfoCode[$index]);
    }

    /**
     * Gets as hotelInfoCode
     *
     * Contains code information about the hotel.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\HotelInfoCodesAType\HotelInfoCodeAType[]
     */
    public function getHotelInfoCode()
    {
        return $this->hotelInfoCode;
    }

    /**
     * Sets a new hotelInfoCode
     *
     * Contains code information about the hotel.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\HotelInfoCodesAType\HotelInfoCodeAType[]
     * $hotelInfoCode
     * @return self
     */
    public function setHotelInfoCode(array $hotelInfoCode)
    {
        $this->hotelInfoCode = $hotelInfoCode;

        return $this;
    }


}

