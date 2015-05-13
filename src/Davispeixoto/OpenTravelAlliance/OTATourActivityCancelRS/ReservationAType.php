<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS;

/**
 * Class representing ReservationAType
 */
class ReservationAType
{

    /**
     * Cancellation ID's, rules and charge information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CancelInfoRSType $cancelConfirmation
     */
    private $cancelConfirmation = null;

    /**
     * A reference ID that was returned in the booking confirmation message and
     * uniquely identifies this reservation to the trading partner.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $referenceID
     */
    private $referenceID = null;

    /**
     * Information about the booked tour and/or activity.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType
     * $reservationInfo
     */
    private $reservationInfo = null;

    /**
     * Gets as cancelConfirmation
     *
     * Cancellation ID's, rules and charge information.
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
     * Cancellation ID's, rules and charge information.
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
     * Gets as referenceID
     *
     * A reference ID that was returned in the booking confirmation message and
     * uniquely identifies this reservation to the trading partner.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getReferenceID()
    {
        return $this->referenceID;
    }

    /**
     * Sets a new referenceID
     *
     * A reference ID that was returned in the booking confirmation message and
     * uniquely identifies this reservation to the trading partner.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $referenceID
     * @return self
     */
    public function setReferenceID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $referenceID)
    {
        $this->referenceID = $referenceID;

        return $this;
    }

    /**
     * Gets as reservationInfo
     *
     * Information about the booked tour and/or activity.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType
     */
    public function getReservationInfo()
    {
        return $this->reservationInfo;
    }

    /**
     * Sets a new reservationInfo
     *
     * Information about the booked tour and/or activity.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType
     * $reservationInfo
     * @return self
     */
    public function setReservationInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType $reservationInfo
    ) {
        $this->reservationInfo = $reservationInfo;

        return $this;
    }


}

