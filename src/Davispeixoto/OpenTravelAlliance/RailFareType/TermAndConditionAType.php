<?php

namespace Davispeixoto\OpenTravelAlliance\RailFareType;

/**
 * Class representing TermAndConditionAType
 */
class TermAndConditionAType
{

    /**
     * A fare rule code. Refer to OpenTravel Code List Fare Restriction (FAR).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailFareType\TermAndConditionAType\FareRuleAType
     * $fareRule
     */
    private $fareRule = null;

    /**
     * Dates associated with the fare rule.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailFareType\TermAndConditionAType\EffectiveDatesAType
     * $effectiveDates
     */
    private $effectiveDates = null;

    /**
     * Free text description for a a fare rule or terms and conditions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType $description
     */
    private $description = null;

    /**
     * Gets as fareRule
     *
     * A fare rule code. Refer to OpenTravel Code List Fare Restriction (FAR).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RailFareType\TermAndConditionAType\FareRuleAType
     */
    public function getFareRule()
    {
        return $this->fareRule;
    }

    /**
     * Sets a new fareRule
     *
     * A fare rule code. Refer to OpenTravel Code List Fare Restriction (FAR).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailFareType\TermAndConditionAType\FareRuleAType
     * $fareRule
     * @return self
     */
    public function setFareRule(
        \Davispeixoto\OpenTravelAlliance\RailFareType\TermAndConditionAType\FareRuleAType $fareRule
    ) {
        $this->fareRule = $fareRule;

        return $this;
    }

    /**
     * Gets as effectiveDates
     *
     * Dates associated with the fare rule.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RailFareType\TermAndConditionAType\EffectiveDatesAType
     */
    public function getEffectiveDates()
    {
        return $this->effectiveDates;
    }

    /**
     * Sets a new effectiveDates
     *
     * Dates associated with the fare rule.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailFareType\TermAndConditionAType\EffectiveDatesAType
     * $effectiveDates
     * @return self
     */
    public function setEffectiveDates(
        \Davispeixoto\OpenTravelAlliance\RailFareType\TermAndConditionAType\EffectiveDatesAType $effectiveDates
    ) {
        $this->effectiveDates = $effectiveDates;

        return $this;
    }

    /**
     * Gets as description
     *
     * Free text description for a a fare rule or terms and conditions.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FreeTextType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Free text description for a a fare rule or terms and conditions.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType $description
     * @return self
     */
    public function setDescription(\Davispeixoto\OpenTravelAlliance\FreeTextType $description)
    {
        $this->description = $description;

        return $this;
    }


}

