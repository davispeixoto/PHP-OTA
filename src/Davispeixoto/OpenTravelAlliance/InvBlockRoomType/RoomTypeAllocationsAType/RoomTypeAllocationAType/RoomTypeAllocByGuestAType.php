<?php

namespace Davispeixoto\OpenTravelAlliance\InvBlockRoomType\RoomTypeAllocationsAType\RoomTypeAllocationAType;

/**
 * Class representing RoomTypeAllocByGuestAType
 */
class RoomTypeAllocByGuestAType
{

    /**
     * The number of guests associated with this room type allocation.
     *
     * @property integer $numberOfGuests
     */
    private $numberOfGuests = null;

    /**
     * The number of rooms allocated for the dates specified in the DateTimeSpanGroup.
     * This is the number of units allocated for this particular number of guests for
     * this room type.
     *
     * @property integer $numberOfUnits
     */
    private $numberOfUnits = null;

    /**
     * Gets as numberOfGuests
     *
     * The number of guests associated with this room type allocation.
     *
     * @return integer
     */
    public function getNumberOfGuests()
    {
        return $this->numberOfGuests;
    }

    /**
     * Sets a new numberOfGuests
     *
     * The number of guests associated with this room type allocation.
     *
     * @param integer $numberOfGuests
     * @return self
     */
    public function setNumberOfGuests($numberOfGuests)
    {
        $this->numberOfGuests = $numberOfGuests;

        return $this;
    }

    /**
     * Gets as numberOfUnits
     *
     * The number of rooms allocated for the dates specified in the DateTimeSpanGroup.
     * This is the number of units allocated for this particular number of guests for
     * this room type.
     *
     * @return integer
     */
    public function getNumberOfUnits()
    {
        return $this->numberOfUnits;
    }

    /**
     * Sets a new numberOfUnits
     *
     * The number of rooms allocated for the dates specified in the DateTimeSpanGroup.
     * This is the number of units allocated for this particular number of guests for
     * this room type.
     *
     * @param integer $numberOfUnits
     * @return self
     */
    public function setNumberOfUnits($numberOfUnits)
    {
        $this->numberOfUnits = $numberOfUnits;

        return $this;
    }


}

