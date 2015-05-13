<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailReadRQ;

/**
 * Class representing ReadRequestsAType
 */
class ReadRequestsAType
{

    /**
     * A request to read a reservation when the booking reference is known.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailReadRQ\ReadRequestsAType\ReadRequestAType[]
     * $readRequest
     */
    private $readRequest = null;

    /**
     * To retrieve a rail reservation when the booking reference is not known by
     * specifying point of sale, train, traveler or booking/departure date and time
     * criteria.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailReadRQ\ReadRequestsAType\ReadRequestByParameterAType[]
     * $readRequestByParameter
     */
    private $readRequestByParameter = null;

    /**
     * Adds as readRequest
     *
     * A request to read a reservation when the booking reference is known.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailReadRQ\ReadRequestsAType\ReadRequestAType
     * $readRequest
     */
    public function addToReadRequest(
        \Davispeixoto\OpenTravelAlliance\OTARailReadRQ\ReadRequestsAType\ReadRequestAType $readRequest
    ) {
        $this->readRequest[] = $readRequest;

        return $this;
    }

    /**
     * isset readRequest
     *
     * A request to read a reservation when the booking reference is known.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReadRequest($index)
    {
        return isset($this->readRequest[$index]);
    }

    /**
     * unset readRequest
     *
     * A request to read a reservation when the booking reference is known.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReadRequest($index)
    {
        unset($this->readRequest[$index]);
    }

    /**
     * Gets as readRequest
     *
     * A request to read a reservation when the booking reference is known.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailReadRQ\ReadRequestsAType\ReadRequestAType[]
     */
    public function getReadRequest()
    {
        return $this->readRequest;
    }

    /**
     * Sets a new readRequest
     *
     * A request to read a reservation when the booking reference is known.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailReadRQ\ReadRequestsAType\ReadRequestAType[]
     * $readRequest
     * @return self
     */
    public function setReadRequest(array $readRequest)
    {
        $this->readRequest = $readRequest;

        return $this;
    }

    /**
     * Adds as readRequestByParameter
     *
     * To retrieve a rail reservation when the booking reference is not known by
     * specifying point of sale, train, traveler or booking/departure date and time
     * criteria.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailReadRQ\ReadRequestsAType\ReadRequestByParameterAType
     * $readRequestByParameter
     */
    public function addToReadRequestByParameter(
        \Davispeixoto\OpenTravelAlliance\OTARailReadRQ\ReadRequestsAType\ReadRequestByParameterAType $readRequestByParameter
    ) {
        $this->readRequestByParameter[] = $readRequestByParameter;

        return $this;
    }

    /**
     * isset readRequestByParameter
     *
     * To retrieve a rail reservation when the booking reference is not known by
     * specifying point of sale, train, traveler or booking/departure date and time
     * criteria.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReadRequestByParameter($index)
    {
        return isset($this->readRequestByParameter[$index]);
    }

    /**
     * unset readRequestByParameter
     *
     * To retrieve a rail reservation when the booking reference is not known by
     * specifying point of sale, train, traveler or booking/departure date and time
     * criteria.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReadRequestByParameter($index)
    {
        unset($this->readRequestByParameter[$index]);
    }

    /**
     * Gets as readRequestByParameter
     *
     * To retrieve a rail reservation when the booking reference is not known by
     * specifying point of sale, train, traveler or booking/departure date and time
     * criteria.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailReadRQ\ReadRequestsAType\ReadRequestByParameterAType[]
     */
    public function getReadRequestByParameter()
    {
        return $this->readRequestByParameter;
    }

    /**
     * Sets a new readRequestByParameter
     *
     * To retrieve a rail reservation when the booking reference is not known by
     * specifying point of sale, train, traveler or booking/departure date and time
     * criteria.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailReadRQ\ReadRequestsAType\ReadRequestByParameterAType[]
     * $readRequestByParameter
     * @return self
     */
    public function setReadRequestByParameter(array $readRequestByParameter)
    {
        $this->readRequestByParameter = $readRequestByParameter;

        return $this;
    }


}

