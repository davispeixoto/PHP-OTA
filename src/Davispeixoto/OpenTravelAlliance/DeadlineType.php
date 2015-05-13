<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing DeadlineType
 *
 * The date and/or time by which this reservation MUST be cancelled to avoid
 * penalties.
 * XSD Type: DeadlineType
 */
class DeadlineType
{

    /**
     * AbsoluteDeadline MUST specify the date and/or time by which this reservation
     * MUST be cancelled to avoid penalties.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $absoluteDeadline
     */
    private $absoluteDeadline = null;

    /**
     * Gets as absoluteDeadline
     *
     * AbsoluteDeadline MUST specify the date and/or time by which this reservation
     * MUST be cancelled to avoid penalties.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType
     */
    public function getAbsoluteDeadline()
    {
        return $this->absoluteDeadline;
    }

    /**
     * Sets a new absoluteDeadline
     *
     * AbsoluteDeadline MUST specify the date and/or time by which this reservation
     * MUST be cancelled to avoid penalties.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $absoluteDeadline
     * @return self
     */
    public function setAbsoluteDeadline(\Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $absoluteDeadline)
    {
        $this->absoluteDeadline = $absoluteDeadline;

        return $this;
    }


}

