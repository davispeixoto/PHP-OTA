<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType;

use Davispeixoto\OpenTravelAlliance\RailPriceType;

/**
 * Class representing PriceDetailAType
 */
class PriceDetailAType extends RailPriceType
{

    /**
     * Reference to passenger category within the same xml data instance.
     *
     * @property string $passengerCategoryType
     */
    private $passengerCategoryType = null;

    /**
     * Gets as passengerCategoryType
     *
     * Reference to passenger category within the same xml data instance.
     *
     * @return string
     */
    public function getPassengerCategoryType()
    {
        return $this->passengerCategoryType;
    }

    /**
     * Sets a new passengerCategoryType
     *
     * Reference to passenger category within the same xml data instance.
     *
     * @param string $passengerCategoryType
     * @return self
     */
    public function setPassengerCategoryType($passengerCategoryType)
    {
        $this->passengerCategoryType = $passengerCategoryType;

        return $this;
    }


}

