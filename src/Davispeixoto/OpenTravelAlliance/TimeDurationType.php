<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TimeDurationType
 *
 * Used to specify a time period, which may additionally include a minimum and/or
 * maximum duration.
 * XSD Type: TimeDurationType
 */
class TimeDurationType
{

    /**
     * @property \DateInterval $__value
     */
    private $__value = null;

    /**
     * A minimum duration.
     *
     * @property \DateInterval $minimum
     */
    private $minimum = null;

    /**
     * A maximum duration.
     *
     * @property \DateInterval $maximum
     */
    private $maximum = null;

    /**
     * Construct
     *
     * @param \DateInterval $value
     */
    public function __construct(\DateInterval $value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param \DateInterval $value
     * @return \DateInterval
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
     * Gets as minimum
     *
     * A minimum duration.
     *
     * @return \DateInterval
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * Sets a new minimum
     *
     * A minimum duration.
     *
     * @param \DateInterval $minimum
     * @return self
     */
    public function setMinimum(\DateInterval $minimum)
    {
        $this->minimum = $minimum;

        return $this;
    }

    /**
     * Gets as maximum
     *
     * A maximum duration.
     *
     * @return \DateInterval
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * Sets a new maximum
     *
     * A maximum duration.
     *
     * @param \DateInterval $maximum
     * @return self
     */
    public function setMaximum(\DateInterval $maximum)
    {
        $this->maximum = $maximum;

        return $this;
    }


}

