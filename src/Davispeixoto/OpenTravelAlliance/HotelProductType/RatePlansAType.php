<?php

namespace Davispeixoto\OpenTravelAlliance\HotelProductType;

/**
 * Class representing RatePlansAType
 */
class RatePlansAType
{

    /**
     * An individual rate plan.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RatePlansAType\RatePlanAType[]
     * $ratePlan
     */
    private $ratePlan = null;

    /**
     * Adds as ratePlan
     *
     * An individual rate plan.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RatePlansAType\RatePlanAType
     * $ratePlan
     */
    public function addToRatePlan(
        \Davispeixoto\OpenTravelAlliance\HotelProductType\RatePlansAType\RatePlanAType $ratePlan
    ) {
        $this->ratePlan[] = $ratePlan;

        return $this;
    }

    /**
     * isset ratePlan
     *
     * An individual rate plan.
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
     * An individual rate plan.
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
     * An individual rate plan.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RatePlansAType\RatePlanAType[]
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }

    /**
     * Sets a new ratePlan
     *
     * An individual rate plan.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RatePlansAType\RatePlanAType[]
     * $ratePlan
     * @return self
     */
    public function setRatePlan(array $ratePlan)
    {
        $this->ratePlan = $ratePlan;

        return $this;
    }


}

