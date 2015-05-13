<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType;

/**
 * Class representing LinkedBookingsAType
 */
class LinkedBookingsAType
{

    /**
     * Specifies cross references at the booking level.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\LinkedBookingsAType\LinkedBookingAType[]
     * $linkedBooking
     */
    private $linkedBooking = null;

    /**
     * Adds as linkedBooking
     *
     * Specifies cross references at the booking level.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\LinkedBookingsAType\LinkedBookingAType
     * $linkedBooking
     */
    public function addToLinkedBooking(
        \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\LinkedBookingsAType\LinkedBookingAType $linkedBooking
    ) {
        $this->linkedBooking[] = $linkedBooking;

        return $this;
    }

    /**
     * isset linkedBooking
     *
     * Specifies cross references at the booking level.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLinkedBooking($index)
    {
        return isset($this->linkedBooking[$index]);
    }

    /**
     * unset linkedBooking
     *
     * Specifies cross references at the booking level.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLinkedBooking($index)
    {
        unset($this->linkedBooking[$index]);
    }

    /**
     * Gets as linkedBooking
     *
     * Specifies cross references at the booking level.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\LinkedBookingsAType\LinkedBookingAType[]
     */
    public function getLinkedBooking()
    {
        return $this->linkedBooking;
    }

    /**
     * Sets a new linkedBooking
     *
     * Specifies cross references at the booking level.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\LinkedBookingsAType\LinkedBookingAType[]
     * $linkedBooking
     * @return self
     */
    public function setLinkedBooking(array $linkedBooking)
    {
        $this->linkedBooking = $linkedBooking;

        return $this;
    }


}

