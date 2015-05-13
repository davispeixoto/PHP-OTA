<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRQ;

/**
 * Class representing SelectedFareAType
 */
class SelectedFareAType
{

    /**
     * Specifies the fare code. Fare codes are specific to individual cruise lines.
     *
     * @property string $fareCode
     */
    private $fareCode = null;

    /**
     * Specifies the group code. Group codes are specific to individual cruise lines.
     *
     * @property string $groupCode
     */
    private $groupCode = null;

    /**
     * Gets as fareCode
     *
     * Specifies the fare code. Fare codes are specific to individual cruise lines.
     *
     * @return string
     */
    public function getFareCode()
    {
        return $this->fareCode;
    }

    /**
     * Sets a new fareCode
     *
     * Specifies the fare code. Fare codes are specific to individual cruise lines.
     *
     * @param string $fareCode
     * @return self
     */
    public function setFareCode($fareCode)
    {
        $this->fareCode = $fareCode;

        return $this;
    }

    /**
     * Gets as groupCode
     *
     * Specifies the group code. Group codes are specific to individual cruise lines.
     *
     * @return string
     */
    public function getGroupCode()
    {
        return $this->groupCode;
    }

    /**
     * Sets a new groupCode
     *
     * Specifies the group code. Group codes are specific to individual cruise lines.
     *
     * @param string $groupCode
     * @return self
     */
    public function setGroupCode($groupCode)
    {
        $this->groupCode = $groupCode;

        return $this;
    }


}

