<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType;

/**
 * Class representing EndorsementAType
 */
class EndorsementAType
{

    /**
     * Specifies the endorsement information for the ticket to be issued.
     *
     * @property string $info
     */
    private $info = null;

    /**
     * Gets as info
     *
     * Specifies the endorsement information for the ticket to be issued.
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * Specifies the endorsement information for the ticket to be issued.
     *
     * @param string $info
     * @return self
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }


}

