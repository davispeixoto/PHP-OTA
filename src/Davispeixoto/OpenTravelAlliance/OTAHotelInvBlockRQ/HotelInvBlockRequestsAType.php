<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockRQ;

/**
 * Class representing HotelInvBlockRequestsAType
 */
class HotelInvBlockRequestsAType
{

    /**
     * Provides the criteria to identify the date range, inventory blocks and hotels to
     * be returned.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockRQ\HotelInvBlockRequestsAType\HotelInvBlockRequestAType[]
     * $hotelInvBlockRequest
     */
    private $hotelInvBlockRequest = null;

    /**
     * Adds as hotelInvBlockRequest
     *
     * Provides the criteria to identify the date range, inventory blocks and hotels to
     * be returned.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockRQ\HotelInvBlockRequestsAType\HotelInvBlockRequestAType
     * $hotelInvBlockRequest
     */
    public function addToHotelInvBlockRequest(
        \Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockRQ\HotelInvBlockRequestsAType\HotelInvBlockRequestAType $hotelInvBlockRequest
    ) {
        $this->hotelInvBlockRequest[] = $hotelInvBlockRequest;

        return $this;
    }

    /**
     * isset hotelInvBlockRequest
     *
     * Provides the criteria to identify the date range, inventory blocks and hotels to
     * be returned.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelInvBlockRequest($index)
    {
        return isset($this->hotelInvBlockRequest[$index]);
    }

    /**
     * unset hotelInvBlockRequest
     *
     * Provides the criteria to identify the date range, inventory blocks and hotels to
     * be returned.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelInvBlockRequest($index)
    {
        unset($this->hotelInvBlockRequest[$index]);
    }

    /**
     * Gets as hotelInvBlockRequest
     *
     * Provides the criteria to identify the date range, inventory blocks and hotels to
     * be returned.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockRQ\HotelInvBlockRequestsAType\HotelInvBlockRequestAType[]
     */
    public function getHotelInvBlockRequest()
    {
        return $this->hotelInvBlockRequest;
    }

    /**
     * Sets a new hotelInvBlockRequest
     *
     * Provides the criteria to identify the date range, inventory blocks and hotels to
     * be returned.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockRQ\HotelInvBlockRequestsAType\HotelInvBlockRequestAType[]
     * $hotelInvBlockRequest
     * @return self
     */
    public function setHotelInvBlockRequest(array $hotelInvBlockRequest)
    {
        $this->hotelInvBlockRequest = $hotelInvBlockRequest;

        return $this;
    }


}

