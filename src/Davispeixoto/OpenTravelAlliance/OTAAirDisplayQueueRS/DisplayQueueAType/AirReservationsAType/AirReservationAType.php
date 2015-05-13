<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\AirReservationsAType;

use Davispeixoto\OpenTravelAlliance\AirReservationType;

/**
 * Class representing AirReservationAType
 */
class AirReservationAType extends AirReservationType
{

    /**
     * Identifies the reason and method for queuing.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\AirReservationsAType\AirReservationAType\ReasonAType
     * $reason
     */
    private $reason = null;

    /**
     * Gets as reason
     *
     * Identifies the reason and method for queuing.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\AirReservationsAType\AirReservationAType\ReasonAType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * Identifies the reason and method for queuing.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\AirReservationsAType\AirReservationAType\ReasonAType
     * $reason
     * @return self
     */
    public function setReason(
        \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\AirReservationsAType\AirReservationAType\ReasonAType $reason
    ) {
        $this->reason = $reason;

        return $this;
    }


}

