<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SeatDetailType
 *
 * Defines information about a seat on a train.
 * XSD Type: SeatDetailType
 */
class SeatDetailType
{

    /**
     * @property string $__value
     */
    private $__value = null;

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
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }

        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

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


}

