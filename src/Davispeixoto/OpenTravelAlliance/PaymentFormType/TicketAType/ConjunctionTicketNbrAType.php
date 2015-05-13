<?php

namespace Davispeixoto\OpenTravelAlliance\PaymentFormType\TicketAType;

/**
 * Class representing ConjunctionTicketNbrAType
 */
class ConjunctionTicketNbrAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Gives the coupon numbers of the ticket, which will be taken for payment.
     *
     * @property string[] $coupons
     */
    private $coupons = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }

        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Adds as coupons
     *
     * Gives the coupon numbers of the ticket, which will be taken for payment.
     *
     * @return self
     * @param string $coupons
     */
    public function addToCoupons($coupons)
    {
        $this->coupons[] = $coupons;

        return $this;
    }

    /**
     * isset coupons
     *
     * Gives the coupon numbers of the ticket, which will be taken for payment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCoupons($index)
    {
        return isset($this->coupons[$index]);
    }

    /**
     * unset coupons
     *
     * Gives the coupon numbers of the ticket, which will be taken for payment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCoupons($index)
    {
        unset($this->coupons[$index]);
    }

    /**
     * Gets as coupons
     *
     * Gives the coupon numbers of the ticket, which will be taken for payment.
     *
     * @return string[]
     */
    public function getCoupons()
    {
        return $this->coupons;
    }

    /**
     * Sets a new coupons
     *
     * Gives the coupon numbers of the ticket, which will be taken for payment.
     *
     * @param string $coupons
     * @return self
     */
    public function setCoupons(array $coupons)
    {
        $this->coupons = $coupons;

        return $this;
    }


}

