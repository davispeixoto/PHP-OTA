<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleAgeRequirementsType\AgeAType;

/**
 * Class representing VehiclesAType
 */
class VehiclesAType
{

    /**
     * Identifies a specific vehicle type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleAgeRequirementsType\AgeAType\VehiclesAType\VehicleAType[]
     * $vehicle
     */
    private $vehicle = null;

    /**
     * Adds as vehicle
     *
     * Identifies a specific vehicle type.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAgeRequirementsType\AgeAType\VehiclesAType\VehicleAType
     * $vehicle
     */
    public function addToVehicle(
        \Davispeixoto\OpenTravelAlliance\VehicleAgeRequirementsType\AgeAType\VehiclesAType\VehicleAType $vehicle
    ) {
        $this->vehicle[] = $vehicle;

        return $this;
    }

    /**
     * isset vehicle
     *
     * Identifies a specific vehicle type.
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
     * Identifies a specific vehicle type.
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
     * Identifies a specific vehicle type.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleAgeRequirementsType\AgeAType\VehiclesAType\VehicleAType[]
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * Identifies a specific vehicle type.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAgeRequirementsType\AgeAType\VehiclesAType\VehicleAType[]
     * $vehicle
     * @return self
     */
    public function setVehicle(array $vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }


}

