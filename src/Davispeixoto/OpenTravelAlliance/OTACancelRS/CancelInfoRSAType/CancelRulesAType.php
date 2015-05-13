<?php

namespace Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType;

/**
 * Class representing CancelRulesAType
 */
class CancelRulesAType
{

    /**
     * CancelRule MUST specify details of a cancellation rule that applies to the
     * cancellation of this reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType\CancelRulesAType\CancelRuleAType
     * $cancelRule
     */
    private $cancelRule = null;

    /**
     * Gets as cancelRule
     *
     * CancelRule MUST specify details of a cancellation rule that applies to the
     * cancellation of this reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType\CancelRulesAType\CancelRuleAType
     */
    public function getCancelRule()
    {
        return $this->cancelRule;
    }

    /**
     * Sets a new cancelRule
     *
     * CancelRule MUST specify details of a cancellation rule that applies to the
     * cancellation of this reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType\CancelRulesAType\CancelRuleAType
     * $cancelRule
     * @return self
     */
    public function setCancelRule(
        \Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType\CancelRulesAType\CancelRuleAType $cancelRule
    ) {
        $this->cancelRule = $cancelRule;

        return $this;
    }


}

