<?php

namespace Davispeixoto\OpenTravelAlliance\OfferType;

/**
 * Class representing InventoriesAType
 */
class InventoriesAType
{

    /**
     * Defines the inventory (e.g., Room type or Board) to which the offer may or may
     * not apply.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OfferType\InventoriesAType\InventoryAType[]
     * $inventory
     */
    private $inventory = null;

    /**
     * Adds as inventory
     *
     * Defines the inventory (e.g., Room type or Board) to which the offer may or may
     * not apply.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OfferType\InventoriesAType\InventoryAType
     * $inventory
     */
    public function addToInventory(
        \Davispeixoto\OpenTravelAlliance\OfferType\InventoriesAType\InventoryAType $inventory
    ) {
        $this->inventory[] = $inventory;

        return $this;
    }

    /**
     * isset inventory
     *
     * Defines the inventory (e.g., Room type or Board) to which the offer may or may
     * not apply.
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
     * Defines the inventory (e.g., Room type or Board) to which the offer may or may
     * not apply.
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
     * Defines the inventory (e.g., Room type or Board) to which the offer may or may
     * not apply.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OfferType\InventoriesAType\InventoryAType[]
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * Sets a new inventory
     *
     * Defines the inventory (e.g., Room type or Board) to which the offer may or may
     * not apply.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OfferType\InventoriesAType\InventoryAType[]
     * $inventory
     * @return self
     */
    public function setInventory(array $inventory)
    {
        $this->inventory = $inventory;

        return $this;
    }


}

