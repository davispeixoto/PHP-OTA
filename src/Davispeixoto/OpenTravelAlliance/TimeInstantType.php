<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TimeInstantType
 *
 * Specifies a time window.
 * XSD Type: TimeInstantType
 */
class TimeInstantType extends DateOrDateTimeType
{

    /**
     * A period of time that can be applied to another time resulting in an earlier
     * range of time.
     *
     * @property \DateInterval $windowBefore
     */
    private $windowBefore = null;

    /**
     * A period of time that can be applied to another time resulting in a later range
     * of time.
     *
     * @property \DateInterval $windowAfter
     */
    private $windowAfter = null;

    /**
     * When true the requested period may extend over the previous or following day.
     * When false, the search period is restricted to the date specified. Normally used
     * when the window duration is in hours.
     *
     * @property boolean $crossDateAllowedIndicator
     */
    private $crossDateAllowedIndicator = null;

    /**
     * Gets as windowBefore
     *
     * A period of time that can be applied to another time resulting in an earlier
     * range of time.
     *
     * @return \DateInterval
     */
    public function getWindowBefore()
    {
        return $this->windowBefore;
    }

    /**
     * Sets a new windowBefore
     *
     * A period of time that can be applied to another time resulting in an earlier
     * range of time.
     *
     * @param \DateInterval $windowBefore
     * @return self
     */
    public function setWindowBefore(\DateInterval $windowBefore)
    {
        $this->windowBefore = $windowBefore;

        return $this;
    }

    /**
     * Gets as windowAfter
     *
     * A period of time that can be applied to another time resulting in a later range
     * of time.
     *
     * @return \DateInterval
     */
    public function getWindowAfter()
    {
        return $this->windowAfter;
    }

    /**
     * Sets a new windowAfter
     *
     * A period of time that can be applied to another time resulting in a later range
     * of time.
     *
     * @param \DateInterval $windowAfter
     * @return self
     */
    public function setWindowAfter(\DateInterval $windowAfter)
    {
        $this->windowAfter = $windowAfter;

        return $this;
    }

    /**
     * Gets as crossDateAllowedIndicator
     *
     * When true the requested period may extend over the previous or following day.
     * When false, the search period is restricted to the date specified. Normally used
     * when the window duration is in hours.
     *
     * @return boolean
     */
    public function getCrossDateAllowedIndicator()
    {
        return $this->crossDateAllowedIndicator;
    }

    /**
     * Sets a new crossDateAllowedIndicator
     *
     * When true the requested period may extend over the previous or following day.
     * When false, the search period is restricted to the date specified. Normally used
     * when the window duration is in hours.
     *
     * @param boolean $crossDateAllowedIndicator
     * @return self
     */
    public function setCrossDateAllowedIndicator($crossDateAllowedIndicator)
    {
        $this->crossDateAllowedIndicator = $crossDateAllowedIndicator;

        return $this;
    }


}

