<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleEquipmentPricedType
 *
 * The VehicleEquipmentPricedType complex type identifies the data that describes a
 * priced piece of special equipment in association with the rental of a vehicle.
 * The data consists of the equipment and the correspondinng charge.
 * XSD Type: VehicleEquipmentPricedType
 */
class VehicleEquipmentPricedType
{

    /**
     * An indication if this particular equipment is required in the vehicle
     * reservation, or is optional, based upon renter preference.
     *  false
     *
     * @property boolean $required
     */
    private $required = null;

    /**
     * Details about a equipment, such as text or description.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleEquipmentType $equipment
     */
    private $equipment = null;

    /**
     * The charges as they relate to a single piece of equipment, such as minimum or
     * maximum amounts, taxes, or information on how the charge was calculated.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargeType $charge
     */
    private $charge = null;

    /**
     * Gets as required
     *
     * An indication if this particular equipment is required in the vehicle
     * reservation, or is optional, based upon renter preference.
     *  false
     *
     * @return boolean
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Sets a new required
     *
     * An indication if this particular equipment is required in the vehicle
     * reservation, or is optional, based upon renter preference.
     *  false
     *
     * @param boolean $required
     * @return self
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Gets as equipment
     *
     * Details about a equipment, such as text or description.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleEquipmentType
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Sets a new equipment
     *
     * Details about a equipment, such as text or description.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleEquipmentType $equipment
     * @return self
     */
    public function setEquipment(\Davispeixoto\OpenTravelAlliance\VehicleEquipmentType $equipment)
    {
        $this->equipment = $equipment;

        return $this;
    }

    /**
     * Gets as charge
     *
     * The charges as they relate to a single piece of equipment, such as minimum or
     * maximum amounts, taxes, or information on how the charge was calculated.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleChargeType
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * The charges as they relate to a single piece of equipment, such as minimum or
     * maximum amounts, taxes, or information on how the charge was calculated.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargeType $charge
     * @return self
     */
    public function setCharge(\Davispeixoto\OpenTravelAlliance\VehicleChargeType $charge)
    {
        $this->charge = $charge;

        return $this;
    }


}

