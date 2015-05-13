<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehExchangeRS\VehicleAType;

/**
 * Class representing PricedEquipsAType
 */
class PricedEquipsAType
{

    /**
     * Provides details of the priced equipment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleEquipmentType[] $pricedEquip
     */
    private $pricedEquip = null;

    /**
     * Adds as pricedEquip
     *
     * Provides details of the priced equipment.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleEquipmentType $pricedEquip
     */
    public function addToPricedEquip(\Davispeixoto\OpenTravelAlliance\VehicleEquipmentType $pricedEquip)
    {
        $this->pricedEquip[] = $pricedEquip;

        return $this;
    }

    /**
     * isset pricedEquip
     *
     * Provides details of the priced equipment.
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
     * Provides details of the priced equipment.
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
     * Provides details of the priced equipment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleEquipmentType[]
     */
    public function getPricedEquip()
    {
        return $this->pricedEquip;
    }

    /**
     * Sets a new pricedEquip
     *
     * Provides details of the priced equipment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleEquipmentType[] $pricedEquip
     * @return self
     */
    public function setPricedEquip(array $pricedEquip)
    {
        $this->pricedEquip = $pricedEquip;

        return $this;
    }


}

