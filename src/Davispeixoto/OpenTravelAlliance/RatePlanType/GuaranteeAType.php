<?php

namespace Davispeixoto\OpenTravelAlliance\RatePlanType;

use Davispeixoto\OpenTravelAlliance\GuaranteeType;

/**
 * Class representing GuaranteeAType
 */
class GuaranteeAType extends GuaranteeType
{

    /**
     * Payment expressed as a fixed amount, or a percentage of/or room nights.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RatePlanType\GuaranteeAType\AmountPercentAType
     * $amountPercent
     */
    private $amountPercent = null;

    /**
     * Gets as amountPercent
     *
     * Payment expressed as a fixed amount, or a percentage of/or room nights.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RatePlanType\GuaranteeAType\AmountPercentAType
     */
    public function getAmountPercent()
    {
        return $this->amountPercent;
    }

    /**
     * Sets a new amountPercent
     *
     * Payment expressed as a fixed amount, or a percentage of/or room nights.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RatePlanType\GuaranteeAType\AmountPercentAType
     * $amountPercent
     * @return self
     */
    public function setAmountPercent(
        \Davispeixoto\OpenTravelAlliance\RatePlanType\GuaranteeAType\AmountPercentAType $amountPercent
    ) {
        $this->amountPercent = $amountPercent;

        return $this;
    }


}

