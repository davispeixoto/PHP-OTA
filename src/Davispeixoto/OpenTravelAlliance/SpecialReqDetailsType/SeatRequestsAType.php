<?php

namespace Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType;

/**
 * Class representing SeatRequestsAType
 */
class SeatRequestsAType
{

    /**
     * Seating requests for each passenger for each air leg of this trip.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SeatRequestsAType\SeatRequestAType[]
     * $seatRequest
     */
    private $seatRequest = null;

    /**
     * Adds as seatRequest
     *
     * Seating requests for each passenger for each air leg of this trip.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SeatRequestsAType\SeatRequestAType
     * $seatRequest
     */
    public function addToSeatRequest(
        \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SeatRequestsAType\SeatRequestAType $seatRequest
    ) {
        $this->seatRequest[] = $seatRequest;

        return $this;
    }

    /**
     * isset seatRequest
     *
     * Seating requests for each passenger for each air leg of this trip.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSeatRequest($index)
    {
        return isset($this->seatRequest[$index]);
    }

    /**
     * unset seatRequest
     *
     * Seating requests for each passenger for each air leg of this trip.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSeatRequest($index)
    {
        unset($this->seatRequest[$index]);
    }

    /**
     * Gets as seatRequest
     *
     * Seating requests for each passenger for each air leg of this trip.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SeatRequestsAType\SeatRequestAType[]
     */
    public function getSeatRequest()
    {
        return $this->seatRequest;
    }

    /**
     * Sets a new seatRequest
     *
     * Seating requests for each passenger for each air leg of this trip.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SeatRequestsAType\SeatRequestAType[]
     * $seatRequest
     * @return self
     */
    public function setSeatRequest(array $seatRequest)
    {
        $this->seatRequest = $seatRequest;

        return $this;
    }


}

