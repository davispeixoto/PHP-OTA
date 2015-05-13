<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType;

/**
 * Class representing RatePlansAType
 */
class RatePlansAType
{

    /**
     * RatePlan MUST specify the details of an available rate plan.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType[]
     * $ratePlan
     */
    private $ratePlan = null;

    /**
     * Adds as ratePlan
     *
     * RatePlan MUST specify the details of an available rate plan.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType
     * $ratePlan
     */
    public function addToRatePlan(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType $ratePlan
    ) {
        $this->ratePlan[] = $ratePlan;

        return $this;
    }

    /**
     * isset ratePlan
     *
     * RatePlan MUST specify the details of an available rate plan.
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
     * RatePlan MUST specify the details of an available rate plan.
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
     * RatePlan MUST specify the details of an available rate plan.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType[]
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }

    /**
     * Sets a new ratePlan
     *
     * RatePlan MUST specify the details of an available rate plan.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType[]
     * $ratePlan
     * @return self
     */
    public function setRatePlan(array $ratePlan)
    {
        $this->ratePlan = $ratePlan;

        return $this;
    }


}

