<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GroundServiceDetailType
 *
 * Passenger preferences requested and/or required for a ground transportation
 * service, including service type, disability vehicle and other vehicle
 * preferences.
 * XSD Type: GroundServiceDetailType
 */
class GroundServiceDetailType extends GroundServiceType
{

    /**
     * If true, this vehicle is disability compatible.
     *
     * @property boolean $disabilityVehicleInd
     */
    private $disabilityVehicleInd = null;

    /**
     * Pickup, stop and drop off location information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundLocationsType $location
     */
    private $location = null;

    /**
     * An extensible list of service levels.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListLevelOfServiceType $serviceLevel
     */
    private $serviceLevel = null;

    /**
     * An extensible list of vehicle types and/or categories.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListVehCategoryType $vehicleType
     */
    private $vehicleType = null;

    /**
     * An extensible list of vehicle sizes.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListVehSizeType $vehicleSize
     */
    private $vehicleSize = null;

    /**
     * Gets as disabilityVehicleInd
     *
     * If true, this vehicle is disability compatible.
     *
     * @return boolean
     */
    public function getDisabilityVehicleInd()
    {
        return $this->disabilityVehicleInd;
    }

    /**
     * Sets a new disabilityVehicleInd
     *
     * If true, this vehicle is disability compatible.
     *
     * @param boolean $disabilityVehicleInd
     * @return self
     */
    public function setDisabilityVehicleInd($disabilityVehicleInd)
    {
        $this->disabilityVehicleInd = $disabilityVehicleInd;

        return $this;
    }

    /**
     * Gets as location
     *
     * Pickup, stop and drop off location information.
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
     * Pickup, stop and drop off location information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundLocationsType $location
     * @return self
     */
    public function setLocation(\Davispeixoto\OpenTravelAlliance\GroundLocationsType $location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Gets as serviceLevel
     *
     * An extensible list of service levels.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListLevelOfServiceType
     */
    public function getServiceLevel()
    {
        return $this->serviceLevel;
    }

    /**
     * Sets a new serviceLevel
     *
     * An extensible list of service levels.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListLevelOfServiceType $serviceLevel
     * @return self
     */
    public function setServiceLevel(\Davispeixoto\OpenTravelAlliance\ListLevelOfServiceType $serviceLevel)
    {
        $this->serviceLevel = $serviceLevel;

        return $this;
    }

    /**
     * Gets as vehicleType
     *
     * An extensible list of vehicle types and/or categories.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListVehCategoryType
     */
    public function getVehicleType()
    {
        return $this->vehicleType;
    }

    /**
     * Sets a new vehicleType
     *
     * An extensible list of vehicle types and/or categories.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListVehCategoryType $vehicleType
     * @return self
     */
    public function setVehicleType(\Davispeixoto\OpenTravelAlliance\ListVehCategoryType $vehicleType)
    {
        $this->vehicleType = $vehicleType;

        return $this;
    }

    /**
     * Gets as vehicleSize
     *
     * An extensible list of vehicle sizes.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListVehSizeType
     */
    public function getVehicleSize()
    {
        return $this->vehicleSize;
    }

    /**
     * Sets a new vehicleSize
     *
     * An extensible list of vehicle sizes.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListVehSizeType $vehicleSize
     * @return self
     */
    public function setVehicleSize(\Davispeixoto\OpenTravelAlliance\ListVehSizeType $vehicleSize)
    {
        $this->vehicleSize = $vehicleSize;

        return $this;
    }


}

