<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GroundPassengerInfoType
 *
 * Passenger information that may determine the class of vehicle required.
 * XSD Type: GroundPassengerInfoType
 */
class GroundPassengerInfoType
{

    /**
     * The maximum quantity of passengers requiring ground service.
     *
     * @property integer $maximumPassengers
     */
    private $maximumPassengers = null;

    /**
     * The maximum baggage for all passengers.
     *
     * @property integer $maximumBaggage
     */
    private $maximumBaggage = null;

    /**
     * If true, a child car seat is required or requested.
     *
     * @property boolean $childCarSeatInd
     */
    private $childCarSeatInd = null;

    /**
     * Gets as maximumPassengers
     *
     * The maximum quantity of passengers requiring ground service.
     *
     * @return integer
     */
    public function getMaximumPassengers()
    {
        return $this->maximumPassengers;
    }

    /**
     * Sets a new maximumPassengers
     *
     * The maximum quantity of passengers requiring ground service.
     *
     * @param integer $maximumPassengers
     * @return self
     */
    public function setMaximumPassengers($maximumPassengers)
    {
        $this->maximumPassengers = $maximumPassengers;

        return $this;
    }

    /**
     * Gets as maximumBaggage
     *
     * The maximum baggage for all passengers.
     *
     * @return integer
     */
    public function getMaximumBaggage()
    {
        return $this->maximumBaggage;
    }

    /**
     * Sets a new maximumBaggage
     *
     * The maximum baggage for all passengers.
     *
     * @param integer $maximumBaggage
     * @return self
     */
    public function setMaximumBaggage($maximumBaggage)
    {
        $this->maximumBaggage = $maximumBaggage;

        return $this;
    }

    /**
     * Gets as childCarSeatInd
     *
     * If true, a child car seat is required or requested.
     *
     * @return boolean
     */
    public function getChildCarSeatInd()
    {
        return $this->childCarSeatInd;
    }

    /**
     * Sets a new childCarSeatInd
     *
     * If true, a child car seat is required or requested.
     *
     * @param boolean $childCarSeatInd
     * @return self
     */
    public function setChildCarSeatInd($childCarSeatInd)
    {
        $this->childCarSeatInd = $childCarSeatInd;

        return $this;
    }


}

