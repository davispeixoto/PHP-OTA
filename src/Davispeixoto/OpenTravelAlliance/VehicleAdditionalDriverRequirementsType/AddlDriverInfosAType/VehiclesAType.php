<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType;

/**
 * Class representing VehiclesAType
 */
class VehiclesAType
{

    /**
     * To identify a vehicle type associated with additional driver information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType\VehicleAType[]
     * $vehicle
     */
    private $vehicle = null;

    /**
     * Adds as vehicle
     *
     * To identify a vehicle type associated with additional driver information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType\VehicleAType
     * $vehicle
     */
    public function addToVehicle(
        \Davispeixoto\OpenTravelAlliance\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType\VehicleAType $vehicle
    ) {
        $this->vehicle[] = $vehicle;

        return $this;
    }

    /**
     * isset vehicle
     *
     * To identify a vehicle type associated with additional driver information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehicle($index)
    {
        return isset($this->vehicle[$index]);
    }

    /**
     * unset vehicle
     *
     * To identify a vehicle type associated with additional driver information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehicle($index)
    {
        unset($this->vehicle[$index]);
    }

    /**
     * Gets as vehicle
     *
     * To identify a vehicle type associated with additional driver information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType\VehicleAType[]
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * To identify a vehicle type associated with additional driver information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType\VehicleAType[]
     * $vehicle
     * @return self
     */
    public function setVehicle(array $vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }


}

