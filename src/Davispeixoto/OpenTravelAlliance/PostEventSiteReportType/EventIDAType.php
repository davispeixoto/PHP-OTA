<?php

namespace Davispeixoto\OpenTravelAlliance\PostEventSiteReportType;

use Davispeixoto\OpenTravelAlliance\UniqueIDType;

/**
 * Class representing EventIDAType
 */
class EventIDAType extends UniqueIDType
{

    /**
     * This is used to identify the name of the meeting in the request.
     *
     * @property string $meetingName
     */
    private $meetingName = null;

    /**
     * Gets as meetingName
     *
     * This is used to identify the name of the meeting in the request.
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
     * This is used to identify the name of the meeting in the request.
     *
     * @param string $meetingName
     * @return self
     */
    public function setMeetingName($meetingName)
    {
        $this->meetingName = $meetingName;

        return $this;
    }


}

