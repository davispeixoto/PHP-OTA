<?php

namespace Davispeixoto\OpenTravelAlliance\OTAReadRQ;

/**
 * Class representing ReadRequestsAType
 */
class ReadRequestsAType
{

    /**
     * ReadRequest specifies the reservation confirmation number and the guest's last
     * name to retrieve a reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\ReadRequestAType
     * $readRequest
     */
    private $readRequest = null;

    /**
     * Gets as readRequest
     *
     * ReadRequest specifies the reservation confirmation number and the guest's last
     * name to retrieve a reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\ReadRequestAType
     */
    public function getReadRequest()
    {
        return $this->readRequest;
    }

    /**
     * Sets a new readRequest
     *
     * ReadRequest specifies the reservation confirmation number and the guest's last
     * name to retrieve a reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\ReadRequestAType
     * $readRequest
     * @return self
     */
    public function setReadRequest(
        \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\ReadRequestAType $readRequest
    ) {
        $this->readRequest = $readRequest;

        return $this;
    }


}

