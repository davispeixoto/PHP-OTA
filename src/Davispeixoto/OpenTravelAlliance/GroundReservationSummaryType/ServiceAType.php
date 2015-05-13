<?php

namespace Davispeixoto\OpenTravelAlliance\GroundReservationSummaryType;

/**
 * Class representing ServiceAType
 */
class ServiceAType
{

    /**
     * The type of service.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundServiceDetailType $serviceType
     */
    private $serviceType = null;

    /**
     * Information about the locations associated with the reservation, including
     * pickup, interim stop(s) and drop-off details.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundLocationsType $location
     */
    private $location = null;

    /**
     * Gets as serviceType
     *
     * The type of service.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundServiceDetailType
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Sets a new serviceType
     *
     * The type of service.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundServiceDetailType $serviceType
     * @return self
     */
    public function setServiceType(\Davispeixoto\OpenTravelAlliance\GroundServiceDetailType $serviceType)
    {
        $this->serviceType = $serviceType;

        return $this;
    }

    /**
     * Gets as location
     *
     * Information about the locations associated with the reservation, including
     * pickup, interim stop(s) and drop-off details.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundLocationsType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Information about the locations associated with the reservation, including
     * pickup, interim stop(s) and drop-off details.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundLocationsType $location
     * @return self
     */
    public function setLocation(\Davispeixoto\OpenTravelAlliance\GroundLocationsType $location)
    {
        $this->location = $location;

        return $this;
    }


}

