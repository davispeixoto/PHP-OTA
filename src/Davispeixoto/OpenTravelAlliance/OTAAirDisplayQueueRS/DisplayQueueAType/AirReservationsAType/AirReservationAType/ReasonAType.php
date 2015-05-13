<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\AirReservationsAType\AirReservationAType;

/**
 * Class representing ReasonAType
 */
class ReasonAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Number corresponding to reason text.
     *
     * @property integer $number
     */
    private $number = null;

    /**
     * Specifies the method (e.g., manual, automatic, time initiated) of queuing.
     *
     * @property string $queuingMethod
     */
    private $queuingMethod = null;

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
     * Number corresponding to reason text.
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Number corresponding to reason text.
     *
     * @param integer $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as queuingMethod
     *
     * Specifies the method (e.g., manual, automatic, time initiated) of queuing.
     *
     * @return string
     */
    public function getQueuingMethod()
    {
        return $this->queuingMethod;
    }

    /**
     * Sets a new queuingMethod
     *
     * Specifies the method (e.g., manual, automatic, time initiated) of queuing.
     *
     * @param string $queuingMethod
     * @return self
     */
    public function setQueuingMethod($queuingMethod)
    {
        $this->queuingMethod = $queuingMethod;

        return $this;
    }


}

