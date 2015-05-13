<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType;

use Davispeixoto\OpenTravelAlliance\GroundShuttleResType;

/**
 * Class representing ShuttleAType
 */
class ShuttleAType extends GroundShuttleResType
{

    /**
     * A reference to a passenger ID set in the Passenger element.
     *
     * @property string $passengerRPH
     */
    private $passengerRPH = null;

    /**
     * Gets as passengerRPH
     *
     * A reference to a passenger ID set in the Passenger element.
     *
     * @return string
     */
    public function getPassengerRPH()
    {
        return $this->passengerRPH;
    }

    /**
     * Sets a new passengerRPH
     *
     * A reference to a passenger ID set in the Passenger element.
     *
     * @param string $passengerRPH
     * @return self
     */
    public function setPassengerRPH($passengerRPH)
    {
        $this->passengerRPH = $passengerRPH;

        return $this;
    }


}

