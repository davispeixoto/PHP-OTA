<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType;

use Davispeixoto\OpenTravelAlliance\PaymentRulesType;

/**
 * Class representing PaymentRulesAType
 */
class PaymentRulesAType extends PaymentRulesType
{

    /**
     * A collection of acceptable methods of payment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PaymentRulesAType\AcceptablePaymentsAType[]
     * $acceptablePayments
     */
    private $acceptablePayments = null;

    /**
     * Adds as acceptablePayments
     *
     * A collection of acceptable methods of payment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PaymentRulesAType\AcceptablePaymentsAType
     * $acceptablePayments
     */
    public function addToAcceptablePayments(
        \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PaymentRulesAType\AcceptablePaymentsAType $acceptablePayments
    ) {
        $this->acceptablePayments[] = $acceptablePayments;

        return $this;
    }

    /**
     * isset acceptablePayments
     *
     * A collection of acceptable methods of payment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAcceptablePayments($index)
    {
        return isset($this->acceptablePayments[$index]);
    }

    /**
     * unset acceptablePayments
     *
     * A collection of acceptable methods of payment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAcceptablePayments($index)
    {
        unset($this->acceptablePayments[$index]);
    }

    /**
     * Gets as acceptablePayments
     *
     * A collection of acceptable methods of payment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PaymentRulesAType\AcceptablePaymentsAType[]
     */
    public function getAcceptablePayments()
    {
        return $this->acceptablePayments;
    }

    /**
     * Sets a new acceptablePayments
     *
     * A collection of acceptable methods of payment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PaymentRulesAType\AcceptablePaymentsAType[]
     * $acceptablePayments
     * @return self
     */
    public function setAcceptablePayments(array $acceptablePayments)
    {
        $this->acceptablePayments = $acceptablePayments;

        return $this;
    }


}

