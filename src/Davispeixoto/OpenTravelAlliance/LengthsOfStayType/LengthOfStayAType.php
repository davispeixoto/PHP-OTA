<?php

namespace Davispeixoto\OpenTravelAlliance\LengthsOfStayType;

/**
 * Class representing LengthOfStayAType
 */
class LengthOfStayAType
{

    /**
     * Used in conjunction with the MinMaxMessageType and the TimeUnit to define the
     * length of stay requirements.
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
     * Indicates if the length of stay is open or closed when MinMaxMessageType is
     * FullPatternLOS if true then open and if false then closed.
     *
     * @property boolean $openStatusIndicator
     */
    private $openStatusIndicator = null;

    /**
     * An enumerated type used to define how the minimum and maximum LOS is
     * applied.Values: Set Minimum LOS, Remove Minimum LOS, Set Maximum LOS, Remove
     * Maximum LOS, Set Forward Minimum Stay, Remove Forward Minimum Stay, Set Forward
     * Maximum Stay, Remove Forward Maximum Stay.
     *
     * @property string $minMaxMessageType
     */
    private $minMaxMessageType = null;

    /**
     * Used to define the LOS Pattern.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\LengthsOfStayType\LengthOfStayAType\LOSPatternAType
     * $lOSPattern
     */
    private $lOSPattern = null;

    /**
     * Gets as time
     *
     * Used in conjunction with the MinMaxMessageType and the TimeUnit to define the
     * length of stay requirements.
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
     * Used in conjunction with the MinMaxMessageType and the TimeUnit to define the
     * length of stay requirements.
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

    /**
     * Gets as openStatusIndicator
     *
     * Indicates if the length of stay is open or closed when MinMaxMessageType is
     * FullPatternLOS if true then open and if false then closed.
     *
     * @return boolean
     */
    public function getOpenStatusIndicator()
    {
        return $this->openStatusIndicator;
    }

    /**
     * Sets a new openStatusIndicator
     *
     * Indicates if the length of stay is open or closed when MinMaxMessageType is
     * FullPatternLOS if true then open and if false then closed.
     *
     * @param boolean $openStatusIndicator
     * @return self
     */
    public function setOpenStatusIndicator($openStatusIndicator)
    {
        $this->openStatusIndicator = $openStatusIndicator;

        return $this;
    }

    /**
     * Gets as minMaxMessageType
     *
     * An enumerated type used to define how the minimum and maximum LOS is
     * applied.Values: Set Minimum LOS, Remove Minimum LOS, Set Maximum LOS, Remove
     * Maximum LOS, Set Forward Minimum Stay, Remove Forward Minimum Stay, Set Forward
     * Maximum Stay, Remove Forward Maximum Stay.
     *
     * @return string
     */
    public function getMinMaxMessageType()
    {
        return $this->minMaxMessageType;
    }

    /**
     * Sets a new minMaxMessageType
     *
     * An enumerated type used to define how the minimum and maximum LOS is
     * applied.Values: Set Minimum LOS, Remove Minimum LOS, Set Maximum LOS, Remove
     * Maximum LOS, Set Forward Minimum Stay, Remove Forward Minimum Stay, Set Forward
     * Maximum Stay, Remove Forward Maximum Stay.
     *
     * @param string $minMaxMessageType
     * @return self
     */
    public function setMinMaxMessageType($minMaxMessageType)
    {
        $this->minMaxMessageType = $minMaxMessageType;

        return $this;
    }

    /**
     * Gets as lOSPattern
     *
     * Used to define the LOS Pattern.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\LengthsOfStayType\LengthOfStayAType\LOSPatternAType
     */
    public function getLOSPattern()
    {
        return $this->lOSPattern;
    }

    /**
     * Sets a new lOSPattern
     *
     * Used to define the LOS Pattern.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\LengthsOfStayType\LengthOfStayAType\LOSPatternAType
     * $lOSPattern
     * @return self
     */
    public function setLOSPattern(
        \Davispeixoto\OpenTravelAlliance\LengthsOfStayType\LengthOfStayAType\LOSPatternAType $lOSPattern
    ) {
        $this->lOSPattern = $lOSPattern;

        return $this;
    }


}

