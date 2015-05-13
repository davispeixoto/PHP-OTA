<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType;

/**
 * Class representing PricedEquipsAType
 */
class PricedEquipsAType
{

    /**
     * Used to indicate special equipment is returned.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType[]
     * $pricedEquip
     */
    private $pricedEquip = null;

    /**
     * Adds as pricedEquip
     *
     * Used to indicate special equipment is returned.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType
     * $pricedEquip
     */
    public function addToPricedEquip(
        \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType $pricedEquip
    ) {
        $this->pricedEquip[] = $pricedEquip;

        return $this;
    }

    /**
     * isset pricedEquip
     *
     * Used to indicate special equipment is returned.
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
     * Used to indicate special equipment is returned.
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
     * Used to indicate special equipment is returned.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType[]
     */
    public function getPricedEquip()
    {
        return $this->pricedEquip;
    }

    /**
     * Sets a new pricedEquip
     *
     * Used to indicate special equipment is returned.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType[]
     * $pricedEquip
     * @return self
     */
    public function setPricedEquip(array $pricedEquip)
    {
        $this->pricedEquip = $pricedEquip;

        return $this;
    }


}

