<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ;

use Davispeixoto\OpenTravelAlliance\OriginDestinationInformationType;

/**
 * Class representing OriginDestinationInformationAType
 */
class OriginDestinationInformationAType extends OriginDestinationInformationType
{

    /**
     * A placeholder for OriginDestinationInformation to be referenced wihin the
     * OTA_AirLowFareSearchRS message. PricedItineraryType carries the reference to
     * this RPH.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Gets as rPH
     *
     * A placeholder for OriginDestinationInformation to be referenced wihin the
     * OTA_AirLowFareSearchRS message. PricedItineraryType carries the reference to
     * this RPH.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A placeholder for OriginDestinationInformation to be referenced wihin the
     * OTA_AirLowFareSearchRS message. PricedItineraryType carries the reference to
     * this RPH.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }


}

