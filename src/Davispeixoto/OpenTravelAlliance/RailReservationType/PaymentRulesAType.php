<?php

namespace Davispeixoto\OpenTravelAlliance\RailReservationType;

/**
 * Class representing PaymentRulesAType
 */
class PaymentRulesAType
{

    /**
     * A specific payment rule associated with this reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MonetaryRuleType[] $paymentRule
     */
    private $paymentRule = null;

    /**
     * Adds as paymentRule
     *
     * A specific payment rule associated with this reservation.
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
     * A specific payment rule associated with this reservation.
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
     * A specific payment rule associated with this reservation.
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
     * A specific payment rule associated with this reservation.
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
     * A specific payment rule associated with this reservation.
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

