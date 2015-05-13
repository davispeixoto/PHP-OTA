<?php

namespace Davispeixoto\OpenTravelAlliance\GroundShuttleResType;

use Davispeixoto\OpenTravelAlliance\GroundLocationType;

/**
 * Class representing ServiceLocationAType
 */
class ServiceLocationAType extends GroundLocationType
{

    /**
     * If true, this is the location where passengers will be picked up and/or board.
     *
     * @property boolean $originInd
     */
    private $originInd = null;

    /**
     * If true, this is the location where passengers where be dropped off and/or
     * depart the shuttle.
     *
     * @property boolean $destinationInd
     */
    private $destinationInd = null;

    /**
     * Gets as originInd
     *
     * If true, this is the location where passengers will be picked up and/or board.
     *
     * @return boolean
     */
    public function getOriginInd()
    {
        return $this->originInd;
    }

    /**
     * Sets a new originInd
     *
     * If true, this is the location where passengers will be picked up and/or board.
     *
     * @param boolean $originInd
     * @return self
     */
    public function setOriginInd($originInd)
    {
        $this->originInd = $originInd;

        return $this;
    }

    /**
     * Gets as destinationInd
     *
     * If true, this is the location where passengers where be dropped off and/or
     * depart the shuttle.
     *
     * @return boolean
     */
    public function getDestinationInd()
    {
        return $this->destinationInd;
    }

    /**
     * Sets a new destinationInd
     *
     * If true, this is the location where passengers where be dropped off and/or
     * depart the shuttle.
     *
     * @param boolean $destinationInd
     * @return self
     */
    public function setDestinationInd($destinationInd)
    {
        $this->destinationInd = $destinationInd;

        return $this;
    }


}

