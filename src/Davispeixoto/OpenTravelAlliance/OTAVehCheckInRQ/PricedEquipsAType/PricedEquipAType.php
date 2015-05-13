<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehCheckInRQ\PricedEquipsAType;

/**
 * Class representing PricedEquipAType
 */
class PricedEquipAType
{

    /**
     * Describes the equipment being returned.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehCheckInRQ\PricedEquipsAType\PricedEquipAType\EquipmentAType[]
     * $equipment
     */
    private $equipment = null;

    /**
     * This provides the ability to add charges for missing or damaged equipment or to
     * make necessary adjustments.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargeType $charge
     */
    private $charge = null;

    /**
     * Adds as equipment
     *
     * Describes the equipment being returned.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehCheckInRQ\PricedEquipsAType\PricedEquipAType\EquipmentAType
     * $equipment
     */
    public function addToEquipment(
        \Davispeixoto\OpenTravelAlliance\OTAVehCheckInRQ\PricedEquipsAType\PricedEquipAType\EquipmentAType $equipment
    ) {
        $this->equipment[] = $equipment;

        return $this;
    }

    /**
     * isset equipment
     *
     * Describes the equipment being returned.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEquipment($index)
    {
        return isset($this->equipment[$index]);
    }

    /**
     * unset equipment
     *
     * Describes the equipment being returned.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEquipment($index)
    {
        unset($this->equipment[$index]);
    }

    /**
     * Gets as equipment
     *
     * Describes the equipment being returned.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehCheckInRQ\PricedEquipsAType\PricedEquipAType\EquipmentAType[]
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Sets a new equipment
     *
     * Describes the equipment being returned.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehCheckInRQ\PricedEquipsAType\PricedEquipAType\EquipmentAType[]
     * $equipment
     * @return self
     */
    public function setEquipment(array $equipment)
    {
        $this->equipment = $equipment;

        return $this;
    }

    /**
     * Gets as charge
     *
     * This provides the ability to add charges for missing or damaged equipment or to
     * make necessary adjustments.
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
     * This provides the ability to add charges for missing or damaged equipment or to
     * make necessary adjustments.
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

