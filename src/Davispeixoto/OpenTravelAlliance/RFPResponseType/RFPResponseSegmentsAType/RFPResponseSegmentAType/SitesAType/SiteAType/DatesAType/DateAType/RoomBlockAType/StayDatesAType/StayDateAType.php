<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType;

/**
 * Class representing StayDateAType
 */
class StayDateAType
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
     * Indicates the availability of the dates offered.
     *
     * @property string $availabilityOptionType
     */
    private $availabilityOptionType = null;

    /**
     * A collection of multiple StayDateRooms.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType[]
     * $stayDateRooms
     */
    private $stayDateRooms = null;

    /**
     * Comments for the date or date range as a whole.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comment
     */
    private $comment = null;

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
     * Gets as availabilityOptionType
     *
     * Indicates the availability of the dates offered.
     *
     * @return string
     */
    public function getAvailabilityOptionType()
    {
        return $this->availabilityOptionType;
    }

    /**
     * Sets a new availabilityOptionType
     *
     * Indicates the availability of the dates offered.
     *
     * @param string $availabilityOptionType
     * @return self
     */
    public function setAvailabilityOptionType($availabilityOptionType)
    {
        $this->availabilityOptionType = $availabilityOptionType;

        return $this;
    }

    /**
     * Adds as stayDateRoom
     *
     * A collection of multiple StayDateRooms.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType
     * $stayDateRoom
     */
    public function addToStayDateRooms(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType $stayDateRoom
    ) {
        $this->stayDateRooms[] = $stayDateRoom;

        return $this;
    }

    /**
     * isset stayDateRooms
     *
     * A collection of multiple StayDateRooms.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStayDateRooms($index)
    {
        return isset($this->stayDateRooms[$index]);
    }

    /**
     * unset stayDateRooms
     *
     * A collection of multiple StayDateRooms.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStayDateRooms($index)
    {
        unset($this->stayDateRooms[$index]);
    }

    /**
     * Gets as stayDateRooms
     *
     * A collection of multiple StayDateRooms.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType[]
     */
    public function getStayDateRooms()
    {
        return $this->stayDateRooms;
    }

    /**
     * Sets a new stayDateRooms
     *
     * A collection of multiple StayDateRooms.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType[]
     * $stayDateRooms
     * @return self
     */
    public function setStayDateRooms(array $stayDateRooms)
    {
        $this->stayDateRooms = $stayDateRooms;

        return $this;
    }

    /**
     * Adds as comment
     *
     * Comments for the date or date range as a whole.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    public function addToComment(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * isset comment
     *
     * Comments for the date or date range as a whole.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * Comments for the date or date range as a whole.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * Comments for the date or date range as a whole.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Comments for the date or date range as a whole.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;

        return $this;
    }


}

