<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType;

/**
 * Class representing GuestPricesAType
 */
class GuestPricesAType
{

    /**
     * Specifies the guest and prices at the guest level.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType[]
     * $guestPrice
     */
    private $guestPrice = null;

    /**
     * Adds as guestPrice
     *
     * Specifies the guest and prices at the guest level.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType
     * $guestPrice
     */
    public function addToGuestPrice(
        \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType $guestPrice
    ) {
        $this->guestPrice[] = $guestPrice;

        return $this;
    }

    /**
     * isset guestPrice
     *
     * Specifies the guest and prices at the guest level.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuestPrice($index)
    {
        return isset($this->guestPrice[$index]);
    }

    /**
     * unset guestPrice
     *
     * Specifies the guest and prices at the guest level.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuestPrice($index)
    {
        unset($this->guestPrice[$index]);
    }

    /**
     * Gets as guestPrice
     *
     * Specifies the guest and prices at the guest level.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType[]
     */
    public function getGuestPrice()
    {
        return $this->guestPrice;
    }

    /**
     * Sets a new guestPrice
     *
     * Specifies the guest and prices at the guest level.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType[]
     * $guestPrice
     * @return self
     */
    public function setGuestPrice(array $guestPrice)
    {
        $this->guestPrice = $guestPrice;

        return $this;
    }


}

