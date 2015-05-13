<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ;

use Davispeixoto\OpenTravelAlliance\UniqueIDType;

/**
 * Class representing RequestorAType
 */
class RequestorAType extends UniqueIDType
{

    /**
     * When true, indicates that this party is someone other than the requestor and
     * should also receive the post event report (i.e., a HotelPostEventNotifRQ should
     * be sent to this party).
     *
     * @property boolean $secondaryRoutingIndicator
     */
    private $secondaryRoutingIndicator = null;

    /**
     * Identifies the type of requestor so the response can be filtered appropriately.
     *
     * @property string $requestorType
     */
    private $requestorType = null;

    /**
     * Gets as secondaryRoutingIndicator
     *
     * When true, indicates that this party is someone other than the requestor and
     * should also receive the post event report (i.e., a HotelPostEventNotifRQ should
     * be sent to this party).
     *
     * @return boolean
     */
    public function getSecondaryRoutingIndicator()
    {
        return $this->secondaryRoutingIndicator;
    }

    /**
     * Sets a new secondaryRoutingIndicator
     *
     * When true, indicates that this party is someone other than the requestor and
     * should also receive the post event report (i.e., a HotelPostEventNotifRQ should
     * be sent to this party).
     *
     * @param boolean $secondaryRoutingIndicator
     * @return self
     */
    public function setSecondaryRoutingIndicator($secondaryRoutingIndicator)
    {
        $this->secondaryRoutingIndicator = $secondaryRoutingIndicator;

        return $this;
    }

    /**
     * Gets as requestorType
     *
     * Identifies the type of requestor so the response can be filtered appropriately.
     *
     * @return string
     */
    public function getRequestorType()
    {
        return $this->requestorType;
    }

    /**
     * Sets a new requestorType
     *
     * Identifies the type of requestor so the response can be filtered appropriately.
     *
     * @param string $requestorType
     * @return self
     */
    public function setRequestorType($requestorType)
    {
        $this->requestorType = $requestorType;

        return $this;
    }


}

