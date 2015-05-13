<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AcceptedPaymentsType
 *
 * Used to define the types of payments accepted.
 * XSD Type: AcceptedPaymentsType
 */
class AcceptedPaymentsType
{

    /**
     * An acceptable form of payment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType\AcceptedPaymentAType[]
     * $acceptedPayment
     */
    private $acceptedPayment = null;

    /**
     * Adds as acceptedPayment
     *
     * An acceptable form of payment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType\AcceptedPaymentAType
     * $acceptedPayment
     */
    public function addToAcceptedPayment(
        \Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType\AcceptedPaymentAType $acceptedPayment
    ) {
        $this->acceptedPayment[] = $acceptedPayment;

        return $this;
    }

    /**
     * isset acceptedPayment
     *
     * An acceptable form of payment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAcceptedPayment($index)
    {
        return isset($this->acceptedPayment[$index]);
    }

    /**
     * unset acceptedPayment
     *
     * An acceptable form of payment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAcceptedPayment($index)
    {
        unset($this->acceptedPayment[$index]);
    }

    /**
     * Gets as acceptedPayment
     *
     * An acceptable form of payment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType\AcceptedPaymentAType[]
     */
    public function getAcceptedPayment()
    {
        return $this->acceptedPayment;
    }

    /**
     * Sets a new acceptedPayment
     *
     * An acceptable form of payment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType\AcceptedPaymentAType[]
     * $acceptedPayment
     * @return self
     */
    public function setAcceptedPayment(array $acceptedPayment)
    {
        $this->acceptedPayment = $acceptedPayment;

        return $this;
    }


}

