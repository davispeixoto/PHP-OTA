<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ;

use Davispeixoto\OpenTravelAlliance\SpecificFlightInfoType;

/**
 * Class representing SpecificFlightInfoAType
 */
class SpecificFlightInfoAType extends SpecificFlightInfoType
{

    /**
     * This is the identifier returned by the booking system, also referred to as a PNR
     * locator, confirmation number or reservation number from where the flight
     * information is taken from.
     *
     * @property string $bookingReferenceID
     */
    private $bookingReferenceID = null;

    /**
     * Gets as bookingReferenceID
     *
     * This is the identifier returned by the booking system, also referred to as a PNR
     * locator, confirmation number or reservation number from where the flight
     * information is taken from.
     *
     * @return string
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * This is the identifier returned by the booking system, also referred to as a PNR
     * locator, confirmation number or reservation number from where the flight
     * information is taken from.
     *
     * @param string $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID($bookingReferenceID)
    {
        $this->bookingReferenceID = $bookingReferenceID;

        return $this;
    }


}

