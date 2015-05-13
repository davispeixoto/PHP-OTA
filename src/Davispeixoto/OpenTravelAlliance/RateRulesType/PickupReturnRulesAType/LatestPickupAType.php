<?php

namespace Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType;

/**
 * Class representing LatestPickupAType
 */
class LatestPickupAType
{

    /**
     * The latest day of the week the rental can begin to qualify for the specific
     * rate.
     *
     * @property string $dayOfWeek
     */
    private $dayOfWeek = null;

    /**
     * The latest time, in conjunction with the DayOfWeek, the rental can commence to
     * qualify for the specific rate.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $time
     */
    private $time = null;

    /**
     * Gets as dayOfWeek
     *
     * The latest day of the week the rental can begin to qualify for the specific
     * rate.
     *
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * Sets a new dayOfWeek
     *
     * The latest day of the week the rental can begin to qualify for the specific
     * rate.
     *
     * @param string $dayOfWeek
     * @return self
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    /**
     * Gets as time
     *
     * The latest time, in conjunction with the DayOfWeek, the rental can commence to
     * qualify for the specific rate.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * The latest time, in conjunction with the DayOfWeek, the rental can commence to
     * qualify for the specific rate.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $time
     * @return self
     */
    public function setTime(\Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $time)
    {
        $this->time = $time;

        return $this;
    }


}

