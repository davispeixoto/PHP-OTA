<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFlifoRQ\FlightSegmentAType;

/**
 * Class representing DepartureDateAType
 */
class DepartureDateAType
{

    /**
     * @property \DateTime $__value
     */
    private $__value = null;

    /**
     * Time of day to look for FLIFO.
     *
     * @property \DateTime $departureTime
     */
    private $departureTime = null;

    /**
     * Construct
     *
     * @param \DateTime $value
     */
    public function __construct(\DateTime $value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param \DateTime $value
     * @return \DateTime
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
     * Gets as departureTime
     *
     * Time of day to look for FLIFO.
     *
     * @return \DateTime
     */
    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    /**
     * Sets a new departureTime
     *
     * Time of day to look for FLIFO.
     *
     * @param \DateTime $departureTime
     * @return self
     */
    public function setDepartureTime(\DateTime $departureTime)
    {
        $this->departureTime = $departureTime;

        return $this;
    }


}

