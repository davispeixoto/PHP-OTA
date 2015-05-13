<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehRateRuleNotifRQ;

/**
 * Class representing RulesAType
 */
class RulesAType
{

    /**
     * The count of car locations being sent in this message.
     *
     * @property integer $ruleQuantity
     */
    private $ruleQuantity = null;

    /**
     * Rule detail information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleNotifRQ\RulesAType\RuleAType[]
     * $rule
     */
    private $rule = null;

    /**
     * Gets as ruleQuantity
     *
     * The count of car locations being sent in this message.
     *
     * @return integer
     */
    public function getRuleQuantity()
    {
        return $this->ruleQuantity;
    }

    /**
     * Sets a new ruleQuantity
     *
     * The count of car locations being sent in this message.
     *
     * @param integer $ruleQuantity
     * @return self
     */
    public function setRuleQuantity($ruleQuantity)
    {
        $this->ruleQuantity = $ruleQuantity;

        return $this;
    }

    /**
     * Adds as rule
     *
     * Rule detail information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleNotifRQ\RulesAType\RuleAType
     * $rule
     */
    public function addToRule(\Davispeixoto\OpenTravelAlliance\OTAVehRateRuleNotifRQ\RulesAType\RuleAType $rule)
    {
        $this->rule[] = $rule;

        return $this;
    }

    /**
     * isset rule
     *
     * Rule detail information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRule($index)
    {
        return isset($this->rule[$index]);
    }

    /**
     * unset rule
     *
     * Rule detail information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRule($index)
    {
        unset($this->rule[$index]);
    }

    /**
     * Gets as rule
     *
     * Rule detail information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleNotifRQ\RulesAType\RuleAType[]
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Sets a new rule
     *
     * Rule detail information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleNotifRQ\RulesAType\RuleAType[]
     * $rule
     * @return self
     */
    public function setRule(array $rule)
    {
        $this->rule = $rule;

        return $this;
    }


}

