<?php

namespace Davispeixoto\OpenTravelAlliance\FareType;

/**
 * Class representing UnstructuredFareCalcAType
 */
class UnstructuredFareCalcAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Used to identify the method of pricing for this transaction (e.g., manual,
     * automated pricing). Should be 1 character in length.
     *
     * @property string $fareCalcMode
     */
    private $fareCalcMode = null;

    /**
     * Indicates the required modification to the element.
     *
     * @property string $operation
     */
    private $operation = null;

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
     * Gets as fareCalcMode
     *
     * Used to identify the method of pricing for this transaction (e.g., manual,
     * automated pricing). Should be 1 character in length.
     *
     * @return string
     */
    public function getFareCalcMode()
    {
        return $this->fareCalcMode;
    }

    /**
     * Sets a new fareCalcMode
     *
     * Used to identify the method of pricing for this transaction (e.g., manual,
     * automated pricing). Should be 1 character in length.
     *
     * @param string $fareCalcMode
     * @return self
     */
    public function setFareCalcMode($fareCalcMode)
    {
        $this->fareCalcMode = $fareCalcMode;

        return $this;
    }

    /**
     * Gets as operation
     *
     * Indicates the required modification to the element.
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * Indicates the required modification to the element.
     *
     * @param string $operation
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;

        return $this;
    }


}

