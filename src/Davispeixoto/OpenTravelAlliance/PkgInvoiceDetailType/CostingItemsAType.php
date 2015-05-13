<?php

namespace Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType;

/**
 * Class representing CostingItemsAType
 */
class CostingItemsAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\CostingItemType[] $costingItem
     */
    private $costingItem = null;

    /**
     * Adds as costingItem
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CostingItemType $costingItem
     */
    public function addToCostingItem(\Davispeixoto\OpenTravelAlliance\CostingItemType $costingItem)
    {
        $this->costingItem[] = $costingItem;

        return $this;
    }

    /**
     * isset costingItem
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCostingItem($index)
    {
        return isset($this->costingItem[$index]);
    }

    /**
     * unset costingItem
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCostingItem($index)
    {
        unset($this->costingItem[$index]);
    }

    /**
     * Gets as costingItem
     *
     * @return \Davispeixoto\OpenTravelAlliance\CostingItemType[]
     */
    public function getCostingItem()
    {
        return $this->costingItem;
    }

    /**
     * Sets a new costingItem
     *
     * @param \Davispeixoto\OpenTravelAlliance\CostingItemType[] $costingItem
     * @return self
     */
    public function setCostingItem(array $costingItem)
    {
        $this->costingItem = $costingItem;

        return $this;
    }


}

