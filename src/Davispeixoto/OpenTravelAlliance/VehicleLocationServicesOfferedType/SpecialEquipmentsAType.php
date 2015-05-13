<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType;

/**
 * Class representing SpecialEquipmentsAType
 */
class SpecialEquipmentsAType
{

    /**
     * Information on one specific piece of special equipment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType[]
     * $specialEquipment
     */
    private $specialEquipment = null;

    /**
     * Adds as specialEquipment
     *
     * Information on one specific piece of special equipment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType
     * $specialEquipment
     */
    public function addToSpecialEquipment(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType $specialEquipment
    ) {
        $this->specialEquipment[] = $specialEquipment;

        return $this;
    }

    /**
     * isset specialEquipment
     *
     * Information on one specific piece of special equipment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialEquipment($index)
    {
        return isset($this->specialEquipment[$index]);
    }

    /**
     * unset specialEquipment
     *
     * Information on one specific piece of special equipment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialEquipment($index)
    {
        unset($this->specialEquipment[$index]);
    }

    /**
     * Gets as specialEquipment
     *
     * Information on one specific piece of special equipment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType[]
     */
    public function getSpecialEquipment()
    {
        return $this->specialEquipment;
    }

    /**
     * Sets a new specialEquipment
     *
     * Information on one specific piece of special equipment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType[]
     * $specialEquipment
     * @return self
     */
    public function setSpecialEquipment(array $specialEquipment)
    {
        $this->specialEquipment = $specialEquipment;

        return $this;
    }


}

