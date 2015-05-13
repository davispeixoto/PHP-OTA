<?php

namespace Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType;

/**
 * Class representing AddtionalRulesAType
 */
class AddtionalRulesAType
{

    /**
     * Indicates an additional rule for the reservation (e.g., cancelable, modifiable
     * or refundable).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AddtionalRulesAType\AdditionalRuleAType[]
     * $additionalRule
     */
    private $additionalRule = null;

    /**
     * Adds as additionalRule
     *
     * Indicates an additional rule for the reservation (e.g., cancelable, modifiable
     * or refundable).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AddtionalRulesAType\AdditionalRuleAType
     * $additionalRule
     */
    public function addToAdditionalRule(
        \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AddtionalRulesAType\AdditionalRuleAType $additionalRule
    ) {
        $this->additionalRule[] = $additionalRule;

        return $this;
    }

    /**
     * isset additionalRule
     *
     * Indicates an additional rule for the reservation (e.g., cancelable, modifiable
     * or refundable).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalRule($index)
    {
        return isset($this->additionalRule[$index]);
    }

    /**
     * unset additionalRule
     *
     * Indicates an additional rule for the reservation (e.g., cancelable, modifiable
     * or refundable).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalRule($index)
    {
        unset($this->additionalRule[$index]);
    }

    /**
     * Gets as additionalRule
     *
     * Indicates an additional rule for the reservation (e.g., cancelable, modifiable
     * or refundable).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AddtionalRulesAType\AdditionalRuleAType[]
     */
    public function getAdditionalRule()
    {
        return $this->additionalRule;
    }

    /**
     * Sets a new additionalRule
     *
     * Indicates an additional rule for the reservation (e.g., cancelable, modifiable
     * or refundable).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AddtionalRulesAType\AdditionalRuleAType[]
     * $additionalRule
     * @return self
     */
    public function setAdditionalRule(array $additionalRule)
    {
        $this->additionalRule = $additionalRule;

        return $this;
    }


}

