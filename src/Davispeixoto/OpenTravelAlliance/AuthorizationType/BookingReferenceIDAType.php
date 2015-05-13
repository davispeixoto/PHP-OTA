<?php

namespace Davispeixoto\OpenTravelAlliance\AuthorizationType;

use Davispeixoto\OpenTravelAlliance\UniqueIDType;

/**
 * Class representing BookingReferenceIDAType
 */
class BookingReferenceIDAType extends UniqueIDType
{

    /**
     * When true, the PNR should not be updated with the authorization information
     * returned.
     *
     * @property boolean $ignoreReservationInd
     */
    private $ignoreReservationInd = null;

    /**
     * Gets as ignoreReservationInd
     *
     * When true, the PNR should not be updated with the authorization information
     * returned.
     *
     * @return boolean
     */
    public function getIgnoreReservationInd()
    {
        return $this->ignoreReservationInd;
    }

    /**
     * Sets a new ignoreReservationInd
     *
     * When true, the PNR should not be updated with the authorization information
     * returned.
     *
     * @param boolean $ignoreReservationInd
     * @return self
     */
    public function setIgnoreReservationInd($ignoreReservationInd)
    {
        $this->ignoreReservationInd = $ignoreReservationInd;

        return $this;
    }


}

