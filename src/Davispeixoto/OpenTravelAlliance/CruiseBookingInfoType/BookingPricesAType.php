<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType;

/**
 * Class representing BookingPricesAType
 */
class BookingPricesAType
{

    /**
     * Summary of all charges for the PriceType for the booking.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\BookingPricesAType\BookingPriceAType[]
     * $bookingPrice
     */
    private $bookingPrice = null;

    /**
     * Adds as bookingPrice
     *
     * Summary of all charges for the PriceType for the booking.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\BookingPricesAType\BookingPriceAType
     * $bookingPrice
     */
    public function addToBookingPrice(
        \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\BookingPricesAType\BookingPriceAType $bookingPrice
    ) {
        $this->bookingPrice[] = $bookingPrice;

        return $this;
    }

    /**
     * isset bookingPrice
     *
     * Summary of all charges for the PriceType for the booking.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookingPrice($index)
    {
        return isset($this->bookingPrice[$index]);
    }

    /**
     * unset bookingPrice
     *
     * Summary of all charges for the PriceType for the booking.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookingPrice($index)
    {
        unset($this->bookingPrice[$index]);
    }

    /**
     * Gets as bookingPrice
     *
     * Summary of all charges for the PriceType for the booking.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\BookingPricesAType\BookingPriceAType[]
     */
    public function getBookingPrice()
    {
        return $this->bookingPrice;
    }

    /**
     * Sets a new bookingPrice
     *
     * Summary of all charges for the PriceType for the booking.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\BookingPricesAType\BookingPriceAType[]
     * $bookingPrice
     * @return self
     */
    public function setBookingPrice(array $bookingPrice)
    {
        $this->bookingPrice = $bookingPrice;

        return $this;
    }


}

