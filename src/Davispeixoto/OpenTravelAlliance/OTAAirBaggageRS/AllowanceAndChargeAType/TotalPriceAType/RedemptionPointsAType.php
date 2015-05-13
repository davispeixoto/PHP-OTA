<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\TotalPriceAType;

use Davispeixoto\OpenTravelAlliance\AlternateCurrencyType;

/**
 * Class representing RedemptionPointsAType
 */
class RedemptionPointsAType extends AlternateCurrencyType
{

    /**
     * Cabin type.
     *
     * @property string $cabinClass
     */
    private $cabinClass = null;

    /**
     * Gets as cabinClass
     *
     * Cabin type.
     *
     * @return string
     */
    public function getCabinClass()
    {
        return $this->cabinClass;
    }

    /**
     * Sets a new cabinClass
     *
     * Cabin type.
     *
     * @param string $cabinClass
     * @return self
     */
    public function setCabinClass($cabinClass)
    {
        $this->cabinClass = $cabinClass;

        return $this;
    }


}

