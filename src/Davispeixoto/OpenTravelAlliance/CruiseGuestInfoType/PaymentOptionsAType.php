<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType;

/**
 * Class representing PaymentOptionsAType
 */
class PaymentOptionsAType
{

    /**
     * Payment choice.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\PaymentOptionsAType\PaymentOptionAType[]
     * $paymentOption
     */
    private $paymentOption = null;

    /**
     * Adds as paymentOption
     *
     * Payment choice.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\PaymentOptionsAType\PaymentOptionAType
     * $paymentOption
     */
    public function addToPaymentOption(
        \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\PaymentOptionsAType\PaymentOptionAType $paymentOption
    ) {
        $this->paymentOption[] = $paymentOption;

        return $this;
    }

    /**
     * isset paymentOption
     *
     * Payment choice.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentOption($index)
    {
        return isset($this->paymentOption[$index]);
    }

    /**
     * unset paymentOption
     *
     * Payment choice.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentOption($index)
    {
        unset($this->paymentOption[$index]);
    }

    /**
     * Gets as paymentOption
     *
     * Payment choice.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\PaymentOptionsAType\PaymentOptionAType[]
     */
    public function getPaymentOption()
    {
        return $this->paymentOption;
    }

    /**
     * Sets a new paymentOption
     *
     * Payment choice.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\PaymentOptionsAType\PaymentOptionAType[]
     * $paymentOption
     * @return self
     */
    public function setPaymentOption(array $paymentOption)
    {
        $this->paymentOption = $paymentOption;

        return $this;
    }


}

