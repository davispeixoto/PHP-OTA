<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleRentalRateType;

/**
 * Class representing VehicleChargesAType
 */
class VehicleChargesAType
{

    /**
     * Detailed information on one specific charge including an indication of the type
     * of charge.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[]
     * $vehicleCharge
     */
    private $vehicleCharge = null;

    /**
     * Adds as vehicleCharge
     *
     * Detailed information on one specific charge including an indication of the type
     * of charge.
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
     * Detailed information on one specific charge including an indication of the type
     * of charge.
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
     * Detailed information on one specific charge including an indication of the type
     * of charge.
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
     * Detailed information on one specific charge including an indication of the type
     * of charge.
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
     * Detailed information on one specific charge including an indication of the type
     * of charge.
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

