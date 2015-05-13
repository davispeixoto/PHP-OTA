<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CancelRulesType
 *
 * A collection of reservation cancellation rule information.
 * XSD Type: CancelRulesType
 */
class CancelRulesType
{

    /**
     * Cancel Rule MUST specify details of a cancellation rule that applies to the
     * cancellation of this reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CancelRulesType\CancelRuleAType
     * $cancelRule
     */
    private $cancelRule = null;

    /**
     * Gets as cancelRule
     *
     * Cancel Rule MUST specify details of a cancellation rule that applies to the
     * cancellation of this reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CancelRulesType\CancelRuleAType
     */
    public function getCancelRule()
    {
        return $this->cancelRule;
    }

    /**
     * Sets a new cancelRule
     *
     * Cancel Rule MUST specify details of a cancellation rule that applies to the
     * cancellation of this reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CancelRulesType\CancelRuleAType
     * $cancelRule
     * @return self
     */
    public function setCancelRule(\Davispeixoto\OpenTravelAlliance\CancelRulesType\CancelRuleAType $cancelRule)
    {
        $this->cancelRule = $cancelRule;

        return $this;
    }


}

