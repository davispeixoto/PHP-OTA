<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruisePriceBookingRQ;

/**
 * Class representing GuestCountsAType
 */
class GuestCountsAType
{

    /**
     * Categorization of all guests in the request. The total number of guests will
     * equal the sum of the Quantity attribute of all GuestCount objects in this
     * collection and assumes that the Guest Age or the Guest Code will be used to
     * determine how each Guest should be fared.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruisePriceBookingRQ\GuestCountsAType\GuestCountAType[]
     * $guestCount
     */
    private $guestCount = null;

    /**
     * Adds as guestCount
     *
     * Categorization of all guests in the request. The total number of guests will
     * equal the sum of the Quantity attribute of all GuestCount objects in this
     * collection and assumes that the Guest Age or the Guest Code will be used to
     * determine how each Guest should be fared.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruisePriceBookingRQ\GuestCountsAType\GuestCountAType
     * $guestCount
     */
    public function addToGuestCount(
        \Davispeixoto\OpenTravelAlliance\OTACruisePriceBookingRQ\GuestCountsAType\GuestCountAType $guestCount
    ) {
        $this->guestCount[] = $guestCount;

        return $this;
    }

    /**
     * isset guestCount
     *
     * Categorization of all guests in the request. The total number of guests will
     * equal the sum of the Quantity attribute of all GuestCount objects in this
     * collection and assumes that the Guest Age or the Guest Code will be used to
     * determine how each Guest should be fared.
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
     * Categorization of all guests in the request. The total number of guests will
     * equal the sum of the Quantity attribute of all GuestCount objects in this
     * collection and assumes that the Guest Age or the Guest Code will be used to
     * determine how each Guest should be fared.
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
     * Categorization of all guests in the request. The total number of guests will
     * equal the sum of the Quantity attribute of all GuestCount objects in this
     * collection and assumes that the Guest Age or the Guest Code will be used to
     * determine how each Guest should be fared.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruisePriceBookingRQ\GuestCountsAType\GuestCountAType[]
     */
    public function getGuestCount()
    {
        return $this->guestCount;
    }

    /**
     * Sets a new guestCount
     *
     * Categorization of all guests in the request. The total number of guests will
     * equal the sum of the Quantity attribute of all GuestCount objects in this
     * collection and assumes that the Guest Age or the Guest Code will be used to
     * determine how each Guest should be fared.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruisePriceBookingRQ\GuestCountsAType\GuestCountAType[]
     * $guestCount
     * @return self
     */
    public function setGuestCount(array $guestCount)
    {
        $this->guestCount = $guestCount;

        return $this;
    }


}

