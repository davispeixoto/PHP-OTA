<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType;

/**
 * Class representing PaymentScheduleAType
 */
class PaymentScheduleAType
{

    /**
     * Used to specify multiple currency amounts as well as payment types (e.g.,
     * deposit, final).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\PaymentScheduleAType\PaymentAType[]
     * $payment
     */
    private $payment = null;

    /**
     * Adds as payment
     *
     * Used to specify multiple currency amounts as well as payment types (e.g.,
     * deposit, final).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\PaymentScheduleAType\PaymentAType
     * $payment
     */
    public function addToPayment(
        \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\PaymentScheduleAType\PaymentAType $payment
    ) {
        $this->payment[] = $payment;

        return $this;
    }

    /**
     * isset payment
     *
     * Used to specify multiple currency amounts as well as payment types (e.g.,
     * deposit, final).
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
     * Used to specify multiple currency amounts as well as payment types (e.g.,
     * deposit, final).
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
     * Used to specify multiple currency amounts as well as payment types (e.g.,
     * deposit, final).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\PaymentScheduleAType\PaymentAType[]
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Sets a new payment
     *
     * Used to specify multiple currency amounts as well as payment types (e.g.,
     * deposit, final).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\PaymentScheduleAType\PaymentAType[]
     * $payment
     * @return self
     */
    public function setPayment(array $payment)
    {
        $this->payment = $payment;

        return $this;
    }


}

