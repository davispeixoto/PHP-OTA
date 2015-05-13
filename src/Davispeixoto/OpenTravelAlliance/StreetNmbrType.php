<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing StreetNmbrType
 *
 * Street name; number on street.
 * XSD Type: StreetNmbrType
 */
class StreetNmbrType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Defines a Post Office Box number.
     *
     * @property string $pOBox
     */
    private $pOBox = null;

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
     * Gets as pOBox
     *
     * Defines a Post Office Box number.
     *
     * @return string
     */
    public function getPOBox()
    {
        return $this->pOBox;
    }

    /**
     * Sets a new pOBox
     *
     * Defines a Post Office Box number.
     *
     * @param string $pOBox
     * @return self
     */
    public function setPOBox($pOBox)
    {
        $this->pOBox = $pOBox;

        return $this;
    }


}

