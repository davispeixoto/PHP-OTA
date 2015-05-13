<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehResRQ;

use Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType;

/**
 * Class representing VehResRQCoreAType
 */
class VehResRQCoreAType extends VehicleReservationRQCoreType
{

    /**
     * When true, indicates that the options have changed since the last availability
     * response.
     *
     * @property boolean $optionChangeIndicator
     */
    private $optionChangeIndicator = null;

    /**
     * Gets as optionChangeIndicator
     *
     * When true, indicates that the options have changed since the last availability
     * response.
     *
     * @return boolean
     */
    public function getOptionChangeIndicator()
    {
        return $this->optionChangeIndicator;
    }

    /**
     * Sets a new optionChangeIndicator
     *
     * When true, indicates that the options have changed since the last availability
     * response.
     *
     * @param boolean $optionChangeIndicator
     * @return self
     */
    public function setOptionChangeIndicator($optionChangeIndicator)
    {
        $this->optionChangeIndicator = $optionChangeIndicator;

        return $this;
    }


}

