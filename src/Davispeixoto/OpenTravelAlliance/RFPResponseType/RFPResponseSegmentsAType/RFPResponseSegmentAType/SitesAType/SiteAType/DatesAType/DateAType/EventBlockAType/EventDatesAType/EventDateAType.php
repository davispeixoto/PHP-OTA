<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType;

/**
 * Class representing EventDateAType
 */
class EventDateAType
{

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
     * A collection of multiple EventDateFunctions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType\EventDateFunctionsAType
     * $eventDateFunctions
     */
    private $eventDateFunctions = null;

    /**
     * A collection of charges associated to an event.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EventChargeType $eventCharges
     */
    private $eventCharges = null;

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
     * Gets as eventDateFunctions
     *
     * A collection of multiple EventDateFunctions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType\EventDateFunctionsAType
     */
    public function getEventDateFunctions()
    {
        return $this->eventDateFunctions;
    }

    /**
     * Sets a new eventDateFunctions
     *
     * A collection of multiple EventDateFunctions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType\EventDateFunctionsAType
     * $eventDateFunctions
     * @return self
     */
    public function setEventDateFunctions(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType\EventDateFunctionsAType $eventDateFunctions
    ) {
        $this->eventDateFunctions = $eventDateFunctions;

        return $this;
    }

    /**
     * Gets as eventCharges
     *
     * A collection of charges associated to an event.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EventChargeType
     */
    public function getEventCharges()
    {
        return $this->eventCharges;
    }

    /**
     * Sets a new eventCharges
     *
     * A collection of charges associated to an event.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EventChargeType $eventCharges
     * @return self
     */
    public function setEventCharges(\Davispeixoto\OpenTravelAlliance\EventChargeType $eventCharges)
    {
        $this->eventCharges = $eventCharges;

        return $this;
    }


}

