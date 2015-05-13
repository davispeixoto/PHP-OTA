<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRQ;

use Davispeixoto\OpenTravelAlliance\RailPassengerCategoryType;

/**
 * Class representing PassengerCategoryAType
 */
class PassengerCategoryAType extends RailPassengerCategoryType
{

    /**
     * Used to define the quantity for the associated passenger category.
     *
     * @property mixed $quantity
     */
    private $quantity = null;

    /**
     * Gets as quantity
     *
     * Used to define the quantity for the associated passenger category.
     *
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Used to define the quantity for the associated passenger category.
     *
     * @param mixed $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }


}

