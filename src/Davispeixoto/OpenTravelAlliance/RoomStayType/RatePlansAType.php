<?php

namespace Davispeixoto\OpenTravelAlliance\RoomStayType;

use Davispeixoto\OpenTravelAlliance\RatePlanType;

/**
 * Class representing RatePlansAType
 */
class RatePlansAType
{

    /**
     * @property RatePlanType[] $ratePlan
     */
    private $ratePlan = null;

    /**
     * Adds as ratePlan
     *
     * @return self
     * @param RatePlanType $ratePlan
     */
    public function addToRatePlan(RatePlanType $ratePlan)
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
     * @return RatePlanType[]
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }

    /**
     * Sets a new ratePlan
     *
     * @param RatePlanType[] $ratePlan
     * @return self
     */
    public function setRatePlan(array $ratePlan)
    {
        $this->ratePlan = $ratePlan;

        return $this;
    }


}

