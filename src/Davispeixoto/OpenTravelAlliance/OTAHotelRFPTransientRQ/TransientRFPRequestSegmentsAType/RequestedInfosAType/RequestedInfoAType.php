<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType;

/**
 * Class representing RequestedInfoAType
 */
class RequestedInfoAType
{

    /**
     * Used to identify information to be included in the response. Refer to OpenTravel
     * Code List Requested Info Code Category (RQC) code list.
     *
     * @property string $requestedInfoCode
     */
    private $requestedInfoCode = null;

    /**
     * A collection of specific information being requested.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType\SpecificRequestAType[]
     * $specificRequests
     */
    private $specificRequests = null;

    /**
     * Gets as requestedInfoCode
     *
     * Used to identify information to be included in the response. Refer to OpenTravel
     * Code List Requested Info Code Category (RQC) code list.
     *
     * @return string
     */
    public function getRequestedInfoCode()
    {
        return $this->requestedInfoCode;
    }

    /**
     * Sets a new requestedInfoCode
     *
     * Used to identify information to be included in the response. Refer to OpenTravel
     * Code List Requested Info Code Category (RQC) code list.
     *
     * @param string $requestedInfoCode
     * @return self
     */
    public function setRequestedInfoCode($requestedInfoCode)
    {
        $this->requestedInfoCode = $requestedInfoCode;

        return $this;
    }

    /**
     * Adds as specificRequest
     *
     * A collection of specific information being requested.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType\SpecificRequestAType
     * $specificRequest
     */
    public function addToSpecificRequests(
        \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType\SpecificRequestAType $specificRequest
    ) {
        $this->specificRequests[] = $specificRequest;

        return $this;
    }

    /**
     * isset specificRequests
     *
     * A collection of specific information being requested.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecificRequests($index)
    {
        return isset($this->specificRequests[$index]);
    }

    /**
     * unset specificRequests
     *
     * A collection of specific information being requested.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecificRequests($index)
    {
        unset($this->specificRequests[$index]);
    }

    /**
     * Gets as specificRequests
     *
     * A collection of specific information being requested.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType\SpecificRequestAType[]
     */
    public function getSpecificRequests()
    {
        return $this->specificRequests;
    }

    /**
     * Sets a new specificRequests
     *
     * A collection of specific information being requested.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType\SpecificRequestAType[]
     * $specificRequests
     * @return self
     */
    public function setSpecificRequests(array $specificRequests)
    {
        $this->specificRequests = $specificRequests;

        return $this;
    }


}

