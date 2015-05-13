<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GolfAppliedRuleType
 *
 * Applied rule information, including category, rule identifier and rule
 * descriptions.
 * XSD Type: GolfAppliedRuleType
 */
class GolfAppliedRuleType
{

    /**
     * The applied rule category.Advanced Purchase | Weekend Tee Time
     *
     * @property string $category
     */
    private $category = null;

    /**
     * If true, a system default rule was used.
     *
     * @property boolean $defaultUsedInd
     */
    private $defaultUsedInd = null;

    /**
     * Information for individual tee time supplier applied rules.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolfAppliedRuleType\RuleInfoAType
     * $ruleInfo
     */
    private $ruleInfo = null;

    /**
     * Rule description(s).Repeated descriptions may be used to accommodate information
     * categories.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GolfAppliedRuleType\DescriptionAType[]
     * $description
     */
    private $description = null;

    /**
     * Gets as category
     *
     * The applied rule category.Advanced Purchase | Weekend Tee Time
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * The applied rule category.Advanced Purchase | Weekend Tee Time
     *
     * @param string $category
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Gets as defaultUsedInd
     *
     * If true, a system default rule was used.
     *
     * @return boolean
     */
    public function getDefaultUsedInd()
    {
        return $this->defaultUsedInd;
    }

    /**
     * Sets a new defaultUsedInd
     *
     * If true, a system default rule was used.
     *
     * @param boolean $defaultUsedInd
     * @return self
     */
    public function setDefaultUsedInd($defaultUsedInd)
    {
        $this->defaultUsedInd = $defaultUsedInd;

        return $this;
    }

    /**
     * Gets as ruleInfo
     *
     * Information for individual tee time supplier applied rules.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolfAppliedRuleType\RuleInfoAType
     */
    public function getRuleInfo()
    {
        return $this->ruleInfo;
    }

    /**
     * Sets a new ruleInfo
     *
     * Information for individual tee time supplier applied rules.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolfAppliedRuleType\RuleInfoAType
     * $ruleInfo
     * @return self
     */
    public function setRuleInfo(\Davispeixoto\OpenTravelAlliance\GolfAppliedRuleType\RuleInfoAType $ruleInfo)
    {
        $this->ruleInfo = $ruleInfo;

        return $this;
    }

    /**
     * Adds as description
     *
     * Rule description(s).Repeated descriptions may be used to accommodate information
     * categories.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GolfAppliedRuleType\DescriptionAType
     * $description
     */
    public function addToDescription(\Davispeixoto\OpenTravelAlliance\GolfAppliedRuleType\DescriptionAType $description)
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * isset description
     *
     * Rule description(s).Repeated descriptions may be used to accommodate information
     * categories.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * Rule description(s).Repeated descriptions may be used to accommodate information
     * categories.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * Rule description(s).Repeated descriptions may be used to accommodate information
     * categories.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolfAppliedRuleType\DescriptionAType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Rule description(s).Repeated descriptions may be used to accommodate information
     * categories.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolfAppliedRuleType\DescriptionAType[]
     * $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;

        return $this;
    }


}

