<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ReadRequestsType
 *
 * A collection of reservation confirmation number and the guest's last name to
 * retrieve a reservation.
 * XSD Type: ReadRequestsType
 */
class ReadRequestsType
{

    /**
     * ReadRequest specifies the reservation confirmation number and the guest's last
     * name to retrieve a reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ReadRequestType $readRequest
     */
    private $readRequest = null;

    /**
     * Gets as readRequest
     *
     * ReadRequest specifies the reservation confirmation number and the guest's last
     * name to retrieve a reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ReadRequestType
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
     * @param \Davispeixoto\OpenTravelAlliance\ReadRequestType $readRequest
     * @return self
     */
    public function setReadRequest(\Davispeixoto\OpenTravelAlliance\ReadRequestType $readRequest)
    {
        $this->readRequest = $readRequest;

        return $this;
    }


}

