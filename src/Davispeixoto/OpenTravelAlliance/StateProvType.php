<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing StateProvType
 *
 * State, province, or region name or code needed to identify location.
 * XSD Type: StateProvType
 */
class StateProvType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * The standard code or abbreviation for the state, province, or region.
     *
     * @property string $stateCode
     */
    private $stateCode = null;

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
     * Gets as stateCode
     *
     * The standard code or abbreviation for the state, province, or region.
     *
     * @return string
     */
    public function getStateCode()
    {
        return $this->stateCode;
    }

    /**
     * Sets a new stateCode
     *
     * The standard code or abbreviation for the state, province, or region.
     *
     * @param string $stateCode
     * @return self
     */
    public function setStateCode($stateCode)
    {
        $this->stateCode = $stateCode;

        return $this;
    }


}

