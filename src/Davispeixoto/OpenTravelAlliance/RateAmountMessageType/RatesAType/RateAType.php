<?php

namespace Davispeixoto\OpenTravelAlliance\RateAmountMessageType\RatesAType;

use Davispeixoto\OpenTravelAlliance\RateUploadType;

/**
 * Class representing RateAType
 */
class RateAType extends RateUploadType
{

    /**
     * When true, indicates a rate change is applicable. When false, a rate change does
     * not apply.
     *
     * @property boolean $rateChangeIndicator
     */
    private $rateChangeIndicator = null;

    /**
     * Gets as rateChangeIndicator
     *
     * When true, indicates a rate change is applicable. When false, a rate change does
     * not apply.
     *
     * @return boolean
     */
    public function getRateChangeIndicator()
    {
        return $this->rateChangeIndicator;
    }

    /**
     * Sets a new rateChangeIndicator
     *
     * When true, indicates a rate change is applicable. When false, a rate change does
     * not apply.
     *
     * @param boolean $rateChangeIndicator
     * @return self
     */
    public function setRateChangeIndicator($rateChangeIndicator)
    {
        $this->rateChangeIndicator = $rateChangeIndicator;

        return $this;
    }


}

