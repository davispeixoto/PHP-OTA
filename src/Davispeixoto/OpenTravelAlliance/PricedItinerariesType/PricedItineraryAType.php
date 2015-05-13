<?php

namespace Davispeixoto\OpenTravelAlliance\PricedItinerariesType;

use Davispeixoto\OpenTravelAlliance\PricedItineraryType;

/**
 * Class representing PricedItineraryAType
 */
class PricedItineraryAType extends PricedItineraryType
{

    /**
     * This attribute refers back to origin destination information in the
     * OTA_AirLowFareSearchRQ message.
     *
     * @property integer $originDestinationRefNumber
     */
    private $originDestinationRefNumber = null;

    /**
     * Gets as originDestinationRefNumber
     *
     * This attribute refers back to origin destination information in the
     * OTA_AirLowFareSearchRQ message.
     *
     * @return integer
     */
    public function getOriginDestinationRefNumber()
    {
        return $this->originDestinationRefNumber;
    }

    /**
     * Sets a new originDestinationRefNumber
     *
     * This attribute refers back to origin destination information in the
     * OTA_AirLowFareSearchRQ message.
     *
     * @param integer $originDestinationRefNumber
     * @return self
     */
    public function setOriginDestinationRefNumber($originDestinationRefNumber)
    {
        $this->originDestinationRefNumber = $originDestinationRefNumber;

        return $this;
    }


}

