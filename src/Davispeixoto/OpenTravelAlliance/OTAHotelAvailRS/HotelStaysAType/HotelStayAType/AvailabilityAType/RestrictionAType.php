<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType\AvailabilityAType;

/**
 * Class representing RestrictionAType
 */
class RestrictionAType
{

    /**
     * Stay restriction that applies to the availability.
     *
     * @property string $restrictionType
     */
    private $restrictionType = null;

    /**
     * Used in conjunction with the RestrictionType and the TimeUnit to define the
     * restriction length.
     *
     * @property integer $time
     */
    private $time = null;

    /**
     * A time unit used to apply this status message to other inventory, and with more
     * granularity than daily. Values: Year, Month, Week, Day, Hour, Minute, Second.
     *
     * @property string $timeUnit
     */
    private $timeUnit = null;

    /**
     * Gets as restrictionType
     *
     * Stay restriction that applies to the availability.
     *
     * @return string
     */
    public function getRestrictionType()
    {
        return $this->restrictionType;
    }

    /**
     * Sets a new restrictionType
     *
     * Stay restriction that applies to the availability.
     *
     * @param string $restrictionType
     * @return self
     */
    public function setRestrictionType($restrictionType)
    {
        $this->restrictionType = $restrictionType;

        return $this;
    }

    /**
     * Gets as time
     *
     * Used in conjunction with the RestrictionType and the TimeUnit to define the
     * restriction length.
     *
     * @return integer
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * Used in conjunction with the RestrictionType and the TimeUnit to define the
     * restriction length.
     *
     * @param integer $time
     * @return self
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Gets as timeUnit
     *
     * A time unit used to apply this status message to other inventory, and with more
     * granularity than daily. Values: Year, Month, Week, Day, Hour, Minute, Second.
     *
     * @return string
     */
    public function getTimeUnit()
    {
        return $this->timeUnit;
    }

    /**
     * Sets a new timeUnit
     *
     * A time unit used to apply this status message to other inventory, and with more
     * granularity than daily. Values: Year, Month, Week, Day, Hour, Minute, Second.
     *
     * @param string $timeUnit
     * @return self
     */
    public function setTimeUnit($timeUnit)
    {
        $this->timeUnit = $timeUnit;

        return $this;
    }


}

