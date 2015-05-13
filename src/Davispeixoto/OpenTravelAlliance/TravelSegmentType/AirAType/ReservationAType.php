<?php

namespace Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType;

use Davispeixoto\OpenTravelAlliance\BookFlightSegmentType;

/**
 * Class representing ReservationAType
 */
class ReservationAType extends BookFlightSegmentType
{

    /**
     * Intermediate and last segments contain the RPH of the first segment for an
     * Origin and Destination set.
     *
     * @property string $orginDestType
     */
    private $orginDestType = null;

    /**
     * All seat information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType\ReservationAType\SeatsAType\SeatAType[]
     * $seats
     */
    private $seats = null;

    /**
     * Gets as orginDestType
     *
     * Intermediate and last segments contain the RPH of the first segment for an
     * Origin and Destination set.
     *
     * @return string
     */
    public function getOrginDestType()
    {
        return $this->orginDestType;
    }

    /**
     * Sets a new orginDestType
     *
     * Intermediate and last segments contain the RPH of the first segment for an
     * Origin and Destination set.
     *
     * @param string $orginDestType
     * @return self
     */
    public function setOrginDestType($orginDestType)
    {
        $this->orginDestType = $orginDestType;

        return $this;
    }

    /**
     * Adds as seat
     *
     * All seat information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType\ReservationAType\SeatsAType\SeatAType
     * $seat
     */
    public function addToSeats(
        \Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType\ReservationAType\SeatsAType\SeatAType $seat
    ) {
        $this->seats[] = $seat;

        return $this;
    }

    /**
     * isset seats
     *
     * All seat information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSeats($index)
    {
        return isset($this->seats[$index]);
    }

    /**
     * unset seats
     *
     * All seat information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSeats($index)
    {
        unset($this->seats[$index]);
    }

    /**
     * Gets as seats
     *
     * All seat information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType\ReservationAType\SeatsAType\SeatAType[]
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * Sets a new seats
     *
     * All seat information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType\ReservationAType\SeatsAType\SeatAType[]
     * $seats
     * @return self
     */
    public function setSeats(array $seats)
    {
        $this->seats = $seats;

        return $this;
    }


}

