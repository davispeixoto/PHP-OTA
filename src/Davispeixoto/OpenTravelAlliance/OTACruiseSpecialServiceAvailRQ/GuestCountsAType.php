<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseSpecialServiceAvailRQ;

/**
 * Class representing GuestCountsAType
 *
 * Specify guest numbers and types.
 */
class GuestCountsAType
{

    /**
     * Categorization of all guests in the request. The sum of the quantity attribute
     * provides the total number of guests.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSpecialServiceAvailRQ\GuestCountsAType\GuestCountAType[]
     * $guestCount
     */
    private $guestCount = null;

    /**
     * Adds as guestCount
     *
     * Categorization of all guests in the request. The sum of the quantity attribute
     * provides the total number of guests.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSpecialServiceAvailRQ\GuestCountsAType\GuestCountAType
     * $guestCount
     */
    public function addToGuestCount(
        \Davispeixoto\OpenTravelAlliance\OTACruiseSpecialServiceAvailRQ\GuestCountsAType\GuestCountAType $guestCount
    ) {
        $this->guestCount[] = $guestCount;

        return $this;
    }

    /**
     * isset guestCount
     *
     * Categorization of all guests in the request. The sum of the quantity attribute
     * provides the total number of guests.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuestCount($index)
    {
        return isset($this->guestCount[$index]);
    }

    /**
     * unset guestCount
     *
     * Categorization of all guests in the request. The sum of the quantity attribute
     * provides the total number of guests.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuestCount($index)
    {
        unset($this->guestCount[$index]);
    }

    /**
     * Gets as guestCount
     *
     * Categorization of all guests in the request. The sum of the quantity attribute
     * provides the total number of guests.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSpecialServiceAvailRQ\GuestCountsAType\GuestCountAType[]
     */
    public function getGuestCount()
    {
        return $this->guestCount;
    }

    /**
     * Sets a new guestCount
     *
     * Categorization of all guests in the request. The sum of the quantity attribute
     * provides the total number of guests.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSpecialServiceAvailRQ\GuestCountsAType\GuestCountAType[]
     * $guestCount
     * @return self
     */
    public function setGuestCount(array $guestCount)
    {
        $this->guestCount = $guestCount;

        return $this;
    }


}

