<?php

namespace Davispeixoto\OpenTravelAlliance\DestActivityResResponseItemType;

/**
 * Class representing ReservationItemReferencesAType
 */
class ReservationItemReferencesAType
{

    /**
     * The ReservationItemReference object contains various unique (ReservationID) and
     * non unique (ConfirmationID, CancellationID) identifiers that the trading
     * partners associate with a given reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     * $reservationItemReference
     */
    private $reservationItemReference = null;

    /**
     * Adds as reservationItemReference
     *
     * The ReservationItemReference object contains various unique (ReservationID) and
     * non unique (ConfirmationID, CancellationID) identifiers that the trading
     * partners associate with a given reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $reservationItemReference
     */
    public function addToReservationItemReference(
        \Davispeixoto\OpenTravelAlliance\UniqueIDType $reservationItemReference
    ) {
        $this->reservationItemReference[] = $reservationItemReference;

        return $this;
    }

    /**
     * isset reservationItemReference
     *
     * The ReservationItemReference object contains various unique (ReservationID) and
     * non unique (ConfirmationID, CancellationID) identifiers that the trading
     * partners associate with a given reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReservationItemReference($index)
    {
        return isset($this->reservationItemReference[$index]);
    }

    /**
     * unset reservationItemReference
     *
     * The ReservationItemReference object contains various unique (ReservationID) and
     * non unique (ConfirmationID, CancellationID) identifiers that the trading
     * partners associate with a given reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReservationItemReference($index)
    {
        unset($this->reservationItemReference[$index]);
    }

    /**
     * Gets as reservationItemReference
     *
     * The ReservationItemReference object contains various unique (ReservationID) and
     * non unique (ConfirmationID, CancellationID) identifiers that the trading
     * partners associate with a given reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getReservationItemReference()
    {
        return $this->reservationItemReference;
    }

    /**
     * Sets a new reservationItemReference
     *
     * The ReservationItemReference object contains various unique (ReservationID) and
     * non unique (ConfirmationID, CancellationID) identifiers that the trading
     * partners associate with a given reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $reservationItemReference
     * @return self
     */
    public function setReservationItemReference(array $reservationItemReference)
    {
        $this->reservationItemReference = $reservationItemReference;

        return $this;
    }


}

