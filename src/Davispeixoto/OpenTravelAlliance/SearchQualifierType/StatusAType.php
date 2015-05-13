<?php

namespace Davispeixoto\OpenTravelAlliance\SearchQualifierType;

/**
 * Class representing StatusAType
 */
class StatusAType
{

    /**
     * Status of the sailing, category, fare, or cabin. Refer to OpenTravel Codelist
     * Status (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Gets as status
     *
     * Status of the sailing, category, fare, or cabin. Refer to OpenTravel Codelist
     * Status (STS).
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
     * Status of the sailing, category, fare, or cabin. Refer to OpenTravel Codelist
     * Status (STS).
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }


}

