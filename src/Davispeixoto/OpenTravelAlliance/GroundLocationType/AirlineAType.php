<?php

namespace Davispeixoto\OpenTravelAlliance\GroundLocationType;

use Davispeixoto\OpenTravelAlliance\OperatingAirlineType;

/**
 * Class representing AirlineAType
 */
class AirlineAType extends OperatingAirlineType
{

    /**
     * The flight departure and/or arrival time and date.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $flightDateTime
     */
    private $flightDateTime = null;

    /**
     * Gets as flightDateTime
     *
     * The flight departure and/or arrival time and date.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getFlightDateTime()
    {
        return $this->flightDateTime;
    }

    /**
     * Sets a new flightDateTime
     *
     * The flight departure and/or arrival time and date.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $flightDateTime
     * @return self
     */
    public function setFlightDateTime(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $flightDateTime)
    {
        $this->flightDateTime = $flightDateTime;

        return $this;
    }


}

