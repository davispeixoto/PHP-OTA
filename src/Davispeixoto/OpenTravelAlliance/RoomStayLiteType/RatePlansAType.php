<?php

namespace Davispeixoto\OpenTravelAlliance\RoomStayLiteType;

use Davispeixoto\OpenTravelAlliance\RatePlanLiteType;

/**
 * Class representing RatePlansAType
 */
class RatePlansAType
{

    /**
     * @property RatePlanLiteType[] $ratePlan
     */
    private $ratePlan = null;

    /**
     * Adds as ratePlan
     *
     * @return self
     * @param RatePlanLiteType $ratePlan
     */
    public function addToRatePlan(RatePlanLiteType $ratePlan)
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
     * @return RatePlanLiteType[]
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }

    /**
     * Sets a new ratePlan
     *
     * @param RatePlanLiteType[] $ratePlan
     * @return self
     */
    public function setRatePlan(array $ratePlan)
    {
        $this->ratePlan = $ratePlan;

        return $this;
    }


}

