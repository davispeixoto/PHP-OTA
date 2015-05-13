<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType;

/**
 * Class representing EquipChargesAType
 */
class EquipChargesAType
{

    /**
     * A specific charge for the rental of the piece of special equipment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType\EquipChargesAType\EquipChargeAType[]
     * $equipCharge
     */
    private $equipCharge = null;

    /**
     * Adds as equipCharge
     *
     * A specific charge for the rental of the piece of special equipment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType\EquipChargesAType\EquipChargeAType
     * $equipCharge
     */
    public function addToEquipCharge(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType\EquipChargesAType\EquipChargeAType $equipCharge
    ) {
        $this->equipCharge[] = $equipCharge;

        return $this;
    }

    /**
     * isset equipCharge
     *
     * A specific charge for the rental of the piece of special equipment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEquipCharge($index)
    {
        return isset($this->equipCharge[$index]);
    }

    /**
     * unset equipCharge
     *
     * A specific charge for the rental of the piece of special equipment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEquipCharge($index)
    {
        unset($this->equipCharge[$index]);
    }

    /**
     * Gets as equipCharge
     *
     * A specific charge for the rental of the piece of special equipment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType\EquipChargesAType\EquipChargeAType[]
     */
    public function getEquipCharge()
    {
        return $this->equipCharge;
    }

    /**
     * Sets a new equipCharge
     *
     * A specific charge for the rental of the piece of special equipment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType\EquipChargesAType\EquipChargeAType[]
     * $equipCharge
     * @return self
     */
    public function setEquipCharge(array $equipCharge)
    {
        $this->equipCharge = $equipCharge;

        return $this;
    }


}

