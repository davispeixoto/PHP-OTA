<?php

namespace Davispeixoto\OpenTravelAlliance\ReservationItemsType;

use Davispeixoto\OpenTravelAlliance\ItinPricingType;

/**
 * Class representing ItemPricingAType
 */
class ItemPricingAType extends ItinPricingType
{

    /**
     * Information that is related to an invoice of this pricing like ticketing.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BookingPriceInfoType $airFareInfo
     */
    private $airFareInfo = null;

    /**
     * Gets as airFareInfo
     *
     * Information that is related to an invoice of this pricing like ticketing.
     *
     * @return \Davispeixoto\OpenTravelAlliance\BookingPriceInfoType
     */
    public function getAirFareInfo()
    {
        return $this->airFareInfo;
    }

    /**
     * Sets a new airFareInfo
     *
     * Information that is related to an invoice of this pricing like ticketing.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BookingPriceInfoType $airFareInfo
     * @return self
     */
    public function setAirFareInfo(\Davispeixoto\OpenTravelAlliance\BookingPriceInfoType $airFareInfo)
    {
        $this->airFareInfo = $airFareInfo;

        return $this;
    }


}

