<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RequiredPaymentsType
 *
 * A collection of required payments.
 * XSD Type: RequiredPaymentsType
 */
class RequiredPaymentsType
{

    /**
     * Used to define the deposit policy, guarantees policy, and/or accepted forms of
     * payment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType[]
     * $guaranteePayment
     */
    private $guaranteePayment = null;

    /**
     * Adds as guaranteePayment
     *
     * Used to define the deposit policy, guarantees policy, and/or accepted forms of
     * payment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType
     * $guaranteePayment
     */
    public function addToGuaranteePayment(
        \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment
    ) {
        $this->guaranteePayment[] = $guaranteePayment;

        return $this;
    }

    /**
     * isset guaranteePayment
     *
     * Used to define the deposit policy, guarantees policy, and/or accepted forms of
     * payment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuaranteePayment($index)
    {
        return isset($this->guaranteePayment[$index]);
    }

    /**
     * unset guaranteePayment
     *
     * Used to define the deposit policy, guarantees policy, and/or accepted forms of
     * payment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuaranteePayment($index)
    {
        unset($this->guaranteePayment[$index]);
    }

    /**
     * Gets as guaranteePayment
     *
     * Used to define the deposit policy, guarantees policy, and/or accepted forms of
     * payment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType[]
     */
    public function getGuaranteePayment()
    {
        return $this->guaranteePayment;
    }

    /**
     * Sets a new guaranteePayment
     *
     * Used to define the deposit policy, guarantees policy, and/or accepted forms of
     * payment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType[]
     * $guaranteePayment
     * @return self
     */
    public function setGuaranteePayment(array $guaranteePayment)
    {
        $this->guaranteePayment = $guaranteePayment;

        return $this;
    }


}

