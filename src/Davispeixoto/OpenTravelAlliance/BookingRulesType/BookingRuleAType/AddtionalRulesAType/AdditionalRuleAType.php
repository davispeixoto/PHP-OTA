<?php

namespace Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AddtionalRulesAType;

/**
 * Class representing AdditionalRuleAType
 */
class AdditionalRuleAType
{

    /**
     * Provides additional rules for the reservation.
     *
     * @property string $additionalRule
     */
    private $additionalRule = null;

    /**
     * Gets as additionalRule
     *
     * Provides additional rules for the reservation.
     *
     * @return string
     */
    public function getAdditionalRule()
    {
        return $this->additionalRule;
    }

    /**
     * Sets a new additionalRule
     *
     * Provides additional rules for the reservation.
     *
     * @param string $additionalRule
     * @return self
     */
    public function setAdditionalRule($additionalRule)
    {
        $this->additionalRule = $additionalRule;

        return $this;
    }


}

