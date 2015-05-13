<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanNotifRS;

/**
 * Class representing RatePlanCrossRefsAType
 */
class RatePlanCrossRefsAType
{

    /**
     * Cross Reference between sending system and responding system Rate Plan Codes.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanNotifRS\RatePlanCrossRefsAType\RatePlanCrossRefAType[]
     * $ratePlanCrossRef
     */
    private $ratePlanCrossRef = null;

    /**
     * Adds as ratePlanCrossRef
     *
     * Cross Reference between sending system and responding system Rate Plan Codes.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanNotifRS\RatePlanCrossRefsAType\RatePlanCrossRefAType
     * $ratePlanCrossRef
     */
    public function addToRatePlanCrossRef(
        \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanNotifRS\RatePlanCrossRefsAType\RatePlanCrossRefAType $ratePlanCrossRef
    ) {
        $this->ratePlanCrossRef[] = $ratePlanCrossRef;

        return $this;
    }

    /**
     * isset ratePlanCrossRef
     *
     * Cross Reference between sending system and responding system Rate Plan Codes.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRatePlanCrossRef($index)
    {
        return isset($this->ratePlanCrossRef[$index]);
    }

    /**
     * unset ratePlanCrossRef
     *
     * Cross Reference between sending system and responding system Rate Plan Codes.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRatePlanCrossRef($index)
    {
        unset($this->ratePlanCrossRef[$index]);
    }

    /**
     * Gets as ratePlanCrossRef
     *
     * Cross Reference between sending system and responding system Rate Plan Codes.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanNotifRS\RatePlanCrossRefsAType\RatePlanCrossRefAType[]
     */
    public function getRatePlanCrossRef()
    {
        return $this->ratePlanCrossRef;
    }

    /**
     * Sets a new ratePlanCrossRef
     *
     * Cross Reference between sending system and responding system Rate Plan Codes.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanNotifRS\RatePlanCrossRefsAType\RatePlanCrossRefAType[]
     * $ratePlanCrossRef
     * @return self
     */
    public function setRatePlanCrossRef(array $ratePlanCrossRef)
    {
        $this->ratePlanCrossRef = $ratePlanCrossRef;

        return $this;
    }


}

