<?php

namespace Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType;

/**
 * Class representing SpecialServiceRequestsAType
 */
class SpecialServiceRequestsAType
{

    /**
     * Special Service Requests (SSR) for this booking.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SpecialServiceRequestsAType\SpecialServiceRequestAType[]
     * $specialServiceRequest
     */
    private $specialServiceRequest = null;

    /**
     * Adds as specialServiceRequest
     *
     * Special Service Requests (SSR) for this booking.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SpecialServiceRequestsAType\SpecialServiceRequestAType
     * $specialServiceRequest
     */
    public function addToSpecialServiceRequest(
        \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SpecialServiceRequestsAType\SpecialServiceRequestAType $specialServiceRequest
    ) {
        $this->specialServiceRequest[] = $specialServiceRequest;

        return $this;
    }

    /**
     * isset specialServiceRequest
     *
     * Special Service Requests (SSR) for this booking.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialServiceRequest($index)
    {
        return isset($this->specialServiceRequest[$index]);
    }

    /**
     * unset specialServiceRequest
     *
     * Special Service Requests (SSR) for this booking.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialServiceRequest($index)
    {
        unset($this->specialServiceRequest[$index]);
    }

    /**
     * Gets as specialServiceRequest
     *
     * Special Service Requests (SSR) for this booking.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SpecialServiceRequestsAType\SpecialServiceRequestAType[]
     */
    public function getSpecialServiceRequest()
    {
        return $this->specialServiceRequest;
    }

    /**
     * Sets a new specialServiceRequest
     *
     * Special Service Requests (SSR) for this booking.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SpecialServiceRequestsAType\SpecialServiceRequestAType[]
     * $specialServiceRequest
     * @return self
     */
    public function setSpecialServiceRequest(array $specialServiceRequest)
    {
        $this->specialServiceRequest = $specialServiceRequest;

        return $this;
    }


}

