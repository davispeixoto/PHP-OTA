<?php

namespace Davispeixoto\OpenTravelAlliance\OTACancelRQ;

/**
 * Class representing CancellationOverridesAType
 */
class CancellationOverridesAType
{

    /**
     * Used to override a cancellation rule.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CancelRuleType $cancellationOverride
     */
    private $cancellationOverride = null;

    /**
     * Gets as cancellationOverride
     *
     * Used to override a cancellation rule.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CancelRuleType
     */
    public function getCancellationOverride()
    {
        return $this->cancellationOverride;
    }

    /**
     * Sets a new cancellationOverride
     *
     * Used to override a cancellation rule.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CancelRuleType $cancellationOverride
     * @return self
     */
    public function setCancellationOverride(\Davispeixoto\OpenTravelAlliance\CancelRuleType $cancellationOverride)
    {
        $this->cancellationOverride = $cancellationOverride;

        return $this;
    }


}

