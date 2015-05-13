<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType;

/**
 * Class representing CancelPoliciesAType
 */
class CancelPoliciesAType
{

    /**
     * CancelPenalty MUST specify the cancellation penalty associated to this room
     * rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType[]
     * $cancelPenalty
     */
    private $cancelPenalty = null;

    /**
     * Adds as cancelPenalty
     *
     * CancelPenalty MUST specify the cancellation penalty associated to this room
     * rate.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType
     * $cancelPenalty
     */
    public function addToCancelPenalty(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType $cancelPenalty
    ) {
        $this->cancelPenalty[] = $cancelPenalty;

        return $this;
    }

    /**
     * isset cancelPenalty
     *
     * CancelPenalty MUST specify the cancellation penalty associated to this room
     * rate.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCancelPenalty($index)
    {
        return isset($this->cancelPenalty[$index]);
    }

    /**
     * unset cancelPenalty
     *
     * CancelPenalty MUST specify the cancellation penalty associated to this room
     * rate.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCancelPenalty($index)
    {
        unset($this->cancelPenalty[$index]);
    }

    /**
     * Gets as cancelPenalty
     *
     * CancelPenalty MUST specify the cancellation penalty associated to this room
     * rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType[]
     */
    public function getCancelPenalty()
    {
        return $this->cancelPenalty;
    }

    /**
     * Sets a new cancelPenalty
     *
     * CancelPenalty MUST specify the cancellation penalty associated to this room
     * rate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType[]
     * $cancelPenalty
     * @return self
     */
    public function setCancelPenalty(array $cancelPenalty)
    {
        $this->cancelPenalty = $cancelPenalty;

        return $this;
    }


}

