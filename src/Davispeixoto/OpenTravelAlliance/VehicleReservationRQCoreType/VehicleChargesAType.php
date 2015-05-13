<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType;

/**
 * Class representing VehicleChargesAType
 */
class VehicleChargesAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[]
     * $vehicleCharge
     */
    private $vehicleCharge = null;

    /**
     * Adds as vehicleCharge
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType $vehicleCharge
     */
    public function addToVehicleCharge(\Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType $vehicleCharge)
    {
        $this->vehicleCharge[] = $vehicleCharge;

        return $this;
    }

    /**
     * isset vehicleCharge
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehicleCharge($index)
    {
        return isset($this->vehicleCharge[$index]);
    }

    /**
     * unset vehicleCharge
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehicleCharge($index)
    {
        unset($this->vehicleCharge[$index]);
    }

    /**
     * Gets as vehicleCharge
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[]
     */
    public function getVehicleCharge()
    {
        return $this->vehicleCharge;
    }

    /**
     * Sets a new vehicleCharge
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[]
     * $vehicleCharge
     * @return self
     */
    public function setVehicleCharge(array $vehicleCharge)
    {
        $this->vehicleCharge = $vehicleCharge;

        return $this;
    }


}

