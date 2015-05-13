<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleAvailCoreType;

/**
 * Class representing PricedEquipsAType
 */
class PricedEquipsAType
{

    /**
     * A specific piece of special equipment, along with the quantity, restrictions and
     * charge.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleEquipmentPricedType[]
     * $pricedEquip
     */
    private $pricedEquip = null;

    /**
     * Adds as pricedEquip
     *
     * A specific piece of special equipment, along with the quantity, restrictions and
     * charge.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleEquipmentPricedType $pricedEquip
     */
    public function addToPricedEquip(\Davispeixoto\OpenTravelAlliance\VehicleEquipmentPricedType $pricedEquip)
    {
        $this->pricedEquip[] = $pricedEquip;

        return $this;
    }

    /**
     * isset pricedEquip
     *
     * A specific piece of special equipment, along with the quantity, restrictions and
     * charge.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricedEquip($index)
    {
        return isset($this->pricedEquip[$index]);
    }

    /**
     * unset pricedEquip
     *
     * A specific piece of special equipment, along with the quantity, restrictions and
     * charge.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricedEquip($index)
    {
        unset($this->pricedEquip[$index]);
    }

    /**
     * Gets as pricedEquip
     *
     * A specific piece of special equipment, along with the quantity, restrictions and
     * charge.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleEquipmentPricedType[]
     */
    public function getPricedEquip()
    {
        return $this->pricedEquip;
    }

    /**
     * Sets a new pricedEquip
     *
     * A specific piece of special equipment, along with the quantity, restrictions and
     * charge.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleEquipmentPricedType[]
     * $pricedEquip
     * @return self
     */
    public function setPricedEquip(array $pricedEquip)
    {
        $this->pricedEquip = $pricedEquip;

        return $this;
    }


}

