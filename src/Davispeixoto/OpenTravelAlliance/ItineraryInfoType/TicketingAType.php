<?php

namespace Davispeixoto\OpenTravelAlliance\ItineraryInfoType;

use Davispeixoto\OpenTravelAlliance\TicketingInfoRSType;

/**
 * Class representing TicketingAType
 */
class TicketingAType extends TicketingInfoRSType
{

    /**
     * @property string $platingCarrier
     */
    private $platingCarrier = null;

    /**
     * Gets as platingCarrier
     *
     * @return string
     */
    public function getPlatingCarrier()
    {
        return $this->platingCarrier;
    }

    /**
     * Sets a new platingCarrier
     *
     * @param string $platingCarrier
     * @return self
     */
    public function setPlatingCarrier($platingCarrier)
    {
        $this->platingCarrier = $platingCarrier;

        return $this;
    }


}

