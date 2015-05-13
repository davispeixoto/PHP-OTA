<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LocationsAType\StopsAType;

use Davispeixoto\OpenTravelAlliance\GroundLocationType;

/**
 * Class representing StopAType
 */
class StopAType extends GroundLocationType
{

    /**
     * A sequence number for the stop.
     *
     * @property integer $sequence
     */
    private $sequence = null;

    /**
     * Gets as sequence
     *
     * A sequence number for the stop.
     *
     * @return integer
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * A sequence number for the stop.
     *
     * @param integer $sequence
     * @return self
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }


}

