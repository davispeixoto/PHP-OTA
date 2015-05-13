<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType;

/**
 * Class representing RateAType
 */
class RateAType
{

    /**
     * Total MUST specify the nightly room charge before and/or after taxes for this
     * room rate. Either AmountBeforeTax or AmountAfterTax MUST be sent.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\TotalAType
     * $total
     */
    private $total = null;

    /**
     * Gets as total
     *
     * Total MUST specify the nightly room charge before and/or after taxes for this
     * room rate. Either AmountBeforeTax or AmountAfterTax MUST be sent.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\TotalAType
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * Total MUST specify the nightly room charge before and/or after taxes for this
     * room rate. Either AmountBeforeTax or AmountAfterTax MUST be sent.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\TotalAType
     * $total
     * @return self
     */
    public function setTotal(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\TotalAType $total
    ) {
        $this->total = $total;

        return $this;
    }


}

