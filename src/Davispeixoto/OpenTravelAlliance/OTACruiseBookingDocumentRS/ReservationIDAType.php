<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseBookingDocumentRS;

use Davispeixoto\OpenTravelAlliance\UniqueIDType;

/**
 * Class representing ReservationIDAType
 */
class ReservationIDAType extends UniqueIDType
{

    /**
     * Specifies the Syncronization date of the record between GDS and CruiseLine.
     *
     * @property \DateTime $syncDateTime
     */
    private $syncDateTime = null;

    /**
     * Gets as syncDateTime
     *
     * Specifies the Syncronization date of the record between GDS and CruiseLine.
     *
     * @return \DateTime
     */
    public function getSyncDateTime()
    {
        return $this->syncDateTime;
    }

    /**
     * Sets a new syncDateTime
     *
     * Specifies the Syncronization date of the record between GDS and CruiseLine.
     *
     * @param \DateTime $syncDateTime
     * @return self
     */
    public function setSyncDateTime(\DateTime $syncDateTime)
    {
        $this->syncDateTime = $syncDateTime;

        return $this;
    }


}

