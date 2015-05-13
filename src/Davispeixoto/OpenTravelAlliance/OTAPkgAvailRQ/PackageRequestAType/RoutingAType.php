<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgAvailRQ\PackageRequestAType;

/**
 * Class representing RoutingAType
 */
class RoutingAType
{

    /**
     * @property string $direction
     */
    private $direction = null;

    /**
     * The departure location for the travel route.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $departure
     */
    private $departure = null;

    /**
     * The arrival location for the travel route.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $arrival
     */
    private $arrival = null;

    /**
     * Gets as direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Sets a new direction
     *
     * @param string $direction
     * @return self
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Gets as departure
     *
     * The departure location for the travel route.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Sets a new departure
     *
     * The departure location for the travel route.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $departure
     * @return self
     */
    public function setDeparture(\Davispeixoto\OpenTravelAlliance\LocationType $departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Gets as arrival
     *
     * The arrival location for the travel route.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Sets a new arrival
     *
     * The arrival location for the travel route.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $arrival
     * @return self
     */
    public function setArrival(\Davispeixoto\OpenTravelAlliance\LocationType $arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }


}

