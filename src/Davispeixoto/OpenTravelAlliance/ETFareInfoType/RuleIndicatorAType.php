<?php

namespace Davispeixoto\OpenTravelAlliance\ETFareInfoType;

/**
 * Class representing RuleIndicatorAType
 */
class RuleIndicatorAType
{

    /**
     * The ATPCO category number for the fare.
     *
     * @property string $ruleCode
     */
    private $ruleCode = null;

    /**
     * Gets as ruleCode
     *
     * The ATPCO category number for the fare.
     *
     * @return string
     */
    public function getRuleCode()
    {
        return $this->ruleCode;
    }

    /**
     * Sets a new ruleCode
     *
     * The ATPCO category number for the fare.
     *
     * @param string $ruleCode
     * @return self
     */
    public function setRuleCode($ruleCode)
    {
        $this->ruleCode = $ruleCode;

        return $this;
    }


}

