<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseReservationType\PaymentsDueAType;

/**
 * Class representing PaymentDueAType
 */
class PaymentDueAType
{

    /**
     * Specifies the payment amount.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * Specifies the payment number. Typically would be used to indicate the deposit as
     * well as the final payments as determined by the backend system.
     *
     * @property integer $paymentNumber
     */
    private $paymentNumber = null;

    /**
     * Specifies the payment due date/time.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dueDate
     */
    private $dueDate = null;

    /**
     * Gets as amount
     *
     * Specifies the payment amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Specifies the payment amount.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Gets as paymentNumber
     *
     * Specifies the payment number. Typically would be used to indicate the deposit as
     * well as the final payments as determined by the backend system.
     *
     * @return integer
     */
    public function getPaymentNumber()
    {
        return $this->paymentNumber;
    }

    /**
     * Sets a new paymentNumber
     *
     * Specifies the payment number. Typically would be used to indicate the deposit as
     * well as the final payments as determined by the backend system.
     *
     * @param integer $paymentNumber
     * @return self
     */
    public function setPaymentNumber($paymentNumber)
    {
        $this->paymentNumber = $paymentNumber;

        return $this;
    }

    /**
     * Gets as dueDate
     *
     * Specifies the payment due date/time.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Sets a new dueDate
     *
     * Specifies the payment due date/time.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dueDate
     * @return self
     */
    public function setDueDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }


}

