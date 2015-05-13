<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundResNotifRQ;

/**
 * Class representing PaymentAType
 */
class PaymentAType
{

    /**
     * Details about a payment associated with one ground transportation reservation
     * request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentFormType[] $payment
     */
    private $payment = null;

    /**
     * Adds as payment
     *
     * Details about a payment associated with one ground transportation reservation
     * request.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormType $payment
     */
    public function addToPayment(\Davispeixoto\OpenTravelAlliance\PaymentFormType $payment)
    {
        $this->payment[] = $payment;

        return $this;
    }

    /**
     * isset payment
     *
     * Details about a payment associated with one ground transportation reservation
     * request.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPayment($index)
    {
        return isset($this->payment[$index]);
    }

    /**
     * unset payment
     *
     * Details about a payment associated with one ground transportation reservation
     * request.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPayment($index)
    {
        unset($this->payment[$index]);
    }

    /**
     * Gets as payment
     *
     * Details about a payment associated with one ground transportation reservation
     * request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentFormType[]
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Sets a new payment
     *
     * Details about a payment associated with one ground transportation reservation
     * request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormType[] $payment
     * @return self
     */
    public function setPayment(array $payment)
    {
        $this->payment = $payment;

        return $this;
    }


}

