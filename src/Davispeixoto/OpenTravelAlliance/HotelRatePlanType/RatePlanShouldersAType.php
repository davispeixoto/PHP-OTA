<?php

namespace Davispeixoto\OpenTravelAlliance\HotelRatePlanType;

/**
 * Class representing RatePlanShouldersAType
 */
class RatePlanShouldersAType
{

    /**
     * The Rate Plan Shoulder defines the allowable dates and where to take inventory
     * during the shoulder seasons for this rate plan.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\RatePlanShouldersAType\RatePlanShoulderAType[]
     * $ratePlanShoulder
     */
    private $ratePlanShoulder = null;

    /**
     * Adds as ratePlanShoulder
     *
     * The Rate Plan Shoulder defines the allowable dates and where to take inventory
     * during the shoulder seasons for this rate plan.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\RatePlanShouldersAType\RatePlanShoulderAType
     * $ratePlanShoulder
     */
    public function addToRatePlanShoulder(
        \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\RatePlanShouldersAType\RatePlanShoulderAType $ratePlanShoulder
    ) {
        $this->ratePlanShoulder[] = $ratePlanShoulder;

        return $this;
    }

    /**
     * isset ratePlanShoulder
     *
     * The Rate Plan Shoulder defines the allowable dates and where to take inventory
     * during the shoulder seasons for this rate plan.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRatePlanShoulder($index)
    {
        return isset($this->ratePlanShoulder[$index]);
    }

    /**
     * unset ratePlanShoulder
     *
     * The Rate Plan Shoulder defines the allowable dates and where to take inventory
     * during the shoulder seasons for this rate plan.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRatePlanShoulder($index)
    {
        unset($this->ratePlanShoulder[$index]);
    }

    /**
     * Gets as ratePlanShoulder
     *
     * The Rate Plan Shoulder defines the allowable dates and where to take inventory
     * during the shoulder seasons for this rate plan.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\RatePlanShouldersAType\RatePlanShoulderAType[]
     */
    public function getRatePlanShoulder()
    {
        return $this->ratePlanShoulder;
    }

    /**
     * Sets a new ratePlanShoulder
     *
     * The Rate Plan Shoulder defines the allowable dates and where to take inventory
     * during the shoulder seasons for this rate plan.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\RatePlanShouldersAType\RatePlanShoulderAType[]
     * $ratePlanShoulder
     * @return self
     */
    public function setRatePlanShoulder(array $ratePlanShoulder)
    {
        $this->ratePlanShoulder = $ratePlanShoulder;

        return $this;
    }


}

