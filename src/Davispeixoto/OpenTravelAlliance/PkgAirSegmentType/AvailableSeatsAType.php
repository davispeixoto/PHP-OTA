<?php

namespace Davispeixoto\OpenTravelAlliance\PkgAirSegmentType;

/**
 * Class representing AvailableSeatsAType
 */
class AvailableSeatsAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\SeatAvailabilityType[]
     * $seatAvailability
     */
    private $seatAvailability = null;

    /**
     * Adds as seatAvailability
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SeatAvailabilityType $seatAvailability
     */
    public function addToSeatAvailability(\Davispeixoto\OpenTravelAlliance\SeatAvailabilityType $seatAvailability)
    {
        $this->seatAvailability[] = $seatAvailability;

        return $this;
    }

    /**
     * isset seatAvailability
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSeatAvailability($index)
    {
        return isset($this->seatAvailability[$index]);
    }

    /**
     * unset seatAvailability
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSeatAvailability($index)
    {
        unset($this->seatAvailability[$index]);
    }

    /**
     * Gets as seatAvailability
     *
     * @return \Davispeixoto\OpenTravelAlliance\SeatAvailabilityType[]
     */
    public function getSeatAvailability()
    {
        return $this->seatAvailability;
    }

    /**
     * Sets a new seatAvailability
     *
     * @param \Davispeixoto\OpenTravelAlliance\SeatAvailabilityType[] $seatAvailability
     * @return self
     */
    public function setSeatAvailability(array $seatAvailability)
    {
        $this->seatAvailability = $seatAvailability;

        return $this;
    }


}

