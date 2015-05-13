<?php

namespace Davispeixoto\OpenTravelAlliance\CancelInfoRSType;

/**
 * Class representing CancelRulesAType
 */
class CancelRulesAType
{

    /**
     * Details of a cancellation rule.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CancelRuleType[] $cancelRule
     */
    private $cancelRule = null;

    /**
     * Adds as cancelRule
     *
     * Details of a cancellation rule.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CancelRuleType $cancelRule
     */
    public function addToCancelRule(\Davispeixoto\OpenTravelAlliance\CancelRuleType $cancelRule)
    {
        $this->cancelRule[] = $cancelRule;

        return $this;
    }

    /**
     * isset cancelRule
     *
     * Details of a cancellation rule.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCancelRule($index)
    {
        return isset($this->cancelRule[$index]);
    }

    /**
     * unset cancelRule
     *
     * Details of a cancellation rule.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCancelRule($index)
    {
        unset($this->cancelRule[$index]);
    }

    /**
     * Gets as cancelRule
     *
     * Details of a cancellation rule.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CancelRuleType[]
     */
    public function getCancelRule()
    {
        return $this->cancelRule;
    }

    /**
     * Sets a new cancelRule
     *
     * Details of a cancellation rule.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CancelRuleType[] $cancelRule
     * @return self
     */
    public function setCancelRule(array $cancelRule)
    {
        $this->cancelRule = $cancelRule;

        return $this;
    }


}

