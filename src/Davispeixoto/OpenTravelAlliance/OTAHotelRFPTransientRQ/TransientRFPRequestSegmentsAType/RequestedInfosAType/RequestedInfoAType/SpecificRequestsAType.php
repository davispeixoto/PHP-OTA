<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType;

/**
 * Class representing SpecificRequestsAType
 */
class SpecificRequestsAType
{

    /**
     * Used to request specific information within the response.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType\SpecificRequestAType[]
     * $specificRequest
     */
    private $specificRequest = null;

    /**
     * Adds as specificRequest
     *
     * Used to request specific information within the response.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType\SpecificRequestAType
     * $specificRequest
     */
    public function addToSpecificRequest(
        \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType\SpecificRequestAType $specificRequest
    ) {
        $this->specificRequest[] = $specificRequest;

        return $this;
    }

    /**
     * isset specificRequest
     *
     * Used to request specific information within the response.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecificRequest($index)
    {
        return isset($this->specificRequest[$index]);
    }

    /**
     * unset specificRequest
     *
     * Used to request specific information within the response.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecificRequest($index)
    {
        unset($this->specificRequest[$index]);
    }

    /**
     * Gets as specificRequest
     *
     * Used to request specific information within the response.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType\SpecificRequestAType[]
     */
    public function getSpecificRequest()
    {
        return $this->specificRequest;
    }

    /**
     * Sets a new specificRequest
     *
     * Used to request specific information within the response.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType\SpecificRequestAType[]
     * $specificRequest
     * @return self
     */
    public function setSpecificRequest(array $specificRequest)
    {
        $this->specificRequest = $specificRequest;

        return $this;
    }


}

