<?php

namespace Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType;

/**
 * Class representing GuestCountsAType
 */
class GuestCountsAType
{

    /**
     * A recurring element that identifies the number of guests and ages of the guests.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType\GuestCountAType[]
     * $guestCount
     */
    private $guestCount = null;

    /**
     * Adds as guestCount
     *
     * A recurring element that identifies the number of guests and ages of the guests.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType\GuestCountAType
     * $guestCount
     */
    public function addToGuestCount(
        \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType\GuestCountAType $guestCount
    ) {
        $this->guestCount[] = $guestCount;

        return $this;
    }

    /**
     * isset guestCount
     *
     * A recurring element that identifies the number of guests and ages of the guests.
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
     * A recurring element that identifies the number of guests and ages of the guests.
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
     * A recurring element that identifies the number of guests and ages of the guests.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType\GuestCountAType[]
     */
    public function getGuestCount()
    {
        return $this->guestCount;
    }

    /**
     * Sets a new guestCount
     *
     * A recurring element that identifies the number of guests and ages of the guests.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType\GuestCountAType[]
     * $guestCount
     * @return self
     */
    public function setGuestCount(array $guestCount)
    {
        $this->guestCount = $guestCount;

        return $this;
    }


}

