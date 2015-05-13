<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PaymentResponseType
 *
 * Details of payment.
 * XSD Type: PaymentResponseType
 */
class PaymentResponseType extends PaymentFormType
{

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\PaymentResponseType\PaymentAmountAType
     * $paymentAmount
     */
    private $paymentAmount = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $paymentReferenceID
     */
    private $paymentReferenceID = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\ErrorType $error
     */
    private $error = null;

    /**
     * Gets as paymentAmount
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentResponseType\PaymentAmountAType
     */
    public function getPaymentAmount()
    {
        return $this->paymentAmount;
    }

    /**
     * Sets a new paymentAmount
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentResponseType\PaymentAmountAType
     * $paymentAmount
     * @return self
     */
    public function setPaymentAmount(
        \Davispeixoto\OpenTravelAlliance\PaymentResponseType\PaymentAmountAType $paymentAmount
    ) {
        $this->paymentAmount = $paymentAmount;

        return $this;
    }

    /**
     * Gets as paymentReferenceID
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getPaymentReferenceID()
    {
        return $this->paymentReferenceID;
    }

    /**
     * Sets a new paymentReferenceID
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $paymentReferenceID
     * @return self
     */
    public function setPaymentReferenceID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $paymentReferenceID)
    {
        $this->paymentReferenceID = $paymentReferenceID;

        return $this;
    }

    /**
     * Gets as error
     *
     * @return \Davispeixoto\OpenTravelAlliance\ErrorType
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param \Davispeixoto\OpenTravelAlliance\ErrorType $error
     * @return self
     */
    public function setError(\Davispeixoto\OpenTravelAlliance\ErrorType $error)
    {
        $this->error = $error;

        return $this;
    }


}

