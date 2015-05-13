<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehRateRuleNotifRQ\RulesAType;

use Davispeixoto\OpenTravelAlliance\RateRulesType;

/**
 * Class representing RuleAType
 */
class RuleAType extends RateRulesType
{

    /**
     * An identifier for the rule.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * To specifiy the action to be taken on this information and the effective and
     * discontinue dates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleNotifRQ\RulesAType\RuleAType\ProcessingInfoAType
     * $processingInfo
     */
    private $processingInfo = null;

    /**
     * The rule in textual format.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $ruleText
     */
    private $ruleText = null;

    /**
     * Gets as iD
     *
     * An identifier for the rule.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * An identifier for the rule.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as processingInfo
     *
     * To specifiy the action to be taken on this information and the effective and
     * discontinue dates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleNotifRQ\RulesAType\RuleAType\ProcessingInfoAType
     */
    public function getProcessingInfo()
    {
        return $this->processingInfo;
    }

    /**
     * Sets a new processingInfo
     *
     * To specifiy the action to be taken on this information and the effective and
     * discontinue dates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleNotifRQ\RulesAType\RuleAType\ProcessingInfoAType
     * $processingInfo
     * @return self
     */
    public function setProcessingInfo(
        \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleNotifRQ\RulesAType\RuleAType\ProcessingInfoAType $processingInfo
    ) {
        $this->processingInfo = $processingInfo;

        return $this;
    }

    /**
     * Gets as ruleText
     *
     * The rule in textual format.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextTextType
     */
    public function getRuleText()
    {
        return $this->ruleText;
    }

    /**
     * Sets a new ruleText
     *
     * The rule in textual format.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $ruleText
     * @return self
     */
    public function setRuleText(\Davispeixoto\OpenTravelAlliance\FormattedTextTextType $ruleText)
    {
        $this->ruleText = $ruleText;

        return $this;
    }


}

