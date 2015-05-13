<?php

namespace Davispeixoto\OpenTravelAlliance\FareType\ExchangeInfoAType;

/**
 * Class representing CouponInfoAType
 */
class CouponInfoAType
{

    /**
     * The applicable coupon number.
     *
     * @property integer $number
     */
    private $number = null;

    /**
     * Gets as number
     *
     * The applicable coupon number.
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * The applicable coupon number.
     *
     * @param integer $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }


}

