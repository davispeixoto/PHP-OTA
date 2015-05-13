<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ;

/**
 * Class representing ReservationsAType
 */
class ReservationsAType
{

    /**
     * The count of items being sent in this message.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * All the detail information for a reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType[]
     * $reservation
     */
    private $reservation = null;

    /**
     * Gets as quantity
     *
     * The count of items being sent in this message.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The count of items being sent in this message.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Adds as reservation
     *
     * All the detail information for a reservation.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType
     * $reservation
     */
    public function addToReservation(
        \Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType $reservation
    ) {
        $this->reservation[] = $reservation;

        return $this;
    }

    /**
     * isset reservation
     *
     * All the detail information for a reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReservation($index)
    {
        return isset($this->reservation[$index]);
    }

    /**
     * unset reservation
     *
     * All the detail information for a reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReservation($index)
    {
        unset($this->reservation[$index]);
    }

    /**
     * Gets as reservation
     *
     * All the detail information for a reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType[]
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * Sets a new reservation
     *
     * All the detail information for a reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType[]
     * $reservation
     * @return self
     */
    public function setReservation(array $reservation)
    {
        $this->reservation = $reservation;

        return $this;
    }


}

