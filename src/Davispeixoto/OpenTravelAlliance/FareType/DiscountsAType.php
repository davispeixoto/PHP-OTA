<?php

namespace Davispeixoto\OpenTravelAlliance\FareType;

use Davispeixoto\OpenTravelAlliance\FareType\DiscountsAType\DiscountAType;

/**
 * Class representing DiscountsAType
 */
class DiscountsAType
{

    /**
     * Provides discount information associated with the fare.
     *
     * @property DiscountAType[] $discount
     */
    private $discount = null;

    /**
     * Adds as discount
     *
     * Provides discount information associated with the fare.
     *
     * @return self
     * @param DiscountAType $discount
     */
    public function addToDiscount(DiscountAType $discount)
    {
        $this->discount[] = $discount;

        return $this;
    }

    /**
     * isset discount
     *
     * Provides discount information associated with the fare.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDiscount($index)
    {
        if (isset($index)) {
            return isset($this->discount[$index]);
        }
    }

    /**
     * unset discount
     *
     * Provides discount information associated with the fare.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDiscount($index)
    {
        if (isset($index)) {
            unset($this->discount[$index]);
        }
    }

    /**
     * Gets as discount
     *
     * Provides discount information associated with the fare.
     *
     * @return DiscountAType[]
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * Provides discount information associated with the fare.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareType\DiscountsAType\DiscountAType[]
     * $discount
     * @return self
     */
    public function setDiscount(array $discount)
    {
        $this->discount = $discount;

        return $this;
    }


}

