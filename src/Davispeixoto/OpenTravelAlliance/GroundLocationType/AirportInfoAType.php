<?php

namespace Davispeixoto\OpenTravelAlliance\GroundLocationType;

/**
 * Class representing AirportInfoAType
 */
class AirportInfoAType
{

    /**
     * Arrival airport information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundAirportType $arrival
     */
    private $arrival = null;

    /**
     * Departure airport information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundAirportType $departure
     */
    private $departure = null;

    /**
     * Gets as arrival
     *
     * Arrival airport information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundAirportType
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Sets a new arrival
     *
     * Arrival airport information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundAirportType $arrival
     * @return self
     */
    public function setArrival(\Davispeixoto\OpenTravelAlliance\GroundAirportType $arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Gets as departure
     *
     * Departure airport information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundAirportType
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Sets a new departure
     *
     * Departure airport information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundAirportType $departure
     * @return self
     */
    public function setDeparture(\Davispeixoto\OpenTravelAlliance\GroundAirportType $departure)
    {
        $this->departure = $departure;

        return $this;
    }


}

