<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType\StayDaysAType;

/**
 * Class representing StayDayAType
 */
class StayDayAType
{

    /**
     * The number which indicates the day of the room requirements (e.g. 1, 2, 3). This
     * is relative to the Start attribute in the EventInfo element.
     *
     * @property integer $dayNumber
     */
    private $dayNumber = null;

    /**
     * Total number of guests for this day.
     *
     * @property integer $guestQuantity
     */
    private $guestQuantity = null;

    /**
     * Total number of rooms needed for this day.
     *
     * @property integer $totalNumberOfUnits
     */
    private $totalNumberOfUnits = null;

    /**
     * Gets as dayNumber
     *
     * The number which indicates the day of the room requirements (e.g. 1, 2, 3). This
     * is relative to the Start attribute in the EventInfo element.
     *
     * @return integer
     */
    public function getDayNumber()
    {
        return $this->dayNumber;
    }

    /**
     * Sets a new dayNumber
     *
     * The number which indicates the day of the room requirements (e.g. 1, 2, 3). This
     * is relative to the Start attribute in the EventInfo element.
     *
     * @param integer $dayNumber
     * @return self
     */
    public function setDayNumber($dayNumber)
    {
        $this->dayNumber = $dayNumber;

        return $this;
    }

    /**
     * Gets as guestQuantity
     *
     * Total number of guests for this day.
     *
     * @return integer
     */
    public function getGuestQuantity()
    {
        return $this->guestQuantity;
    }

    /**
     * Sets a new guestQuantity
     *
     * Total number of guests for this day.
     *
     * @param integer $guestQuantity
     * @return self
     */
    public function setGuestQuantity($guestQuantity)
    {
        $this->guestQuantity = $guestQuantity;

        return $this;
    }

    /**
     * Gets as totalNumberOfUnits
     *
     * Total number of rooms needed for this day.
     *
     * @return integer
     */
    public function getTotalNumberOfUnits()
    {
        return $this->totalNumberOfUnits;
    }

    /**
     * Sets a new totalNumberOfUnits
     *
     * Total number of rooms needed for this day.
     *
     * @param integer $totalNumberOfUnits
     * @return self
     */
    public function setTotalNumberOfUnits($totalNumberOfUnits)
    {
        $this->totalNumberOfUnits = $totalNumberOfUnits;

        return $this;
    }


}

