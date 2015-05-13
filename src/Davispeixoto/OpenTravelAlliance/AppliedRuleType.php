<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AppliedRuleType
 *
 * Applied rule information, including category, rule identifier and rule
 * descriptions.
 * XSD Type: AppliedRuleType
 */
class AppliedRuleType
{

    /**
     * The applied rule category.Advanced Purchase | Weekend Stay
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
     * Information for individual airline applied rules.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AppliedRuleType\RuleInfoAType
     * $ruleInfo
     */
    private $ruleInfo = null;

    /**
     * Rule description(s).Repeated descriptions may be used to accommodate information
     * categories.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AppliedRuleType\DescriptionAType[]
     * $description
     */
    private $description = null;

    /**
     * Gets as category
     *
     * The applied rule category.Advanced Purchase | Weekend Stay
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
     * The applied rule category.Advanced Purchase | Weekend Stay
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
     * Information for individual airline applied rules.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AppliedRuleType\RuleInfoAType
     */
    public function getRuleInfo()
    {
        return $this->ruleInfo;
    }

    /**
     * Sets a new ruleInfo
     *
     * Information for individual airline applied rules.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AppliedRuleType\RuleInfoAType $ruleInfo
     * @return self
     */
    public function setRuleInfo(\Davispeixoto\OpenTravelAlliance\AppliedRuleType\RuleInfoAType $ruleInfo)
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
     * @param \Davispeixoto\OpenTravelAlliance\AppliedRuleType\DescriptionAType
     * $description
     */
    public function addToDescription(\Davispeixoto\OpenTravelAlliance\AppliedRuleType\DescriptionAType $description)
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
     * @return \Davispeixoto\OpenTravelAlliance\AppliedRuleType\DescriptionAType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\AppliedRuleType\DescriptionAType[]
     * $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;

        return $this;
    }


}

