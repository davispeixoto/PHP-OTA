<?php

namespace Davispeixoto\OpenTravelAlliance\RoomStayLiteType;

/**
 * Class representing RatePlansAType
 */
class RatePlansAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\RatePlanLiteType[] $ratePlan
     */
    private $ratePlan = null;

    /**
     * Adds as ratePlan
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RatePlanLiteType $ratePlan
     */
    public function addToRatePlan(\Davispeixoto\OpenTravelAlliance\RatePlanLiteType $ratePlan)
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
     * @return \Davispeixoto\OpenTravelAlliance\RatePlanLiteType[]
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }

    /**
     * Sets a new ratePlan
     *
     * @param \Davispeixoto\OpenTravelAlliance\RatePlanLiteType[] $ratePlan
     * @return self
     */
    public function setRatePlan(array $ratePlan)
    {
        $this->ratePlan = $ratePlan;

        return $this;
    }


}

