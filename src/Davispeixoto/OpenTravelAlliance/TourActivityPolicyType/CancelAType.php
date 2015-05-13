<?php

namespace Davispeixoto\OpenTravelAlliance\TourActivityPolicyType;

/**
 * Class representing CancelAType
 */
class CancelAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * A date and/or date/time that defines when cancellations must be received before
     * a penalty may be incurred.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     * $cancelDeadline
     */
    private $cancelDeadline = null;

    /**
     * A date and/or date/time that defines when a reservation must be received by.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     * $bookingDeadline
     */
    private $bookingDeadline = null;

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
     * Gets as cancelDeadline
     *
     * A date and/or date/time that defines when cancellations must be received before
     * a penalty may be incurred.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getCancelDeadline()
    {
        return $this->cancelDeadline;
    }

    /**
     * Sets a new cancelDeadline
     *
     * A date and/or date/time that defines when cancellations must be received before
     * a penalty may be incurred.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $cancelDeadline
     * @return self
     */
    public function setCancelDeadline(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $cancelDeadline)
    {
        $this->cancelDeadline = $cancelDeadline;

        return $this;
    }

    /**
     * Gets as bookingDeadline
     *
     * A date and/or date/time that defines when a reservation must be received by.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getBookingDeadline()
    {
        return $this->bookingDeadline;
    }

    /**
     * Sets a new bookingDeadline
     *
     * A date and/or date/time that defines when a reservation must be received by.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     * $bookingDeadline
     * @return self
     */
    public function setBookingDeadline(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $bookingDeadline)
    {
        $this->bookingDeadline = $bookingDeadline;

        return $this;
    }


}

