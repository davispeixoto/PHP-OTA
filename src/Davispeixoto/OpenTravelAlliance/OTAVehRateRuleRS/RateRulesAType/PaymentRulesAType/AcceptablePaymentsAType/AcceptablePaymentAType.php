<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PaymentRulesAType\AcceptablePaymentsAType;

/**
 * Class representing AcceptablePaymentAType
 */
class AcceptablePaymentAType
{

    /**
     * The acceptable credit card for this payment rule.
     *
     * @property string $creditCardCode
     */
    private $creditCardCode = null;

    /**
     * Gets as creditCardCode
     *
     * The acceptable credit card for this payment rule.
     *
     * @return string
     */
    public function getCreditCardCode()
    {
        return $this->creditCardCode;
    }

    /**
     * Sets a new creditCardCode
     *
     * The acceptable credit card for this payment rule.
     *
     * @param string $creditCardCode
     * @return self
     */
    public function setCreditCardCode($creditCardCode)
    {
        $this->creditCardCode = $creditCardCode;

        return $this;
    }


}

