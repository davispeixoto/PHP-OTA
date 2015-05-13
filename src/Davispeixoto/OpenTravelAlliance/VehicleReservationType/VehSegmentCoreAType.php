<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleReservationType;

use Davispeixoto\OpenTravelAlliance\VehicleSegmentCoreType;

/**
 * Class representing VehSegmentCoreAType
 */
class VehSegmentCoreAType extends VehicleSegmentCoreType
{

    /**
     * When true, indicates that the options that may have changed since the
     * availability response do not affect the rate.
     *
     * @property boolean $optionChangeAllowedIndicator
     */
    private $optionChangeAllowedIndicator = null;

    /**
     * Gets as optionChangeAllowedIndicator
     *
     * When true, indicates that the options that may have changed since the
     * availability response do not affect the rate.
     *
     * @return boolean
     */
    public function getOptionChangeAllowedIndicator()
    {
        return $this->optionChangeAllowedIndicator;
    }

    /**
     * Sets a new optionChangeAllowedIndicator
     *
     * When true, indicates that the options that may have changed since the
     * availability response do not affect the rate.
     *
     * @param boolean $optionChangeAllowedIndicator
     * @return self
     */
    public function setOptionChangeAllowedIndicator($optionChangeAllowedIndicator)
    {
        $this->optionChangeAllowedIndicator = $optionChangeAllowedIndicator;

        return $this;
    }


}

