<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ;

/**
 * Class representing HotelInvCountRequestsAType
 */
class HotelInvCountRequestsAType
{

    /**
     * Provides the criteria to identify the date range and room type inventory to be
     * returned.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType[]
     * $hotelInvCountRequest
     */
    private $hotelInvCountRequest = null;

    /**
     * Adds as hotelInvCountRequest
     *
     * Provides the criteria to identify the date range and room type inventory to be
     * returned.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType
     * $hotelInvCountRequest
     */
    public function addToHotelInvCountRequest(
        \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType $hotelInvCountRequest
    ) {
        $this->hotelInvCountRequest[] = $hotelInvCountRequest;

        return $this;
    }

    /**
     * isset hotelInvCountRequest
     *
     * Provides the criteria to identify the date range and room type inventory to be
     * returned.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelInvCountRequest($index)
    {
        return isset($this->hotelInvCountRequest[$index]);
    }

    /**
     * unset hotelInvCountRequest
     *
     * Provides the criteria to identify the date range and room type inventory to be
     * returned.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelInvCountRequest($index)
    {
        unset($this->hotelInvCountRequest[$index]);
    }

    /**
     * Gets as hotelInvCountRequest
     *
     * Provides the criteria to identify the date range and room type inventory to be
     * returned.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType[]
     */
    public function getHotelInvCountRequest()
    {
        return $this->hotelInvCountRequest;
    }

    /**
     * Sets a new hotelInvCountRequest
     *
     * Provides the criteria to identify the date range and room type inventory to be
     * returned.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType[]
     * $hotelInvCountRequest
     * @return self
     */
    public function setHotelInvCountRequest(array $hotelInvCountRequest)
    {
        $this->hotelInvCountRequest = $hotelInvCountRequest;

        return $this;
    }


}

