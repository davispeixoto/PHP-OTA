<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseCabinAvailRS\CabinOptionsAType\CabinOptionAType\CabinFiltersAType;

/**
 * Class representing CabinFilterAType
 */
class CabinFilterAType
{

    /**
     * Code values representing attributes that are valid for this cabin. Refer to
     * OpenTravel Code List Cabin Filters (CBF).
     *
     * @property string $cabinFilterCode
     */
    private $cabinFilterCode = null;

    /**
     * Gets as cabinFilterCode
     *
     * Code values representing attributes that are valid for this cabin. Refer to
     * OpenTravel Code List Cabin Filters (CBF).
     *
     * @return string
     */
    public function getCabinFilterCode()
    {
        return $this->cabinFilterCode;
    }

    /**
     * Sets a new cabinFilterCode
     *
     * Code values representing attributes that are valid for this cabin. Refer to
     * OpenTravel Code List Cabin Filters (CBF).
     *
     * @param string $cabinFilterCode
     * @return self
     */
    public function setCabinFilterCode($cabinFilterCode)
    {
        $this->cabinFilterCode = $cabinFilterCode;

        return $this;
    }


}

