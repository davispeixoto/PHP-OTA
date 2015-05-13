<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType\OffLocServiceChargesAType\OffLocServiceChargeAType;

/**
 * Class representing VehiclesAType
 */
class VehiclesAType
{

    /**
     * One specific vehicle type for which this charge applies. This is to be used when
     * the charge associated with the service varies according to vehicle type.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleCoreType[] $vehicle
     */
    private $vehicle = null;

    /**
     * Adds as vehicle
     *
     * One specific vehicle type for which this charge applies. This is to be used when
     * the charge associated with the service varies according to vehicle type.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleCoreType $vehicle
     */
    public function addToVehicle(\Davispeixoto\OpenTravelAlliance\VehicleCoreType $vehicle)
    {
        $this->vehicle[] = $vehicle;

        return $this;
    }

    /**
     * isset vehicle
     *
     * One specific vehicle type for which this charge applies. This is to be used when
     * the charge associated with the service varies according to vehicle type.
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
     * One specific vehicle type for which this charge applies. This is to be used when
     * the charge associated with the service varies according to vehicle type.
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
     * One specific vehicle type for which this charge applies. This is to be used when
     * the charge associated with the service varies according to vehicle type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleCoreType[]
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * One specific vehicle type for which this charge applies. This is to be used when
     * the charge associated with the service varies according to vehicle type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleCoreType[] $vehicle
     * @return self
     */
    public function setVehicle(array $vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }


}

