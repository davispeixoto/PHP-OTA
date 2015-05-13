<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType;

/**
 * Class representing ReservationMethodAType
 */
class ReservationMethodAType
{

    /**
     * Identifies the type of reservation method to be used. Refer to OpenTravel Code
     * list Reservation Method Code (RMC).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as code
     *
     * Identifies the type of reservation method to be used. Refer to OpenTravel Code
     * list Reservation Method Code (RMC).
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Identifies the type of reservation method to be used. Refer to OpenTravel Code
     * list Reservation Method Code (RMC).
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }


}

