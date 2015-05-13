<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PricedEquipsAType;

/**
 * Class representing PricedEquipAType
 */
class PricedEquipAType
{

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType\EquipmentAType[]
     * $equipment
     */
    private $equipment = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargeType $charge
     */
    private $charge = null;

    /**
     * Adds as equipment
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType\EquipmentAType
     * $equipment
     */
    public function addToEquipment(
        \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType\EquipmentAType $equipment
    ) {
        $this->equipment[] = $equipment;

        return $this;
    }

    /**
     * isset equipment
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
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType\EquipmentAType[]
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Sets a new equipment
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType\EquipmentAType[]
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
     * @return \Davispeixoto\OpenTravelAlliance\VehicleChargeType
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
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

