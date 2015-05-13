<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFlifoRQ;

use DateTime;
use Davispeixoto\OpenTravelAlliance\Exceptions\OTACoreException;

/**
 * Class representing DepartureDateAType
 */
class DepartureDateAType
{

    /**
     * @property DateTime $theValue
     */
    private $theValue = null;

    /**
     * Construct
     *
     * @param DateTime $value
     */
    public function __construct(DateTime $value)
    {
        $this->theValue = $value;
    }

    public function __set($var, $value)
    {
        if (property_exists($this, $var)) {
            $this->$var = $value;
        }
    }

    public function __get($var)
    {
        if (property_exists($this, $var)) {
            return $this->$var;
        }

        throw new OTACoreException('Property does not exists');
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

