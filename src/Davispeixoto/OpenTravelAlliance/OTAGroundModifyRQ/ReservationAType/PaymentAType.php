<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType;

/**
 * Class representing PaymentAType
 */
class PaymentAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\PaymentFormType[] $payment
     */
    private $payment = null;

    /**
     * Adds as payment
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
     * @return \Davispeixoto\OpenTravelAlliance\PaymentFormType[]
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Sets a new payment
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

