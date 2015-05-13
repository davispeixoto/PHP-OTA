<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType\EventDateFunctionsAType;

/**
 * Class representing EventDateFunctionAType
 */
class EventDateFunctionAType
{

    /**
     * The name of the event.
     *
     * @property string $eventName
     */
    private $eventName = null;

    /**
     * Indicates the type of event being requested (e.g. breakfast meeting, reception).
     *
     * @property string $eventType
     */
    private $eventType = null;

    /**
     * The time the event is scheduled to begin.
     *
     * @property \DateTime $startTime
     */
    private $startTime = null;

    /**
     * The time the event is scheduled to finish.
     *
     * @property \DateTime $endTime
     */
    private $endTime = null;

    /**
     * This is the numeric value associated with the measurement.
     *
     * @property float $unitOfMeasureQuantity
     */
    private $unitOfMeasureQuantity = null;

    /**
     * This is the standard unit of measure name (e.g., it could be generic such as
     * metric or imperial or specific such as inches, feet, yards, miles, millimeters,
     * centimeters, meters, kilometers- according to usage).
     *
     * @property string $unitOfMeasure
     */
    private $unitOfMeasure = null;

    /**
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @property string $unitOfMeasureCode
     */
    private $unitOfMeasureCode = null;

    /**
     * The number of people attending this event.
     *
     * @property integer $attendeeQuantity
     */
    private $attendeeQuantity = null;

    /**
     * Indicates the arrangement of the meeting space (e.g. conference or banquet
     * style). Refer to OpenTravel Code List Meeting Room Format Code (MRF).
     *
     * @property string $roomSetup
     */
    private $roomSetup = null;

    /**
     * Indicates the room must be accessable for 24 hours before the event (usually for
     * set-up purposes).
     *
     * @property boolean $twentyFourHourHold
     */
    private $twentyFourHourHold = null;

    /**
     * Indicates the name of the room that the event will be held in.
     *
     * @property string $meetingRoomName
     */
    private $meetingRoomName = null;

    /**
     * The total number of people permitted in the meeting room.
     *
     * @property integer $meetingRoomCapacity
     */
    private $meetingRoomCapacity = null;

    /**
     * Indicates the availability of the dates offered.
     *
     * @property string $availabilityOptionType
     */
    private $availabilityOptionType = null;

    /**
     * A collection of charges associated to an event.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EventChargeType $eventCharges
     */
    private $eventCharges = null;

    /**
     * Comments associated to this specific event.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comment
     */
    private $comment = null;

    /**
     * Gets as eventName
     *
     * The name of the event.
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Sets a new eventName
     *
     * The name of the event.
     *
     * @param string $eventName
     * @return self
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * Gets as eventType
     *
     * Indicates the type of event being requested (e.g. breakfast meeting, reception).
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Sets a new eventType
     *
     * Indicates the type of event being requested (e.g. breakfast meeting, reception).
     *
     * @param string $eventType
     * @return self
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Gets as startTime
     *
     * The time the event is scheduled to begin.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * The time the event is scheduled to begin.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Gets as endTime
     *
     * The time the event is scheduled to finish.
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * The time the event is scheduled to finish.
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Gets as unitOfMeasureQuantity
     *
     * This is the numeric value associated with the measurement.
     *
     * @return float
     */
    public function getUnitOfMeasureQuantity()
    {
        return $this->unitOfMeasureQuantity;
    }

    /**
     * Sets a new unitOfMeasureQuantity
     *
     * This is the numeric value associated with the measurement.
     *
     * @param float $unitOfMeasureQuantity
     * @return self
     */
    public function setUnitOfMeasureQuantity($unitOfMeasureQuantity)
    {
        $this->unitOfMeasureQuantity = $unitOfMeasureQuantity;

        return $this;
    }

