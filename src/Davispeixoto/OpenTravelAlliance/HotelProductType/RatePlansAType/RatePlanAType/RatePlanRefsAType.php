<?php

namespace Davispeixoto\OpenTravelAlliance\HotelProductType\RatePlansAType\RatePlanAType;

/**
 * Class representing RatePlanRefsAType
 */
class RatePlanRefsAType
{

    /**
     * Specifies the rate plan code for other systems.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RatePlansAType\RatePlanAType\RatePlanRefsAType\RatePlanRefAType[]
     * $ratePlanRef
     */
    private $ratePlanRef = null;

    /**
     * Adds as ratePlanRef
     *
     * Specifies the rate plan code for other systems.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RatePlansAType\RatePlanAType\RatePlanRefsAType\RatePlanRefAType
     * $ratePlanRef
     */
    public function addToRatePlanRef(
        \Davispeixoto\OpenTravelAlliance\HotelProductType\RatePlansAType\RatePlanAType\RatePlanRefsAType\RatePlanRefAType $ratePlanRef
    ) {
        $this->ratePlanRef[] = $ratePlanRef;

        return $this;
    }

    /**
     * isset ratePlanRef
     *
     * Specifies the rate plan code for other systems.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRatePlanRef($index)
    {
        return isset($this->ratePlanRef[$index]);
    }

    /**
     * unset ratePlanRef
     *
     * Specifies the rate plan code for other systems.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRatePlanRef($index)
    {
        unset($this->ratePlanRef[$index]);
    }

    /**
     * Gets as ratePlanRef
     *
     * Specifies the rate plan code for other systems.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RatePlansAType\RatePlanAType\RatePlanRefsAType\RatePlanRefAType[]
     */
    public function getRatePlanRef()
    {
        return $this->ratePlanRef;
    }

    /**
     * Sets a new ratePlanRef
     *
     * Specifies the rate plan code for other systems.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RatePlansAType\RatePlanAType\RatePlanRefsAType\RatePlanRefAType[]
     * $ratePlanRef
     * @return self
     */
    public function setRatePlanRef(array $ratePlanRef)
    {
        $this->ratePlanRef = $ratePlanRef;

        return $this;
    }


}

