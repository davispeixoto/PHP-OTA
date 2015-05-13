<?php

namespace Davispeixoto\OpenTravelAlliance\FareType;

/**
 * Class representing TourCodeAType
 */
class TourCodeAType
{

    /**
     * @property string $__value
     */
    private $theValue = null;

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
        $args = func_get_args();

        if (!empty($args)) {
            $this->theValue = $args[0];
        }

        return $this->theValue;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->theValue);
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

