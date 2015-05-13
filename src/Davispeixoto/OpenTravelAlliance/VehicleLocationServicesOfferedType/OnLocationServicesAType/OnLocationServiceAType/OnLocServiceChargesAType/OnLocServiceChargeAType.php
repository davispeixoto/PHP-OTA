<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType\OnLocServiceChargesAType;

use Davispeixoto\OpenTravelAlliance\VehicleChargeType;

/**
 * Class representing OnLocServiceChargeAType
 */
class OnLocServiceChargeAType extends VehicleChargeType
{

    /**
     * A collection of vehicles for which this charge applies. This is to be used when
     * the charge associated with the service is not the same charge for all vehicle
     * types.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleCoreType[] $vehicles
     */
    private $vehicles = null;

    /**
     * Adds as vehicle
     *
     * A collection of vehicles for which this charge applies. This is to be used when
     * the charge associated with the service is not the same charge for all vehicle
     * types.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleCoreType $vehicle
     */
    public function addToVehicles(\Davispeixoto\OpenTravelAlliance\VehicleCoreType $vehicle)
    {
        $this->vehicles[] = $vehicle;

        return $this;
    }

    /**
     * isset vehicles
     *
     * A collection of vehicles for which this charge applies. This is to be used when
     * the charge associated with the service is not the same charge for all vehicle
     * types.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehicles($index)
    {
        return isset($this->vehicles[$index]);
    }

    /**
     * unset vehicles
     *
     * A collection of vehicles for which this charge applies. This is to be used when
     * the charge associated with the service is not the same charge for all vehicle
     * types.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehicles($index)
    {
        unset($this->vehicles[$index]);
    }

    /**
     * Gets as vehicles
     *
     * A collection of vehicles for which this charge applies. This is to be used when
     * the charge associated with the service is not the same charge for all vehicle
     * types.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleCoreType[]
     */
    public function getVehicles()
    {
        return $this->vehicles;
    }

    /**
     * Sets a new vehicles
     *
     * A collection of vehicles for which this charge applies. This is to be used when
     * the charge associated with the service is not the same charge for all vehicle
     * types.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleCoreType[] $vehicles
     * @return self
     */
    public function setVehicles(array $vehicles)
    {
        $this->vehicles = $vehicles;

        return $this;
    }


}

