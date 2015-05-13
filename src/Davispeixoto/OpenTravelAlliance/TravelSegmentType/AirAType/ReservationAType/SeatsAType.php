<?php

namespace Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType\ReservationAType;

/**
 * Class representing SeatsAType
 */
class SeatsAType
{

    /**
     * Seat information associated with a single reservation item and customer.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType\ReservationAType\SeatsAType\SeatAType[]
     * $seat
     */
    private $seat = null;

    /**
     * Adds as seat
     *
     * Seat information associated with a single reservation item and customer.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType\ReservationAType\SeatsAType\SeatAType
     * $seat
     */
    public function addToSeat(
        \Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType\ReservationAType\SeatsAType\SeatAType $seat
    ) {
        $this->seat[] = $seat;

        return $this;
    }

    /**
     * isset seat
     *
     * Seat information associated with a single reservation item and customer.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSeat($index)
    {
        return isset($this->seat[$index]);
    }

    /**
     * unset seat
     *
     * Seat information associated with a single reservation item and customer.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSeat($index)
    {
        unset($this->seat[$index]);
    }

    /**
     * Gets as seat
     *
     * Seat information associated with a single reservation item and customer.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType\ReservationAType\SeatsAType\SeatAType[]
     */
    public function getSeat()
    {
        return $this->seat;
    }

    /**
     * Sets a new seat
     *
     * Seat information associated with a single reservation item and customer.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType\ReservationAType\SeatsAType\SeatAType[]
     * $seat
     * @return self
     */
    public function setSeat(array $seat)
    {
        $this->seat = $seat;

        return $this;
    }


}

