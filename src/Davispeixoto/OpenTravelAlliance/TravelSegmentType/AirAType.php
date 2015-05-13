<?php

namespace Davispeixoto\OpenTravelAlliance\TravelSegmentType;

/**
 * Class representing AirAType
 */
class AirAType
{

    /**
     * Flight reservation information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType\ReservationAType
     * $reservation
     */
    private $reservation = null;

    /**
     * Detailed flight reservation information identical to that returned in the OTA
     * air book response message.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirReservationType
     * $detailedReservation
     */
    private $detailedReservation = null;

    /**
     * Gets as reservation
     *
     * Flight reservation information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType\ReservationAType
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * Sets a new reservation
     *
     * Flight reservation information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType\ReservationAType
     * $reservation
     * @return self
     */
    public function setReservation(
        \Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType\ReservationAType $reservation
    ) {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Gets as detailedReservation
     *
     * Detailed flight reservation information identical to that returned in the OTA
     * air book response message.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirReservationType
     */
    public function getDetailedReservation()
    {
        return $this->detailedReservation;
    }

    /**
     * Sets a new detailedReservation
     *
     * Detailed flight reservation information identical to that returned in the OTA
     * air book response message.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirReservationType $detailedReservation
     * @return self
     */
    public function setDetailedReservation(\Davispeixoto\OpenTravelAlliance\AirReservationType $detailedReservation)
    {
        $this->detailedReservation = $detailedReservation;

        return $this;
    }


}

