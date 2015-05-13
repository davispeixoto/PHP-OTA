<?php

namespace Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType;

/**
 * Class representing HotelRefsAType
 */
class HotelRefsAType
{

    /**
     * Information to identify one or more hotels.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\HotelRefsAType\HotelRefAType[]
     * $hotelRef
     */
    private $hotelRef = null;

    /**
     * Adds as hotelRef
     *
     * Information to identify one or more hotels.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\HotelRefsAType\HotelRefAType
     * $hotelRef
     */
    public function addToHotelRef(
        \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\HotelRefsAType\HotelRefAType $hotelRef
    ) {
        $this->hotelRef[] = $hotelRef;

        return $this;
    }

    /**
     * isset hotelRef
     *
     * Information to identify one or more hotels.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelRef($index)
    {
        return isset($this->hotelRef[$index]);
    }

    /**
     * unset hotelRef
     *
     * Information to identify one or more hotels.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelRef($index)
    {
        unset($this->hotelRef[$index]);
    }

    /**
     * Gets as hotelRef
     *
     * Information to identify one or more hotels.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\HotelRefsAType\HotelRefAType[]
     */
    public function getHotelRef()
    {
        return $this->hotelRef;
    }

    /**
     * Sets a new hotelRef
     *
     * Information to identify one or more hotels.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\HotelRefsAType\HotelRefAType[]
     * $hotelRef
     * @return self
     */
    public function setHotelRef(array $hotelRef)
    {
        $this->hotelRef = $hotelRef;

        return $this;
    }


}

