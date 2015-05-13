<?php

namespace Davispeixoto\OpenTravelAlliance\AirComponentType;

use Davispeixoto\OpenTravelAlliance\AirItineraryPricingInfoType;

/**
 * Class representing AirItineraryPricingInfoAType
 */
class AirItineraryPricingInfoAType extends AirItineraryPricingInfoType
{

    /**
     * If true re-pricing of the itinerary is required.
     *
     * @property boolean $repriceRequired
     */
    private $repriceRequired = null;

    /**
     * Gets as repriceRequired
     *
     * If true re-pricing of the itinerary is required.
     *
     * @return boolean
     */
    public function getRepriceRequired()
    {
        return $this->repriceRequired;
    }

    /**
     * Sets a new repriceRequired
     *
     * If true re-pricing of the itinerary is required.
     *
     * @param boolean $repriceRequired
     * @return self
     */
    public function setRepriceRequired($repriceRequired)
    {
        $this->repriceRequired = $repriceRequired;

        return $this;
    }


}

