<?php

namespace Davispeixoto\OpenTravelAlliance\GroundReservationSummaryType;

/**
 * Class representing ShuttleAType
 */
class ShuttleAType
{

    /**
     * Service location(s).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GroundReservationSummaryType\ShuttleAType\ServiceLocationAType[]
     * $serviceLocation
     */
    private $serviceLocation = null;

    /**
     * Adds as serviceLocation
     *
     * Service location(s).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\GroundReservationSummaryType\ShuttleAType\ServiceLocationAType
     * $serviceLocation
     */
    public function addToServiceLocation(
        \Davispeixoto\OpenTravelAlliance\GroundReservationSummaryType\ShuttleAType\ServiceLocationAType $serviceLocation
    ) {
        $this->serviceLocation[] = $serviceLocation;

        return $this;
    }

    /**
     * isset serviceLocation
     *
     * Service location(s).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetServiceLocation($index)
    {
        return isset($this->serviceLocation[$index]);
    }

    /**
     * unset serviceLocation
     *
     * Service location(s).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetServiceLocation($index)
    {
        unset($this->serviceLocation[$index]);
    }

    /**
     * Gets as serviceLocation
     *
     * Service location(s).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GroundReservationSummaryType\ShuttleAType\ServiceLocationAType[]
     */
    public function getServiceLocation()
    {
        return $this->serviceLocation;
    }

    /**
     * Sets a new serviceLocation
     *
     * Service location(s).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\GroundReservationSummaryType\ShuttleAType\ServiceLocationAType[]
     * $serviceLocation
     * @return self
     */
    public function setServiceLocation(array $serviceLocation)
    {
        $this->serviceLocation = $serviceLocation;

        return $this;
    }


}

