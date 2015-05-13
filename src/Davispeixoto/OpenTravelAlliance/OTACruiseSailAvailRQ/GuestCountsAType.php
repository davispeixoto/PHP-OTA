<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ;

/**
 * Class representing GuestCountsAType
 *
 * Specify guest numbers and types.
 */
class GuestCountsAType
{

    /**
     * When true, these counts are for a group.
     *
     * @property boolean $groupIndicator
     */
    private $groupIndicator = null;

    /**
     * Categorization of all guests in the request. The sum of the Quantity attribute
     * will provide you with the total number of guests.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\GuestCountsAType\GuestCountAType[]
     * $guestCount
     */
    private $guestCount = null;

    /**
     * Gets as groupIndicator
     *
     * When true, these counts are for a group.
     *
     * @return boolean
     */
    public function getGroupIndicator()
    {
        return $this->groupIndicator;
    }

    /**
     * Sets a new groupIndicator
     *
     * When true, these counts are for a group.
     *
     * @param boolean $groupIndicator
     * @return self
     */
    public function setGroupIndicator($groupIndicator)
    {
        $this->groupIndicator = $groupIndicator;

        return $this;
    }

    /**
     * Adds as guestCount
     *
     * Categorization of all guests in the request. The sum of the Quantity attribute
     * will provide you with the total number of guests.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\GuestCountsAType\GuestCountAType
     * $guestCount
     */
    public function addToGuestCount(
        \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\GuestCountsAType\GuestCountAType $guestCount
    ) {
        $this->guestCount[] = $guestCount;

        return $this;
    }

    /**
     * isset guestCount
     *
     * Categorization of all guests in the request. The sum of the Quantity attribute
     * will provide you with the total number of guests.
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
     * Categorization of all guests in the request. The sum of the Quantity attribute
     * will provide you with the total number of guests.
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
     * Categorization of all guests in the request. The sum of the Quantity attribute
     * will provide you with the total number of guests.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\GuestCountsAType\GuestCountAType[]
     */
    public function getGuestCount()
    {
        return $this->guestCount;
    }

    /**
     * Sets a new guestCount
     *
     * Categorization of all guests in the request. The sum of the Quantity attribute
     * will provide you with the total number of guests.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\GuestCountsAType\GuestCountAType[]
     * $guestCount
     * @return self
     */
    public function setGuestCount(array $guestCount)
    {
        $this->guestCount = $guestCount;

        return $this;
    }


}

