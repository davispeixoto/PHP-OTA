<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanNotifRQ\RatePlansAType;

use Davispeixoto\OpenTravelAlliance\HotelRatePlanType;

/**
 * Class representing RatePlanAType
 */
class RatePlanAType extends HotelRatePlanType
{

    /**
     * Defines charges that are included in this rate plan.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RatePlanInclusionsType
     * $ratePlanInclusions
     */
    private $ratePlanInclusions = null;

    /**
     * Gets as ratePlanInclusions
     *
     * Defines charges that are included in this rate plan.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RatePlanInclusionsType
     */
    public function getRatePlanInclusions()
    {
        return $this->ratePlanInclusions;
    }

    /**
     * Sets a new ratePlanInclusions
     *
     * Defines charges that are included in this rate plan.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RatePlanInclusionsType
     * $ratePlanInclusions
     * @return self
     */
    public function setRatePlanInclusions(\Davispeixoto\OpenTravelAlliance\RatePlanInclusionsType $ratePlanInclusions)
    {
        $this->ratePlanInclusions = $ratePlanInclusions;

        return $this;
    }


}

