<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelProductRQ\HotelProductsAType\HotelProductAType\RatePlansAType;

/**
 * Class representing RatePlanAType
 */
class RatePlanAType
{

    /**
     * A code that identifies the rate plan. This may be the sending system's rate plan
     * code or the receiving system's rate plan code depending on the trading partner
     * agreement.
     *
     * @property string $ratePlanCode
     */
    private $ratePlanCode = null;

    /**
     * Gets as ratePlanCode
     *
     * A code that identifies the rate plan. This may be the sending system's rate plan
     * code or the receiving system's rate plan code depending on the trading partner
     * agreement.
     *
     * @return string
     */
    public function getRatePlanCode()
    {
        return $this->ratePlanCode;
    }

    /**
     * Sets a new ratePlanCode
     *
     * A code that identifies the rate plan. This may be the sending system's rate plan
     * code or the receiving system's rate plan code depending on the trading partner
     * agreement.
     *
     * @param string $ratePlanCode
     * @return self
     */
    public function setRatePlanCode($ratePlanCode)
    {
        $this->ratePlanCode = $ratePlanCode;

        return $this;
    }


}

