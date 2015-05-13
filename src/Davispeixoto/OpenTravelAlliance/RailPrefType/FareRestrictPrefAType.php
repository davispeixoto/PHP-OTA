<?php

namespace Davispeixoto\OpenTravelAlliance\RailPrefType;

/**
 * Class representing FareRestrictPrefAType
 */
class FareRestrictPrefAType
{

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Identifies the type of fare restriction, such as None, Advance Purchase and
     * Change Penalties. Refer to OpenTravel Code List Fare Restriction (FAR).
     *
     * @property string $fareRestriction
     */
    private $fareRestriction = null;

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * If true, refundable fares are preferred.
     *
     * @property boolean $refundableInd
     */
    private $refundableInd = null;

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Gets as fareRestriction
     *
     * Identifies the type of fare restriction, such as None, Advance Purchase and
     * Change Penalties. Refer to OpenTravel Code List Fare Restriction (FAR).
     *
     * @return string
     */
    public function getFareRestriction()
    {
        return $this->fareRestriction;
    }

    /**
     * Sets a new fareRestriction
     *
     * Identifies the type of fare restriction, such as None, Advance Purchase and
     * Change Penalties. Refer to OpenTravel Code List Fare Restriction (FAR).
     *
     * @param string $fareRestriction
     * @return self
     */
    public function setFareRestriction($fareRestriction)
    {
        $this->fareRestriction = $fareRestriction;

        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as refundableInd
     *
     * If true, refundable fares are preferred.
     *
     * @return boolean
     */
    public function getRefundableInd()
    {
        return $this->refundableInd;
    }

    /**
     * Sets a new refundableInd
     *
     * If true, refundable fares are preferred.
     *
     * @param boolean $refundableInd
     * @return self
     */
    public function setRefundableInd($refundableInd)
    {
        $this->refundableInd = $refundableInd;

        return $this;
    }


}

