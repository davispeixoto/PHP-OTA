<?php

namespace Davispeixoto\OpenTravelAlliance\OTADestActivityResRS;

/**
 * Class representing ReservationReferencesAType
 */
class ReservationReferencesAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $reservationReference
     */
    private $reservationReference = null;

    /**
     * Adds as reservationReference
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $reservationReference
     */
    public function addToReservationReference(\Davispeixoto\OpenTravelAlliance\UniqueIDType $reservationReference)
    {
        $this->reservationReference[] = $reservationReference;

        return $this;
    }

    /**
     * isset reservationReference
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReservationReference($index)
    {
        return isset($this->reservationReference[$index]);
    }

    /**
     * unset reservationReference
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReservationReference($index)
    {
        unset($this->reservationReference[$index]);
    }

    /**
     * Gets as reservationReference
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getReservationReference()
    {
        return $this->reservationReference;
    }

    /**
     * Sets a new reservationReference
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $reservationReference
     * @return self
     */
    public function setReservationReference(array $reservationReference)
    {
        $this->reservationReference = $reservationReference;

        return $this;
    }


}

