<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelBookingRuleRQ\RuleMessageAType;

/**
 * Class representing RuleCategoriesAType
 */
class RuleCategoriesAType
{

    /**
     * A specific rule category.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelBookingRuleRQ\RuleMessageAType\RuleCategoriesAType\RuleCategoryAType[]
     * $ruleCategory
     */
    private $ruleCategory = null;

    /**
     * Adds as ruleCategory
     *
     * A specific rule category.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelBookingRuleRQ\RuleMessageAType\RuleCategoriesAType\RuleCategoryAType
     * $ruleCategory
     */
    public function addToRuleCategory(
        \Davispeixoto\OpenTravelAlliance\OTAHotelBookingRuleRQ\RuleMessageAType\RuleCategoriesAType\RuleCategoryAType $ruleCategory
    ) {
        $this->ruleCategory[] = $ruleCategory;

        return $this;
    }

    /**
     * isset ruleCategory
     *
     * A specific rule category.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRuleCategory($index)
    {
        return isset($this->ruleCategory[$index]);
    }

    /**
     * unset ruleCategory
     *
     * A specific rule category.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRuleCategory($index)
    {
        unset($this->ruleCategory[$index]);
    }

    /**
     * Gets as ruleCategory
     *
     * A specific rule category.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelBookingRuleRQ\RuleMessageAType\RuleCategoriesAType\RuleCategoryAType[]
     */
    public function getRuleCategory()
    {
        return $this->ruleCategory;
    }

    /**
     * Sets a new ruleCategory
     *
     * A specific rule category.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelBookingRuleRQ\RuleMessageAType\RuleCategoriesAType\RuleCategoryAType[]
     * $ruleCategory
     * @return self
     */
    public function setRuleCategory(array $ruleCategory)
    {
        $this->ruleCategory = $ruleCategory;

        return $this;
    }


}

