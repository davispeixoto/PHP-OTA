<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType;

/**
 * Class representing CancelPenaltyAType
 */
class CancelPenaltyAType
{

    /**
     * Deadline MUST specify the cancellation deadline.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType\DeadlineAType
     * $deadline
     */
    private $deadline = null;

    /**
     * AmountPercent MUST identify the cancellation fee that will be applied if the
     * reservation is cancelled after the Deadline.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType\AmountPercentAType
     * $amountPercent
     */
    private $amountPercent = null;

    /**
     * The PenaltyDescription MUST provide textual information regarding the
     * cancellation penalty.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType\PenaltyDescriptionAType
     * $penaltyDescription
     */
    private $penaltyDescription = null;

    /**
     * Gets as deadline
     *
     * Deadline MUST specify the cancellation deadline.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType\DeadlineAType
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType\DeadlineAType
     * $deadline
     * @return self
     */
    public function setDeadline(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType\DeadlineAType $deadline
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType\AmountPercentAType
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType\AmountPercentAType
     * $amountPercent
     * @return self
     */
    public function setAmountPercent(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType\AmountPercentAType $amountPercent
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType\PenaltyDescriptionAType
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType\PenaltyDescriptionAType
     * $penaltyDescription
     * @return self
     */
    public function setPenaltyDescription(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType\PenaltyDescriptionAType $penaltyDescription
    ) {
        $this->penaltyDescription = $penaltyDescription;

        return $this;
    }


}

