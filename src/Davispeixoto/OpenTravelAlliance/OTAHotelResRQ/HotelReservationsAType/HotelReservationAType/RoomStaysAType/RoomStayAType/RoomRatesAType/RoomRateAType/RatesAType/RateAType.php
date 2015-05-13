<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType;

/**
 * Class representing RateAType
 */
class RateAType
{

    /**
     * The Total MUST specify the amount that the requestor is expecting to be booked
     * for this room rate. Either the AmountBeforeTax or the AmountAfterTax MUST be
     * sent.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\TotalAType
     * $total
     */
    private $total = null;

    /**
     * Gets as total
     *
     * The Total MUST specify the amount that the requestor is expecting to be booked
     * for this room rate. Either the AmountBeforeTax or the AmountAfterTax MUST be
     * sent.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\TotalAType
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * The Total MUST specify the amount that the requestor is expecting to be booked
     * for this room rate. Either the AmountBeforeTax or the AmountAfterTax MUST be
     * sent.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\TotalAType
     * $total
     * @return self
     */
    public function setTotal(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\TotalAType $total
    ) {
        $this->total = $total;

        return $this;
    }


}

