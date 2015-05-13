<?php

namespace Davispeixoto\OpenTravelAlliance\InclusionSetType;

/**
 * Class representing RatePlansAType
 */
class RatePlansAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\IncludedRatePlanType[] $ratePlan
     */
    private $ratePlan = null;

    /**
     * Adds as ratePlan
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\IncludedRatePlanType $ratePlan
     */
    public function addToRatePlan(\Davispeixoto\OpenTravelAlliance\IncludedRatePlanType $ratePlan)
    {
        $this->ratePlan[] = $ratePlan;

        return $this;
    }

    /**
     * isset ratePlan
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
     * @return \Davispeixoto\OpenTravelAlliance\IncludedRatePlanType[]
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }

    /**
     * Sets a new ratePlan
     *
     * @param \Davispeixoto\OpenTravelAlliance\IncludedRatePlanType[] $ratePlan
     * @return self
     */
    public function setRatePlan(array $ratePlan)
    {
        $this->ratePlan = $ratePlan;

        return $this;
    }


}

