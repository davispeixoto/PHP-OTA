<?php

namespace Davispeixoto\OpenTravelAlliance\CategoryOptionType;

/**
 * Class representing DiningAType
 */
class DiningAType
{

    /**
     * The dining seating (e.g., main dining, second dining).
     *
     * @property string $sitting
     */
    private $sitting = null;

    /**
     * The status of the dining. Refer to OpenTravel Code Table Status (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * The available occupancy associated with the dining.
     *
     * @property integer $occupancy
     */
    private $occupancy = null;

    /**
     * Gets as sitting
     *
     * The dining seating (e.g., main dining, second dining).
     *
     * @return string
     */
    public function getSitting()
    {
        return $this->sitting;
    }

    /**
     * Sets a new sitting
     *
     * The dining seating (e.g., main dining, second dining).
     *
     * @param string $sitting
     * @return self
     */
    public function setSitting($sitting)
    {
        $this->sitting = $sitting;

        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the dining. Refer to OpenTravel Code Table Status (STS).
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the dining. Refer to OpenTravel Code Table Status (STS).
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as occupancy
     *
     * The available occupancy associated with the dining.
     *
     * @return integer
     */
    public function getOccupancy()
    {
        return $this->occupancy;
    }

    /**
     * Sets a new occupancy
     *
     * The available occupancy associated with the dining.
     *
     * @param integer $occupancy
     * @return self
     */
    public function setOccupancy($occupancy)
    {
        $this->occupancy = $occupancy;

        return $this;
    }


}

