<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\RailItineraryPriceAType;

use Davispeixoto\OpenTravelAlliance\RailPriceType;

/**
 * Class representing PriceDetailAType
 */
class PriceDetailAType extends RailPriceType
{

    /**
     * Reference to a passenger category within the same xml data instance.
     *
     * @property mixed $passengerCategoryRPH
     */
    private $passengerCategoryRPH = null;

    /**
     * Gets as passengerCategoryRPH
     *
     * Reference to a passenger category within the same xml data instance.
     *
     * @return mixed
     */
    public function getPassengerCategoryRPH()
    {
        return $this->passengerCategoryRPH;
    }

    /**
     * Sets a new passengerCategoryRPH
     *
     * Reference to a passenger category within the same xml data instance.
     *
     * @param mixed $passengerCategoryRPH
     * @return self
     */
    public function setPassengerCategoryRPH($passengerCategoryRPH)
    {
        $this->passengerCategoryRPH = $passengerCategoryRPH;

        return $this;
    }


}

