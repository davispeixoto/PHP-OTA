<?php

namespace Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType;

/**
 * Class representing PolicyAType
 */
class PolicyAType
{

    /**
     * The checkin time required by this hotel for a room stay.
     *
     * @property \DateTime $checkInTime
     */
    private $checkInTime = null;

    /**
     * The checkout time required by this hotel for a room stay.
     *
     * @property \DateTime $checkOutTime
     */
    private $checkOutTime = null;

    /**
     * Gets as checkInTime
     *
     * The checkin time required by this hotel for a room stay.
     *
     * @return \DateTime
     */
    public function getCheckInTime()
    {
        return $this->checkInTime;
    }

    /**
     * Sets a new checkInTime
     *
     * The checkin time required by this hotel for a room stay.
     *
     * @param \DateTime $checkInTime
     * @return self
     */
    public function setCheckInTime(\DateTime $checkInTime)
    {
        $this->checkInTime = $checkInTime;

        return $this;
    }

    /**
     * Gets as checkOutTime
     *
     * The checkout time required by this hotel for a room stay.
     *
     * @return \DateTime
     */
    public function getCheckOutTime()
    {
        return $this->checkOutTime;
    }

    /**
     * Sets a new checkOutTime
     *
     * The checkout time required by this hotel for a room stay.
     *
     * @param \DateTime $checkOutTime
     * @return self
     */
    public function setCheckOutTime(\DateTime $checkOutTime)
    {
        $this->checkOutTime = $checkOutTime;

        return $this;
    }


}

