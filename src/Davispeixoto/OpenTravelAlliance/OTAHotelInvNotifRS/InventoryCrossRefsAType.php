<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelInvNotifRS;

/**
 * Class representing InventoryCrossRefsAType
 */
class InventoryCrossRefsAType
{

    /**
     * Cross Reference between sending system and responding system Inventory Codes.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvNotifRS\InventoryCrossRefsAType\InventoryCrossRefAType[]
     * $inventoryCrossRef
     */
    private $inventoryCrossRef = null;

    /**
     * Adds as inventoryCrossRef
     *
     * Cross Reference between sending system and responding system Inventory Codes.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvNotifRS\InventoryCrossRefsAType\InventoryCrossRefAType
     * $inventoryCrossRef
     */
    public function addToInventoryCrossRef(
        \Davispeixoto\OpenTravelAlliance\OTAHotelInvNotifRS\InventoryCrossRefsAType\InventoryCrossRefAType $inventoryCrossRef
    ) {
        $this->inventoryCrossRef[] = $inventoryCrossRef;

        return $this;
    }

    /**
     * isset inventoryCrossRef
     *
     * Cross Reference between sending system and responding system Inventory Codes.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInventoryCrossRef($index)
    {
        return isset($this->inventoryCrossRef[$index]);
    }

    /**
     * unset inventoryCrossRef
     *
     * Cross Reference between sending system and responding system Inventory Codes.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInventoryCrossRef($index)
    {
        unset($this->inventoryCrossRef[$index]);
    }

    /**
     * Gets as inventoryCrossRef
     *
     * Cross Reference between sending system and responding system Inventory Codes.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvNotifRS\InventoryCrossRefsAType\InventoryCrossRefAType[]
     */
    public function getInventoryCrossRef()
    {
        return $this->inventoryCrossRef;
    }

    /**
     * Sets a new inventoryCrossRef
     *
     * Cross Reference between sending system and responding system Inventory Codes.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvNotifRS\InventoryCrossRefsAType\InventoryCrossRefAType[]
     * $inventoryCrossRef
     * @return self
     */
    public function setInventoryCrossRef(array $inventoryCrossRef)
    {
        $this->inventoryCrossRef = $inventoryCrossRef;

        return $this;
    }


}

