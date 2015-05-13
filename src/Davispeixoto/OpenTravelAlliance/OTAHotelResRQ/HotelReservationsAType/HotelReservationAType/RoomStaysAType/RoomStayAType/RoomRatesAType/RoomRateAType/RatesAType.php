<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType;

/**
 * Class representing RatesAType
 */
class RatesAType
{

    /**
     * Rate MAY specify the room rate that the requestor is expecting to be booked.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType
     * $rate
     */
    private $rate = null;

    /**
     * Gets as rate
     *
     * Rate MAY specify the room rate that the requestor is expecting to be booked.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * Rate MAY specify the room rate that the requestor is expecting to be booked.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType
     * $rate
     * @return self
     */
    public function setRate(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType $rate
    ) {
        $this->rate = $rate;

        return $this;
    }


}

