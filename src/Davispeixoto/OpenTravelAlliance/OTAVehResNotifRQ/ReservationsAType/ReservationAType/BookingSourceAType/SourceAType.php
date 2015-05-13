<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType\BookingSourceAType;

use Davispeixoto\OpenTravelAlliance\SourceType;

/**
 * Class representing SourceAType
 */
class SourceAType extends SourceType
{

    /**
     * Information on the address for the booking source.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AddressType $address
     */
    private $address = null;

    /**
     * Gets as address
     *
     * Information on the address for the booking source.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Information on the address for the booking source.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AddressType $address
     * @return self
     */
    public function setAddress(\Davispeixoto\OpenTravelAlliance\AddressType $address)
    {
        $this->address = $address;

        return $this;
    }


}

