<?php

namespace Davispeixoto\OpenTravelAlliance\ResCommonDetailType;

use Davispeixoto\OpenTravelAlliance\DateTimeSpanType;

/**
 * Class representing TimeSpanAType
 */
class TimeSpanAType extends DateTimeSpanType
{

    /**
     * Specifies the increment at which a service offering is repeated. For example an
     * increment of PT2H would mean that the service is offered every two hours.
     *
     * @property \DateInterval $increment
     */
    private $increment = null;

    /**
     * Gets as increment
     *
     * Specifies the increment at which a service offering is repeated. For example an
     * increment of PT2H would mean that the service is offered every two hours.
     *
     * @return \DateInterval
     */
    public function getIncrement()
    {
        return $this->increment;
    }

    /**
     * Sets a new increment
     *
     * Specifies the increment at which a service offering is repeated. For example an
     * increment of PT2H would mean that the service is offered every two hours.
     *
     * @param \DateInterval $increment
     * @return self
     */
    public function setIncrement(\DateInterval $increment)
    {
        $this->increment = $increment;

        return $this;
    }


}

