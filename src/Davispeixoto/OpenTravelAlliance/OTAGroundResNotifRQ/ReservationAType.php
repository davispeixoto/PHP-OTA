<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundResNotifRQ;

use Davispeixoto\OpenTravelAlliance\GroundReservationType;

/**
 * Class representing ReservationAType
 */
class ReservationAType extends GroundReservationType
{

    /**
     * Internal notes exchanged between systems that are related to the reservation but
     * not displayed to a customer.
     *
     * @property string $internalNotes
     */
    private $internalNotes = null;

    /**
     * Gets as internalNotes
     *
     * Internal notes exchanged between systems that are related to the reservation but
     * not displayed to a customer.
     *
     * @return string
     */
    public function getInternalNotes()
    {
        return $this->internalNotes;
    }

    /**
     * Sets a new internalNotes
     *
     * Internal notes exchanged between systems that are related to the reservation but
     * not displayed to a customer.
     *
     * @param string $internalNotes
     * @return self
     */
    public function setInternalNotes($internalNotes)
    {
        $this->internalNotes = $internalNotes;

        return $this;
    }


}

