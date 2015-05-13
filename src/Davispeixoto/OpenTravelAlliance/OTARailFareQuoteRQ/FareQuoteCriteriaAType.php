<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRQ;

use Davispeixoto\OpenTravelAlliance\RailAvailScheduleQueryType;

/**
 * Class representing FareQuoteCriteriaAType
 */
class FareQuoteCriteriaAType extends RailAvailScheduleQueryType
{

    /**
     * Identifies the type of the trip, such as one way and open jaw.
     *
     * @property string $tripType
     */
    private $tripType = null;

    /**
     * Gets as tripType
     *
     * Identifies the type of the trip, such as one way and open jaw.
     *
     * @return string
     */
    public function getTripType()
    {
        return $this->tripType;
    }

    /**
     * Sets a new tripType
     *
     * Identifies the type of the trip, such as one way and open jaw.
     *
     * @param string $tripType
     * @return self
     */
    public function setTripType($tripType)
    {
        $this->tripType = $tripType;

        return $this;
    }


}

