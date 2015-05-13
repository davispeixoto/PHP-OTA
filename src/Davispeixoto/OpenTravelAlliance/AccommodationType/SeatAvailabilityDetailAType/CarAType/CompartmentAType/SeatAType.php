<?php

namespace Davispeixoto\OpenTravelAlliance\AccommodationType\SeatAvailabilityDetailAType\CarAType\CompartmentAType;

/**
 * Class representing SeatAType
 */
class SeatAType
{

    /**
     * The seat number.
     *
     * @property string $number
     */
    private $number = null;

    /**
     * The seat position, such as Window, Aisle and Table.
     *
     * @property string $position
     */
    private $position = null;

    /**
     * The seat direction, such as Facing and Back.
     *
     * @property string $direction
     */
    private $direction = null;

    /**
     * When true,the seat is available. When false, the seat is not available.
     *
     * @property boolean $availableInd
     */
    private $availableInd = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as number
     *
     * The seat number.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * The seat number.
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as position
     *
     * The seat position, such as Window, Aisle and Table.
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * The seat position, such as Window, Aisle and Table.
     *
     * @param string $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Gets as direction
     *
     * The seat direction, such as Facing and Back.
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Sets a new direction
     *
     * The seat direction, such as Facing and Back.
     *
     * @param string $direction
     * @return self
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Gets as availableInd
     *
     * When true,the seat is available. When false, the seat is not available.
     *
     * @return boolean
     */
    public function getAvailableInd()
    {
        return $this->availableInd;
    }

    /**
     * Sets a new availableInd
     *
     * When true,the seat is available. When false, the seat is not available.
     *
     * @param boolean $availableInd
     * @return self
     */
    public function setAvailableInd($availableInd)
    {
        $this->availableInd = $availableInd;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

