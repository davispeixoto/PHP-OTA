<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing DynamicPkgGuestType
 *
 * The ResGuest object contains the information about a guest associated with a
 * reservation.
 * XSD Type: DynamicPkgGuestType
 */
class DynamicPkgGuestType extends ResGuestType
{

    /**
     * A collection of Seat Request
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgGuestType\SeatRequestsAType\SeatRequestAType[]
     * $seatRequests
     */
    private $seatRequests = null;

    /**
     * Adds as seatRequest
     *
     * A collection of Seat Request
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgGuestType\SeatRequestsAType\SeatRequestAType
     * $seatRequest
     */
    public function addToSeatRequests(
        \Davispeixoto\OpenTravelAlliance\DynamicPkgGuestType\SeatRequestsAType\SeatRequestAType $seatRequest
    ) {
        $this->seatRequests[] = $seatRequest;

        return $this;
    }

    /**
     * isset seatRequests
     *
     * A collection of Seat Request
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSeatRequests($index)
    {
        return isset($this->seatRequests[$index]);
    }

    /**
     * unset seatRequests
     *
     * A collection of Seat Request
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSeatRequests($index)
    {
        unset($this->seatRequests[$index]);
    }

    /**
     * Gets as seatRequests
     *
     * A collection of Seat Request
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgGuestType\SeatRequestsAType\SeatRequestAType[]
     */
    public function getSeatRequests()
    {
        return $this->seatRequests;
    }

    /**
     * Sets a new seatRequests
     *
     * A collection of Seat Request
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgGuestType\SeatRequestsAType\SeatRequestAType[]
     * $seatRequests
     * @return self
     */
    public function setSeatRequests(array $seatRequests)
    {
        $this->seatRequests = $seatRequests;

        return $this;
    }


}

