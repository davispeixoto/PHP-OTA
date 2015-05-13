<?php

namespace Davispeixoto\OpenTravelAlliance\RatePlanType\GuaranteeAType;

use Davispeixoto\OpenTravelAlliance\AmountPercentType;

/**
 * Class representing AmountPercentAType
 */
class AmountPercentAType extends AmountPercentType
{

    /**
     * When true, indicates that the amount has been overridden.
     *
     * @property boolean $overriddenAmountIndicator
     */
    private $overriddenAmountIndicator = null;

    /**
     * Gets as overriddenAmountIndicator
     *
     * When true, indicates that the amount has been overridden.
     *
     * @return boolean
     */
    public function getOverriddenAmountIndicator()
    {
        return $this->overriddenAmountIndicator;
    }

    /**
     * Sets a new overriddenAmountIndicator
     *
     * When true, indicates that the amount has been overridden.
     *
     * @param boolean $overriddenAmountIndicator
     * @return self
     */
    public function setOverriddenAmountIndicator($overriddenAmountIndicator)
    {
        $this->overriddenAmountIndicator = $overriddenAmountIndicator;

        return $this;
    }


}

