<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS;

use Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType;

/**
 * Class representing LocationDetailsAType
 */
class LocationDetailsAType extends VehicleLocationDetailsType
{

    /**
     * When true, this is the information for the dropoff location. When false, the
     * information is for the pickup location.
     *
     * @property boolean $dropOffIndicator
     */
    private $dropOffIndicator = null;

    /**
     * Gets as dropOffIndicator
     *
     * When true, this is the information for the dropoff location. When false, the
     * information is for the pickup location.
     *
     * @return boolean
     */
    public function getDropOffIndicator()
    {
        return $this->dropOffIndicator;
    }

    /**
     * Sets a new dropOffIndicator
     *
     * When true, this is the information for the dropoff location. When false, the
     * information is for the pickup location.
     *
     * @param boolean $dropOffIndicator
     * @return self
     */
    public function setDropOffIndicator($dropOffIndicator)
    {
        $this->dropOffIndicator = $dropOffIndicator;

        return $this;
    }


}

