<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType;

/**
 * Class representing SpecialEquipmentAType
 */
class SpecialEquipmentAType
{

    /**
     * Identifies the specific type of special equipment that is being described. Refer
     * to OpenTravel Code List Equipment Type (EQP).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * The description of this piece of special equipment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType $equipDesc
     */
    private $equipDesc = null;

    /**
     * The charges associated with the rental of this piece of special equipment. There
     * may be multiple charges if the charge varies by vehicle type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType\EquipChargesAType\EquipChargeAType[]
     * $equipCharges
     */
    private $equipCharges = null;

    /**
     * Gets as type
     *
     * Identifies the specific type of special equipment that is being described. Refer
     * to OpenTravel Code List Equipment Type (EQP).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Identifies the specific type of special equipment that is being described. Refer
     * to OpenTravel Code List Equipment Type (EQP).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as equipDesc
     *
     * The description of this piece of special equipment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextType
     */
    public function getEquipDesc()
    {
        return $this->equipDesc;
    }

    /**
     * Sets a new equipDesc
     *
     * The description of this piece of special equipment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType $equipDesc
     * @return self
     */
    public function setEquipDesc(\Davispeixoto\OpenTravelAlliance\FormattedTextType $equipDesc)
    {
        $this->equipDesc = $equipDesc;

        return $this;
    }

    /**
     * Adds as equipCharge
     *
     * The charges associated with the rental of this piece of special equipment. There
     * may be multiple charges if the charge varies by vehicle type.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType\EquipChargesAType\EquipChargeAType
     * $equipCharge
     */
    public function addToEquipCharges(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType\EquipChargesAType\EquipChargeAType $equipCharge
    ) {
        $this->equipCharges[] = $equipCharge;

        return $this;
    }

    /**
     * isset equipCharges
     *
     * The charges associated with the rental of this piece of special equipment. There
     * may be multiple charges if the charge varies by vehicle type.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEquipCharges($index)
    {
        return isset($this->equipCharges[$index]);
    }

    /**
     * unset equipCharges
     *
     * The charges associated with the rental of this piece of special equipment. There
     * may be multiple charges if the charge varies by vehicle type.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEquipCharges($index)
    {
        unset($this->equipCharges[$index]);
    }

    /**
     * Gets as equipCharges
     *
     * The charges associated with the rental of this piece of special equipment. There
     * may be multiple charges if the charge varies by vehicle type.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType\EquipChargesAType\EquipChargeAType[]
     */
    public function getEquipCharges()
    {
        return $this->equipCharges;
    }

    /**
     * Sets a new equipCharges
     *
     * The charges associated with the rental of this piece of special equipment. There
     * may be multiple charges if the charge varies by vehicle type.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType\EquipChargesAType\EquipChargeAType[]
     * $equipCharges
     * @return self
     */
    public function setEquipCharges(array $equipCharges)
    {
        $this->equipCharges = $equipCharges;

        return $this;
    }


}

