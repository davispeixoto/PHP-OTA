<?php

namespace Davispeixoto\OpenTravelAlliance\FareType;

/**
 * Class representing RemarkAType
 */
class RemarkAType
{

    /**
     * @property string $theValue
     */
    private $theValue = null;

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


}

