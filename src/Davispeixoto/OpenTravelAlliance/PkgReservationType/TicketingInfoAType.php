<?php

namespace Davispeixoto\OpenTravelAlliance\PkgReservationType;

use Davispeixoto\OpenTravelAlliance\TicketingInfoRSType;

/**
 * Class representing TicketingInfoAType
 */
class TicketingInfoAType extends TicketingInfoRSType
{

    /**
     * When 'true', paper ticket(s) must be collected at the airport before departure.
     * Collection information will be set out in the 'TicketAdvisory' element.
     *
     * @property boolean $tODInd
     */
    private $tODInd = null;

    /**
     * Gets as tODInd
     *
     * When 'true', paper ticket(s) must be collected at the airport before departure.
     * Collection information will be set out in the 'TicketAdvisory' element.
     *
     * @return boolean
     */
    public function getTODInd()
    {
        return $this->tODInd;
    }

    /**
     * Sets a new tODInd
     *
     * When 'true', paper ticket(s) must be collected at the airport before departure.
     * Collection information will be set out in the 'TicketAdvisory' element.
     *
     * @param boolean $tODInd
     * @return self
     */
    public function setTODInd($tODInd)
    {
        $this->tODInd = $tODInd;

        return $this;
    }


}

