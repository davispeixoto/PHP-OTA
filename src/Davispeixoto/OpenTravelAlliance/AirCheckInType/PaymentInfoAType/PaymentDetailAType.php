<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType\PaymentInfoAType;

use Davispeixoto\OpenTravelAlliance\PaymentDetailType;

/**
 * Class representing PaymentDetailAType
 */
class PaymentDetailAType extends PaymentDetailType
{

    /**
     * Specifies why a payment is required for baggage (e.g., oversized, overweight,
     * excess quantity, etc.)
     *
     * @property string $paymentReason
     */
    private $paymentReason = null;

    /**
     * Gets as paymentReason
     *
     * Specifies why a payment is required for baggage (e.g., oversized, overweight,
     * excess quantity, etc.)
     *
     * @return string
     */
    public function getPaymentReason()
    {
        return $this->paymentReason;
    }

    /**
     * Sets a new paymentReason
     *
     * Specifies why a payment is required for baggage (e.g., oversized, overweight,
     * excess quantity, etc.)
     *
     * @param string $paymentReason
     * @return self
     */
    public function setPaymentReason($paymentReason)
    {
        $this->paymentReason = $paymentReason;

        return $this;
    }


}

