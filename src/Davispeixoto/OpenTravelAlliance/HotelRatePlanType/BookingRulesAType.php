<?php

namespace Davispeixoto\OpenTravelAlliance\HotelRatePlanType;

use Davispeixoto\OpenTravelAlliance\BookingRulesType;

/**
 * Class representing BookingRulesAType
 */
class BookingRulesAType extends BookingRulesType
{

    /**
     * Optional element to indicate Inventory information, when nessary to qualify the
     * booking rule.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\BookingRulesAType\InventoryInfoAType
     * $inventoryInfo
     */
    private $inventoryInfo = null;

    /**
     * Gets as inventoryInfo
     *
     * Optional element to indicate Inventory information, when nessary to qualify the
     * booking rule.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\BookingRulesAType\InventoryInfoAType
     */
    public function getInventoryInfo()
    {
        return $this->inventoryInfo;
    }

    /**
     * Sets a new inventoryInfo
     *
     * Optional element to indicate Inventory information, when nessary to qualify the
     * booking rule.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\BookingRulesAType\InventoryInfoAType
     * $inventoryInfo
     * @return self
     */
    public function setInventoryInfo(
        \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\BookingRulesAType\InventoryInfoAType $inventoryInfo
    ) {
        $this->inventoryInfo = $inventoryInfo;

        return $this;
    }


}

