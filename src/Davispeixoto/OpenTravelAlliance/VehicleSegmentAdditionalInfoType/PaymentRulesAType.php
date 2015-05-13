<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleSegmentAdditionalInfoType;

/**
 * Class representing PaymentRulesAType
 */
class PaymentRulesAType
{

    /**
     * One specific payment rule associated with this reservation. For example, a date
     * by which a deposit must be received.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MonetaryRuleType[] $paymentRule
     */
    private $paymentRule = null;

    /**
     * Adds as paymentRule
     *
     * One specific payment rule associated with this reservation. For example, a date
     * by which a deposit must be received.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MonetaryRuleType $paymentRule
     */
    public function addToPaymentRule(\Davispeixoto\OpenTravelAlliance\MonetaryRuleType $paymentRule)
    {
        $this->paymentRule[] = $paymentRule;

        return $this;
    }

    /**
     * isset paymentRule
     *
     * One specific payment rule associated with this reservation. For example, a date
     * by which a deposit must be received.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentRule($index)
    {
        return isset($this->paymentRule[$index]);
    }

    /**
     * unset paymentRule
     *
     * One specific payment rule associated with this reservation. For example, a date
     * by which a deposit must be received.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentRule($index)
    {
        unset($this->paymentRule[$index]);
    }

    /**
     * Gets as paymentRule
     *
     * One specific payment rule associated with this reservation. For example, a date
     * by which a deposit must be received.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MonetaryRuleType[]
     */
    public function getPaymentRule()
    {
        return $this->paymentRule;
    }

    /**
     * Sets a new paymentRule
     *
     * One specific payment rule associated with this reservation. For example, a date
     * by which a deposit must be received.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MonetaryRuleType[] $paymentRule
     * @return self
     */
    public function setPaymentRule(array $paymentRule)
    {
        $this->paymentRule = $paymentRule;

        return $this;
    }


}