    /**
     * Gets as unitOfMeasure
     *
     * This is the standard unit of measure name (e.g., it could be generic such as
     * metric or imperial or specific such as inches, feet, yards, miles, millimeters,
     * centimeters, meters, kilometers- according to usage).
     *
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     * Sets a new unitOfMeasure
     *
     * This is the standard unit of measure name (e.g., it could be generic such as
     * metric or imperial or specific such as inches, feet, yards, miles, millimeters,
     * centimeters, meters, kilometers- according to usage).
     *
     * @param string $unitOfMeasure
     * @return self
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->unitOfMeasure = $unitOfMeasure;

        return $this;
    }

    /**
     * Gets as unitOfMeasureCode
     *
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @return string
     */
    public function getUnitOfMeasureCode()
    {
        return $this->unitOfMeasureCode;
    }

    /**
     * Sets a new unitOfMeasureCode
     *
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @param string $unitOfMeasureCode
     * @return self
     */
    public function setUnitOfMeasureCode($unitOfMeasureCode)
    {
        $this->unitOfMeasureCode = $unitOfMeasureCode;

        return $this;
    }

    /**
     * Gets as attendeeQuantity
     *
     * The number of people attending this event.
     *
     * @return integer
     */
    public function getAttendeeQuantity()
    {
        return $this->attendeeQuantity;
    }

    /**
     * Sets a new attendeeQuantity
     *
     * The number of people attending this event.
     *
     * @param integer $attendeeQuantity
     * @return self
     */
    public function setAttendeeQuantity($attendeeQuantity)
    {
        $this->attendeeQuantity = $attendeeQuantity;

        return $this;
    }

    /**
     * Gets as roomSetup
     *
     * Indicates the arrangement of the meeting space (e.g. conference or banquet
     * style). Refer to OpenTravel Code List Meeting Room Format Code (MRF).
     *
     * @return string
     */
    public function getRoomSetup()
    {
        return $this->roomSetup;
    }

    /**
     * Sets a new roomSetup
     *
     * Indicates the arrangement of the meeting space (e.g. conference or banquet
     * style). Refer to OpenTravel Code List Meeting Room Format Code (MRF).
     *
     * @param string $roomSetup
     * @return self
     */
    public function setRoomSetup($roomSetup)
    {
        $this->roomSetup = $roomSetup;

        return $this;
    }

    /**
     * Gets as twentyFourHourHold
     *
     * Indicates the room must be accessable for 24 hours before the event (usually for
     * set-up purposes).
     *
     * @return boolean
     */
    public function getTwentyFourHourHold()
    {
        return $this->twentyFourHourHold;
    }

    /**
     * Sets a new twentyFourHourHold
     *
     * Indicates the room must be accessable for 24 hours before the event (usually for
     * set-up purposes).
     *
     * @param boolean $twentyFourHourHold
     * @return self
     */
    public function setTwentyFourHourHold($twentyFourHourHold)
    {
        $this->twentyFourHourHold = $twentyFourHourHold;

        return $this;
    }

    /**
     * Gets as meetingRoomName
     *
     * Indicates the name of the room that the event will be held in.
     *
     * @return string
     */
    public function getMeetingRoomName()
    {
        return $this->meetingRoomName;
    }

    /**
     * Sets a new meetingRoomName
     *
     * Indicates the name of the room that the event will be held in.
     *
     * @param string $meetingRoomName
     * @return self
     */
    public function setMeetingRoomName($meetingRoomName)
    {
        $this->meetingRoomName = $meetingRoomName;

        return $this;
    }

    /**
     * Gets as meetingRoomCapacity
     *
     * The total number of people permitted in the meeting room.
     *
     * @return integer
     */
    public function getMeetingRoomCapacity()
    {
        return $this->meetingRoomCapacity;
    }

    /**
     * Sets a new meetingRoomCapacity
     *
     * The total number of people permitted in the meeting room.
     *
     * @param integer $meetingRoomCapacity
     * @return self
     */
    public function setMeetingRoomCapacity($meetingRoomCapacity)
    {
        $this->meetingRoomCapacity = $meetingRoomCapacity;

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

    /**
     * Adds as comment
     *
     * Comments associated to this specific event.
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
     * Comments associated to this specific event.
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
     * Comments associated to this specific event.
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
     * Comments associated to this specific event.
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
     * Comments associated to this specific event.
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

