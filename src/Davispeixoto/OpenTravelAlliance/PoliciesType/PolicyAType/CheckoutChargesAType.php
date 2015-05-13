<?php

namespace Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType;

/**
 * Class representing CheckoutChargesAType
 */
class CheckoutChargesAType
{

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\CheckoutChargesAType\CheckoutChargeAType[]
     * $checkoutCharge
     */
    private $checkoutCharge = null;

    /**
     * Adds as checkoutCharge
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\CheckoutChargesAType\CheckoutChargeAType
     * $checkoutCharge
     */
    public function addToCheckoutCharge(
        \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\CheckoutChargesAType\CheckoutChargeAType $checkoutCharge
    ) {
        $this->checkoutCharge[] = $checkoutCharge;

        return $this;
    }

    /**
     * isset checkoutCharge
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCheckoutCharge($index)
    {
        return isset($this->checkoutCharge[$index]);
    }

    /**
     * unset checkoutCharge
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCheckoutCharge($index)
    {
        unset($this->checkoutCharge[$index]);
    }

    /**
     * Gets as checkoutCharge
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\CheckoutChargesAType\CheckoutChargeAType[]
     */
    public function getCheckoutCharge()
    {
        return $this->checkoutCharge;
    }

    /**
     * Sets a new checkoutCharge
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\CheckoutChargesAType\CheckoutChargeAType[]
     * $checkoutCharge
     * @return self
     */
    public function setCheckoutCharge(array $checkoutCharge)
    {
        $this->checkoutCharge = $checkoutCharge;

        return $this;
    }


}

