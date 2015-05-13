<?php

namespace Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType;

/**
 * Class representing InventoriesAType
 */
class InventoriesAType
{

    /**
     * Defines the inventory (e.g., Room type or Board) which is required in order for
     * the offer to apply.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType\InventoriesAType\InventoryAType[]
     * $inventory
     */
    private $inventory = null;

    /**
     * Adds as inventory
     *
     * Defines the inventory (e.g., Room type or Board) which is required in order for
     * the offer to apply.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType\InventoriesAType\InventoryAType
     * $inventory
     */
    public function addToInventory(
        \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType\InventoriesAType\InventoryAType $inventory
    ) {
        $this->inventory[] = $inventory;

        return $this;
    }

    /**
     * isset inventory
     *
     * Defines the inventory (e.g., Room type or Board) which is required in order for
     * the offer to apply.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInventory($index)
    {
        return isset($this->inventory[$index]);
    }

    /**
     * unset inventory
     *
     * Defines the inventory (e.g., Room type or Board) which is required in order for
     * the offer to apply.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInventory($index)
    {
        unset($this->inventory[$index]);
    }

    /**
     * Gets as inventory
     *
     * Defines the inventory (e.g., Room type or Board) which is required in order for
     * the offer to apply.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType\InventoriesAType\InventoryAType[]
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * Sets a new inventory
     *
     * Defines the inventory (e.g., Room type or Board) which is required in order for
     * the offer to apply.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType\InventoriesAType\InventoryAType[]
     * $inventory
     * @return self
     */
    public function setInventory(array $inventory)
    {
        $this->inventory = $inventory;

        return $this;
    }


}

