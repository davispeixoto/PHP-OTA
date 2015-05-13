<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType;

/**
 * Class representing MessageFunctionAType
 */
class MessageFunctionAType
{

    /**
     * Specifies the primary function(s) of a particular Check-in message.
     *
     * @property string $function
     */
    private $function = null;

    /**
     * Gets as function
     *
     * Specifies the primary function(s) of a particular Check-in message.
     *
     * @return string
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Sets a new function
     *
     * Specifies the primary function(s) of a particular Check-in message.
     *
     * @param string $function
     * @return self
     */
    public function setFunction($function)
    {
        $this->function = $function;

        return $this;
    }


}

