<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType;

/**
 * Class representing CancelPenaltiesAType
 */
class CancelPenaltiesAType
{

    /**
     * CancelPenalty MUST specify the cancellation penalty of the hotel facility.
     * CancelPenalty MAY repeat to specify multiple cancel penalties.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType[]
     * $cancelPenalty
     */
    private $cancelPenalty = null;

    /**
     * Adds as cancelPenalty
     *
     * CancelPenalty MUST specify the cancellation penalty of the hotel facility.
     * CancelPenalty MAY repeat to specify multiple cancel penalties.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType
     * $cancelPenalty
     */
    public function addToCancelPenalty(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType $cancelPenalty
    ) {
        $this->cancelPenalty[] = $cancelPenalty;

        return $this;
    }

    /**
     * isset cancelPenalty
     *
     * CancelPenalty MUST specify the cancellation penalty of the hotel facility.
     * CancelPenalty MAY repeat to specify multiple cancel penalties.
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
     * CancelPenalty MUST specify the cancellation penalty of the hotel facility.
     * CancelPenalty MAY repeat to specify multiple cancel penalties.
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
     * CancelPenalty MUST specify the cancellation penalty of the hotel facility.
     * CancelPenalty MAY repeat to specify multiple cancel penalties.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType[]
     */
    public function getCancelPenalty()
    {
        return $this->cancelPenalty;
    }

    /**
     * Sets a new cancelPenalty
     *
     * CancelPenalty MUST specify the cancellation penalty of the hotel facility.
     * CancelPenalty MAY repeat to specify multiple cancel penalties.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType[]
     * $cancelPenalty
     * @return self
     */
    public function setCancelPenalty(array $cancelPenalty)
    {
        $this->cancelPenalty = $cancelPenalty;

        return $this;
    }


}

