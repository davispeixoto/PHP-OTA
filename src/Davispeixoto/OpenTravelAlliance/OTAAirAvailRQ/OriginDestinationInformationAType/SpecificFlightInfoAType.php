<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirAvailRQ\OriginDestinationInformationAType;

use Davispeixoto\OpenTravelAlliance\SpecificFlightInfoType;

/**
 * Class representing SpecificFlightInfoAType
 */
class SpecificFlightInfoAType extends SpecificFlightInfoType
{

    /**
     * Indicates if the actual inventory information needs to be returned for a
     * specific flight.
     *
     * @property boolean $pollingIndicator
     */
    private $pollingIndicator = null;

    /**
     * Gets as pollingIndicator
     *
     * Indicates if the actual inventory information needs to be returned for a
     * specific flight.
     *
     * @return boolean
     */
    public function getPollingIndicator()
    {
        return $this->pollingIndicator;
    }

    /**
     * Sets a new pollingIndicator
     *
     * Indicates if the actual inventory information needs to be returned for a
     * specific flight.
     *
     * @param boolean $pollingIndicator
     * @return self
     */
    public function setPollingIndicator($pollingIndicator)
    {
        $this->pollingIndicator = $pollingIndicator;

        return $this;
    }


}

