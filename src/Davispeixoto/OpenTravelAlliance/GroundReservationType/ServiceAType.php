<?php

namespace Davispeixoto\OpenTravelAlliance\GroundReservationType;

/**
 * Class representing ServiceAType
 */
class ServiceAType
{

    /**
     * Information about the locations associated with the reservation, including
     * pickup, interim stop(s) and drop-off details.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundLocationsType $locations
     */
    private $locations = null;

    /**
     * The type of service.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundServiceDetailType $serviceType
     */
    private $serviceType = null;

    /**
     * Vehicle make and model information associated with this reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GroundReservationType\ServiceAType\VehicleMakeModelAType
     * $vehicleMakeModel
     */
    private $vehicleMakeModel = null;

    /**
     * Gets as locations
     *
     * Information about the locations associated with the reservation, including
     * pickup, interim stop(s) and drop-off details.
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
     * Information about the locations associated with the reservation, including
     * pickup, interim stop(s) and drop-off details.
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
     * Gets as vehicleMakeModel
     *
     * Vehicle make and model information associated with this reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GroundReservationType\ServiceAType\VehicleMakeModelAType
     */
    public function getVehicleMakeModel()
    {
        return $this->vehicleMakeModel;
    }

    /**
     * Sets a new vehicleMakeModel
     *
     * Vehicle make and model information associated with this reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\GroundReservationType\ServiceAType\VehicleMakeModelAType
     * $vehicleMakeModel
     * @return self
     */
    public function setVehicleMakeModel(
        \Davispeixoto\OpenTravelAlliance\GroundReservationType\ServiceAType\VehicleMakeModelAType $vehicleMakeModel
    ) {
        $this->vehicleMakeModel = $vehicleMakeModel;

        return $this;
    }


}

