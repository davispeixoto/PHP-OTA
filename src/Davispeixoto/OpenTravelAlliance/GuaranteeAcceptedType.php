<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GuaranteeAcceptedType
 *
 * Information about an acceptable form of guarantee required to book a
 * reservation.
 * XSD Type: GuaranteeAcceptedType
 */
class GuaranteeAcceptedType
{

    /**
     * PaymentCard MUST provide the details of the payment card for this acceptable
     * form of guarantee.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentCardType $paymentCard
     */
    private $paymentCard = null;

    /**
     * Gets as paymentCard
     *
     * PaymentCard MUST provide the details of the payment card for this acceptable
     * form of guarantee.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentCardType
     */
    public function getPaymentCard()
    {
        return $this->paymentCard;
    }

    /**
     * Sets a new paymentCard
     *
     * PaymentCard MUST provide the details of the payment card for this acceptable
     * form of guarantee.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentCardType $paymentCard
     * @return self
     */
    public function setPaymentCard(\Davispeixoto\OpenTravelAlliance\PaymentCardType $paymentCard)
    {
        $this->paymentCard = $paymentCard;

        return $this;
    }


}

