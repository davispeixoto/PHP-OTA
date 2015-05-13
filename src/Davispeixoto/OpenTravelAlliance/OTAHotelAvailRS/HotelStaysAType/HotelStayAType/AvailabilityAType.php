<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType;

/**
 * Class representing AvailabilityAType
 */
class AvailabilityAType
{

    /**
     * Used to specify an availability status at the Hotel Stay level for a property.
     *
     * @property string $status
     */
    private $status = null;

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
     * Restrictions pertaining to the availability.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType\AvailabilityAType\RestrictionAType[]
     * $restriction
     */
    private $restriction = null;

    /**
     * Gets as status
     *
     * Used to specify an availability status at the Hotel Stay level for a property.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Used to specify an availability status at the Hotel Stay level for a property.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

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
     * Adds as restriction
     *
     * Restrictions pertaining to the availability.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType\AvailabilityAType\RestrictionAType
     * $restriction
     */
    public function addToRestriction(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType\AvailabilityAType\RestrictionAType $restriction
    ) {
        $this->restriction[] = $restriction;

        return $this;
    }

    /**
     * isset restriction
     *
     * Restrictions pertaining to the availability.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRestriction($index)
    {
        return isset($this->restriction[$index]);
    }

    /**
     * unset restriction
     *
     * Restrictions pertaining to the availability.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRestriction($index)
    {
        unset($this->restriction[$index]);
    }

    /**
     * Gets as restriction
     *
     * Restrictions pertaining to the availability.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType\AvailabilityAType\RestrictionAType[]
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * Sets a new restriction
     *
     * Restrictions pertaining to the availability.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType\AvailabilityAType\RestrictionAType[]
     * $restriction
     * @return self
     */
    public function setRestriction(array $restriction)
    {
        $this->restriction = $restriction;

        return $this;
    }


}

