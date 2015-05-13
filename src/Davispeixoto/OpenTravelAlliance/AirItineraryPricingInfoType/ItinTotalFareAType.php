<?php

namespace Davispeixoto\OpenTravelAlliance\AirItineraryPricingInfoType;

use Davispeixoto\OpenTravelAlliance\FareType;

/**
 * Class representing ItinTotalFareAType
 */
class ItinTotalFareAType extends FareType
{

    /**
     * Specifies the usage of the passenger fare structure.
     *
     * @property string $usage
     */
    private $usage = null;

    /**
     * Gets as usage
     *
     * Specifies the usage of the passenger fare structure.
     *
     * @return string
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * Specifies the usage of the passenger fare structure.
     *
     * @param string $usage
     * @return self
     */
    public function setUsage($usage)
    {
        $this->usage = $usage;

        return $this;
    }


}

