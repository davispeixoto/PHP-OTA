<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ReferencesAType;

use Davispeixoto\OpenTravelAlliance\ContactPersonType;

/**
 * Class representing ReferenceAType
 */
class ReferenceAType extends ContactPersonType
{

    /**
     * The name of the meeting for this reference.
     *
     * @property string $meetingName
     */
    private $meetingName = null;

    /**
     * The name of the organization that hosted the event.
     *
     * @property string $meetingHost
     */
    private $meetingHost = null;

    /**
     * The type of the meeting for this reference. Refer to OpenTravel Codelist (a new
     * codelist needs to be created) Apex added.
     *
     * @property string $meetingType
     */
    private $meetingType = null;

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
     * Gets as meetingName
     *
     * The name of the meeting for this reference.
     *
     * @return string
     */
    public function getMeetingName()
    {
        return $this->meetingName;
    }

    /**
     * Sets a new meetingName
     *
     * The name of the meeting for this reference.
     *
     * @param string $meetingName
     * @return self
     */
    public function setMeetingName($meetingName)
    {
        $this->meetingName = $meetingName;

        return $this;
    }

    /**
     * Gets as meetingHost
     *
     * The name of the organization that hosted the event.
     *
     * @return string
     */
    public function getMeetingHost()
    {
        return $this->meetingHost;
    }

    /**
     * Sets a new meetingHost
     *
     * The name of the organization that hosted the event.
     *
     * @param string $meetingHost
     * @return self
     */
    public function setMeetingHost($meetingHost)
    {
        $this->meetingHost = $meetingHost;

        return $this;
    }

    /**
     * Gets as meetingType
     *
     * The type of the meeting for this reference. Refer to OpenTravel Codelist (a new
     * codelist needs to be created) Apex added.
     *
     * @return string
     */
    public function getMeetingType()
    {
        return $this->meetingType;
    }

    /**
     * Sets a new meetingType
     *
     * The type of the meeting for this reference. Refer to OpenTravel Codelist (a new
     * codelist needs to be created) Apex added.
     *
     * @param string $meetingType
     * @return self
     */
    public function setMeetingType($meetingType)
    {
        $this->meetingType = $meetingType;

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


}

