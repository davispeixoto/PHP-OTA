<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ;

/**
 * Class representing HotelAvailRequestsAType
 */
class HotelAvailRequestsAType
{

    /**
     * Provides the criteria to specify availability details to return.The critiera can
     * include date ranges, room and products, rate plans, hurdle rate, etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType[]
     * $hotelAvailRequest
     */
    private $hotelAvailRequest = null;

    /**
     * Adds as hotelAvailRequest
     *
     * Provides the criteria to specify availability details to return.The critiera can
     * include date ranges, room and products, rate plans, hurdle rate, etc.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType
     * $hotelAvailRequest
     */
    public function addToHotelAvailRequest(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType $hotelAvailRequest
    ) {
        $this->hotelAvailRequest[] = $hotelAvailRequest;

        return $this;
    }

    /**
     * isset hotelAvailRequest
     *
     * Provides the criteria to specify availability details to return.The critiera can
     * include date ranges, room and products, rate plans, hurdle rate, etc.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelAvailRequest($index)
    {
        return isset($this->hotelAvailRequest[$index]);
    }

    /**
     * unset hotelAvailRequest
     *
     * Provides the criteria to specify availability details to return.The critiera can
     * include date ranges, room and products, rate plans, hurdle rate, etc.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelAvailRequest($index)
    {
        unset($this->hotelAvailRequest[$index]);
    }

    /**
     * Gets as hotelAvailRequest
     *
     * Provides the criteria to specify availability details to return.The critiera can
     * include date ranges, room and products, rate plans, hurdle rate, etc.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType[]
     */
    public function getHotelAvailRequest()
    {
        return $this->hotelAvailRequest;
    }

    /**
     * Sets a new hotelAvailRequest
     *
     * Provides the criteria to specify availability details to return.The critiera can
     * include date ranges, room and products, rate plans, hurdle rate, etc.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType[]
     * $hotelAvailRequest
     * @return self
     */
    public function setHotelAvailRequest(array $hotelAvailRequest)
    {
        $this->hotelAvailRequest = $hotelAvailRequest;

        return $this;
    }


}

