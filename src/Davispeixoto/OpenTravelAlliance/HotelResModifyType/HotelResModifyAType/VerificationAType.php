<?php

namespace Davispeixoto\OpenTravelAlliance\HotelResModifyType\HotelResModifyAType;

use Davispeixoto\OpenTravelAlliance\VerificationType;

/**
 * Class representing VerificationAType
 */
class VerificationAType extends VerificationType
{

    /**
     * Premodification copy of the hotel reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\HotelReservationType
     * $currentStateReservation
     */
    private $currentStateReservation = null;

    /**
     * Gets as currentStateReservation
     *
     * Premodification copy of the hotel reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\HotelReservationType
     */
    public function getCurrentStateReservation()
    {
        return $this->currentStateReservation;
    }

    /**
     * Sets a new currentStateReservation
     *
     * Premodification copy of the hotel reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelReservationType
     * $currentStateReservation
     * @return self
     */
    public function setCurrentStateReservation(
        \Davispeixoto\OpenTravelAlliance\HotelReservationType $currentStateReservation
    ) {
        $this->currentStateReservation = $currentStateReservation;

        return $this;
    }


}

