<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType;

/**
 * Class representing CancelPenaltyAType
 */
class CancelPenaltyAType
{

    /**
     * Deadline MUST specify the cancellation deadline.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType\DeadlineAType
     * $deadline
     */
    private $deadline = null;

    /**
     * AmountPercent MUST identify the cancellation fee that will be applied if the
     * reservation is cancelled after the Deadline.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType\AmountPercentAType
     * $amountPercent
     */
    private $amountPercent = null;

    /**
     * The PenaltyDescription MUST provide textual information regarding the
     * cancellation penalty.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType\PenaltyDescriptionAType
     * $penaltyDescription
     */
    private $penaltyDescription = null;

    /**
     * Gets as deadline
     *
     * Deadline MUST specify the cancellation deadline.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType\DeadlineAType
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Sets a new deadline
     *
     * Deadline MUST specify the cancellation deadline.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType\DeadlineAType
     * $deadline
     * @return self
     */
    public function setDeadline(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType\DeadlineAType $deadline
    ) {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Gets as amountPercent
     *
     * AmountPercent MUST identify the cancellation fee that will be applied if the
     * reservation is cancelled after the Deadline.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType\AmountPercentAType
     */
    public function getAmountPercent()
    {
        return $this->amountPercent;
    }

    /**
     * Sets a new amountPercent
     *
     * AmountPercent MUST identify the cancellation fee that will be applied if the
     * reservation is cancelled after the Deadline.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType\AmountPercentAType
     * $amountPercent
     * @return self
     */
    public function setAmountPercent(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType\AmountPercentAType $amountPercent
    ) {
        $this->amountPercent = $amountPercent;

        return $this;
    }

    /**
     * Gets as penaltyDescription
     *
     * The PenaltyDescription MUST provide textual information regarding the
     * cancellation penalty.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType\PenaltyDescriptionAType
     */
    public function getPenaltyDescription()
    {
        return $this->penaltyDescription;
    }

    /**
     * Sets a new penaltyDescription
     *
     * The PenaltyDescription MUST provide textual information regarding the
     * cancellation penalty.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType\PenaltyDescriptionAType
     * $penaltyDescription
     * @return self
     */
    public function setPenaltyDescription(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType\PenaltyDescriptionAType $penaltyDescription
    ) {
        $this->penaltyDescription = $penaltyDescription;

        return $this;
    }


}

