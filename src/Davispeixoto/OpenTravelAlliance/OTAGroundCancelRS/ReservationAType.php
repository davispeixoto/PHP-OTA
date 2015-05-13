<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundCancelRS;

/**
 * Class representing ReservationAType
 */
class ReservationAType
{

    /**
     * Cancellation ID's and rules information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CancelInfoRSType $cancelConfirmation
     */
    private $cancelConfirmation = null;

    /**
     * Optional details about the cancelled reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGroundCancelRS\ReservationAType\ReservationInfoAType
     * $reservationInfo
     */
    private $reservationInfo = null;

    /**
     * Gets as cancelConfirmation
     *
     * Cancellation ID's and rules information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CancelInfoRSType
     */
    public function getCancelConfirmation()
    {
        return $this->cancelConfirmation;
    }

    /**
     * Sets a new cancelConfirmation
     *
     * Cancellation ID's and rules information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CancelInfoRSType $cancelConfirmation
     * @return self
     */
    public function setCancelConfirmation(\Davispeixoto\OpenTravelAlliance\CancelInfoRSType $cancelConfirmation)
    {
        $this->cancelConfirmation = $cancelConfirmation;

        return $this;
    }

    /**
     * Gets as reservationInfo
     *
     * Optional details about the cancelled reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGroundCancelRS\ReservationAType\ReservationInfoAType
     */
    public function getReservationInfo()
    {
        return $this->reservationInfo;
    }

    /**
     * Sets a new reservationInfo
     *
     * Optional details about the cancelled reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundCancelRS\ReservationAType\ReservationInfoAType
     * $reservationInfo
     * @return self
     */
    public function setReservationInfo(
        \Davispeixoto\OpenTravelAlliance\OTAGroundCancelRS\ReservationAType\ReservationInfoAType $reservationInfo
    ) {
        $this->reservationInfo = $reservationInfo;

        return $this;
    }


}

