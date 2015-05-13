<?php

namespace Davispeixoto\OpenTravelAlliance\HotelProductType\ValueAddInclusionsAType;

/**
 * Class representing RoomUseExtensionAType
 */
class RoomUseExtensionAType
{

    /**
     * Check-in time for this hotel product.
     *
     * @property \DateTime $checkInTime
     */
    private $checkInTime = null;

    /**
     * Check-out time for this hotel product.
     *
     * @property \DateTime $checkOutTime
     */
    private $checkOutTime = null;

    /**
     * Gets as checkInTime
     *
     * Check-in time for this hotel product.
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
     * Check-in time for this hotel product.
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
     * Check-out time for this hotel product.
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
     * Check-out time for this hotel product.
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

