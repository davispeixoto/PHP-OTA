<?php

namespace Davispeixoto\OpenTravelAlliance\OfferType;

/**
 * Class representing OfferRulesAType
 */
class OfferRulesAType
{

    /**
     * Defines conditions for which the offer applies.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType[]
     * $offerRule
     */
    private $offerRule = null;

    /**
     * Adds as offerRule
     *
     * Defines conditions for which the offer applies.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType
     * $offerRule
     */
    public function addToOfferRule(\Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType $offerRule)
    {
        $this->offerRule[] = $offerRule;

        return $this;
    }

    /**
     * isset offerRule
     *
     * Defines conditions for which the offer applies.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOfferRule($index)
    {
        return isset($this->offerRule[$index]);
    }

    /**
     * unset offerRule
     *
     * Defines conditions for which the offer applies.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOfferRule($index)
    {
        unset($this->offerRule[$index]);
    }

    /**
     * Gets as offerRule
     *
     * Defines conditions for which the offer applies.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType[]
     */
    public function getOfferRule()
    {
        return $this->offerRule;
    }

    /**
     * Sets a new offerRule
     *
     * Defines conditions for which the offer applies.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType[]
     * $offerRule
     * @return self
     */
    public function setOfferRule(array $offerRule)
    {
        $this->offerRule = $offerRule;

        return $this;
    }


}

