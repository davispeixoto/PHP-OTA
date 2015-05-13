<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS;

/**
 * Class representing HotelStaysAType
 */
class HotelStaysAType
{

    /**
     * A quick view of the requested hotels' general availability for each day in the
     * requested range.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType[]
     * $hotelStay
     */
    private $hotelStay = null;

    /**
     * Adds as hotelStay
     *
     * A quick view of the requested hotels' general availability for each day in the
     * requested range.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType
     * $hotelStay
     */
    public function addToHotelStay(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType $hotelStay
    ) {
        $this->hotelStay[] = $hotelStay;

        return $this;
    }

    /**
     * isset hotelStay
     *
     * A quick view of the requested hotels' general availability for each day in the
     * requested range.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelStay($index)
    {
        return isset($this->hotelStay[$index]);
    }

    /**
     * unset hotelStay
     *
     * A quick view of the requested hotels' general availability for each day in the
     * requested range.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelStay($index)
    {
        unset($this->hotelStay[$index]);
    }

    /**
     * Gets as hotelStay
     *
     * A quick view of the requested hotels' general availability for each day in the
     * requested range.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType[]
     */
    public function getHotelStay()
    {
        return $this->hotelStay;
    }

    /**
     * Sets a new hotelStay
     *
     * A quick view of the requested hotels' general availability for each day in the
     * requested range.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType[]
     * $hotelStay
     * @return self
     */
    public function setHotelStay(array $hotelStay)
    {
        $this->hotelStay = $hotelStay;

        return $this;
    }


}

