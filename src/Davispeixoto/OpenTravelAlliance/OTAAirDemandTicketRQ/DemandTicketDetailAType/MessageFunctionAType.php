<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType;

/**
 * Class representing MessageFunctionAType
 */
class MessageFunctionAType
{

    /**
     * Specifies the ticketing function to be performed.
     *
     * @property string $function
     */
    private $function = null;

    /**
     * Gets as function
     *
     * Specifies the ticketing function to be performed.
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
     * Specifies the ticketing function to be performed.
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

