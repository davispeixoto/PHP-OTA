<?php

namespace Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType;

/**
 * Class representing GroundTransportationInfoAType
 */
class GroundTransportationInfoAType
{

    /**
     * Pickup, interim stops and drop-off details.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundLocationsType $locations
     */
    private $locations = null;

    /**
     * Passenger preferences and information, requested and/or required, for this
     * ground transportation service, including service type, disability vehicle, fuel
     * efficient vehicle and other vehicle preferences and services.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundServiceDetailType $serviceInfo
     */
    private $serviceInfo = null;

    /**
     * Gets as locations
     *
     * Pickup, interim stops and drop-off details.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundLocationsType
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Sets a new locations
     *
     * Pickup, interim stops and drop-off details.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundLocationsType $locations
     * @return self
     */
    public function setLocations(\Davispeixoto\OpenTravelAlliance\GroundLocationsType $locations)
    {
        $this->locations = $locations;

        return $this;
    }

    /**
     * Gets as serviceInfo
     *
     * Passenger preferences and information, requested and/or required, for this
     * ground transportation service, including service type, disability vehicle, fuel
     * efficient vehicle and other vehicle preferences and services.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundServiceDetailType
     */
    public function getServiceInfo()
    {
        return $this->serviceInfo;
    }

    /**
     * Sets a new serviceInfo
     *
     * Passenger preferences and information, requested and/or required, for this
     * ground transportation service, including service type, disability vehicle, fuel
     * efficient vehicle and other vehicle preferences and services.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundServiceDetailType $serviceInfo
     * @return self
     */
    public function setServiceInfo(\Davispeixoto\OpenTravelAlliance\GroundServiceDetailType $serviceInfo)
    {
        $this->serviceInfo = $serviceInfo;

        return $this;
    }


}

