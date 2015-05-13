<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanRQ;

/**
 * Class representing RatePlansAType
 */
class RatePlansAType
{

    /**
     * Provides the criteria to identify the rate plan to be returned.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanRQ\RatePlansAType\RatePlanAType[]
     * $ratePlan
     */
    private $ratePlan = null;

    /**
     * Adds as ratePlan
     *
     * Provides the criteria to identify the rate plan to be returned.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanRQ\RatePlansAType\RatePlanAType
     * $ratePlan
     */
    public function addToRatePlan(
        \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanRQ\RatePlansAType\RatePlanAType $ratePlan
    ) {
        $this->ratePlan[] = $ratePlan;

        return $this;
    }

    /**
     * isset ratePlan
     *
     * Provides the criteria to identify the rate plan to be returned.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRatePlan($index)
    {
        return isset($this->ratePlan[$index]);
    }

    /**
     * unset ratePlan
     *
     * Provides the criteria to identify the rate plan to be returned.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRatePlan($index)
    {
        unset($this->ratePlan[$index]);
    }

    /**
     * Gets as ratePlan
     *
     * Provides the criteria to identify the rate plan to be returned.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanRQ\RatePlansAType\RatePlanAType[]
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }

    /**
     * Sets a new ratePlan
     *
     * Provides the criteria to identify the rate plan to be returned.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanRQ\RatePlansAType\RatePlanAType[]
     * $ratePlan
     * @return self
     */
    public function setRatePlan(array $ratePlan)
    {
        $this->ratePlan = $ratePlan;

        return $this;
    }


}

