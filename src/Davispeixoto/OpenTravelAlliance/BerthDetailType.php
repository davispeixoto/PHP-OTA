<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing BerthDetailType
 *
 * Defines information about a berth sleeper.
 * XSD Type: BerthDetailType
 */
class BerthDetailType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * The berth number.
     *
     * @property string $number
     */
    private $number = null;

    /**
     * The berth position, such as Lower and Middle.
     *
     * @property string $position
     */
    private $position = null;

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
     * The berth number.
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
     * The berth number.
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
     * The berth position, such as Lower and Middle.
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
     * The berth position, such as Lower and Middle.
     *
     * @param string $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }


}

