<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseReservationType;

/**
 * Class representing PaymentsDueAType
 */
class PaymentsDueAType
{

    /**
     * Information on a due payment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseReservationType\PaymentsDueAType\PaymentDueAType[]
     * $paymentDue
     */
    private $paymentDue = null;

    /**
     * Adds as paymentDue
     *
     * Information on a due payment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseReservationType\PaymentsDueAType\PaymentDueAType
     * $paymentDue
     */
    public function addToPaymentDue(
        \Davispeixoto\OpenTravelAlliance\CruiseReservationType\PaymentsDueAType\PaymentDueAType $paymentDue
    ) {
        $this->paymentDue[] = $paymentDue;

        return $this;
    }

    /**
     * isset paymentDue
     *
     * Information on a due payment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentDue($index)
    {
        return isset($this->paymentDue[$index]);
    }

    /**
     * unset paymentDue
     *
     * Information on a due payment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentDue($index)
    {
        unset($this->paymentDue[$index]);
    }

    /**
     * Gets as paymentDue
     *
     * Information on a due payment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseReservationType\PaymentsDueAType\PaymentDueAType[]
     */
    public function getPaymentDue()
    {
        return $this->paymentDue;
    }

    /**
     * Sets a new paymentDue
     *
     * Information on a due payment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseReservationType\PaymentsDueAType\PaymentDueAType[]
     * $paymentDue
     * @return self
     */
    public function setPaymentDue(array $paymentDue)
    {
        $this->paymentDue = $paymentDue;

        return $this;
    }


}

