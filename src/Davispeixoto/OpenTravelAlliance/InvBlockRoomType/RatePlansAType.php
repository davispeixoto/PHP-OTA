<?php

namespace Davispeixoto\OpenTravelAlliance\InvBlockRoomType;

/**
 * Class representing RatePlansAType
 */
class RatePlansAType
{

    /**
     * This is a specific rate plan defined for a specific room type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\InvBlockRoomType\RatePlansAType\RatePlanAType[]
     * $ratePlan
     */
    private $ratePlan = null;

    /**
     * Adds as ratePlan
     *
     * This is a specific rate plan defined for a specific room type.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\InvBlockRoomType\RatePlansAType\RatePlanAType
     * $ratePlan
     */
    public function addToRatePlan(
        \Davispeixoto\OpenTravelAlliance\InvBlockRoomType\RatePlansAType\RatePlanAType $ratePlan
    ) {
        $this->ratePlan[] = $ratePlan;

        return $this;
    }

    /**
     * isset ratePlan
     *
     * This is a specific rate plan defined for a specific room type.
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
     * This is a specific rate plan defined for a specific room type.
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
     * This is a specific rate plan defined for a specific room type.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\InvBlockRoomType\RatePlansAType\RatePlanAType[]
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }

    /**
     * Sets a new ratePlan
     *
     * This is a specific rate plan defined for a specific room type.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\InvBlockRoomType\RatePlansAType\RatePlanAType[]
     * $ratePlan
     * @return self
     */
    public function setRatePlan(array $ratePlan)
    {
        $this->ratePlan = $ratePlan;

        return $this;
    }


}

