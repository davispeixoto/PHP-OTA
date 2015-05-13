<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType;

/**
 * Class representing RuleIDsAType
 */
class RuleIDsAType
{

    /**
     * The identification of a previously defined rule.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\RuleIDsAType\RuleIDAType[]
     * $ruleID
     */
    private $ruleID = null;

    /**
     * Adds as ruleID
     *
     * The identification of a previously defined rule.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\RuleIDsAType\RuleIDAType
     * $ruleID
     */
    public function addToRuleID(
        \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\RuleIDsAType\RuleIDAType $ruleID
    ) {
        $this->ruleID[] = $ruleID;

        return $this;
    }

    /**
     * isset ruleID
     *
     * The identification of a previously defined rule.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRuleID($index)
    {
        return isset($this->ruleID[$index]);
    }

    /**
     * unset ruleID
     *
     * The identification of a previously defined rule.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRuleID($index)
    {
        unset($this->ruleID[$index]);
    }

    /**
     * Gets as ruleID
     *
     * The identification of a previously defined rule.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\RuleIDsAType\RuleIDAType[]
     */
    public function getRuleID()
    {
        return $this->ruleID;
    }

    /**
     * Sets a new ruleID
     *
     * The identification of a previously defined rule.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\RuleIDsAType\RuleIDAType[]
     * $ruleID
     * @return self
     */
    public function setRuleID(array $ruleID)
    {
        $this->ruleID = $ruleID;

        return $this;
    }


}

