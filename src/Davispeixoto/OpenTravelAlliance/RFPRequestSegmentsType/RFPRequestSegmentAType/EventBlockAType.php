<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType;

/**
 * Class representing EventBlockAType
 */
class EventBlockAType
{

    /**
     * Specifies the type of event. Refer to OpenTravel Code table Event Type Code
     * List.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Used to identify the market segment for the meeting. Refer to OpenTravel Code
     * Table Inventory Block Type (IBT).
     *
     * @property string $marketSegmentCode
     */
    private $marketSegmentCode = null;

    /**
     * If true, the event is definite (i.e., the event is budgeted). If false, the
     * event is potential (i.e., the event is not yet budgeted).
     *
     * @property boolean $definiteIndicator
     */
    private $definiteIndicator = null;

    /**
     * Used to indicate the frequency of this event.
     *
     * @property string $frequency
     */
    private $frequency = null;

    /**
     * This is the expected total attendance at the event.
     *
     * @property integer $expectedTotalAttendanceQuantity
     */
    private $expectedTotalAttendanceQuantity = null;

    /**
     * If true, indicates this is a first time event. If false, indicates this event
     * has taken place previously.
     *
     * @property boolean $firstTimeIndicator
     */
    private $firstTimeIndicator = null;

    /**
     * If true, future open dates exist for this event. If false, no future dates exist
     * for this event.
     *
     * @property boolean $futureOpenDatesIndicator
     */
    private $futureOpenDatesIndicator = null;

    /**
     * When true, indicates this event will include an exhibition component. When
     * false, an exhibition will not be a part of this event.
     *
     * @property boolean $exhibitionIncludedIndicator
     */
    private $exhibitionIncludedIndicator = null;

    /**
     * This is used to identify the event in the request.
     *
     * @property string $eventName
     */
    private $eventName = null;

    /**
     * Used to define requirements for function space for the event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\FunctionSpaceReqAType
     * $functionSpaceReq
     */
    private $functionSpaceReq = null;

    /**
     * A general indication of the planner's budget for the event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventBudgetAType[]
     * $eventBudget
     */
    private $eventBudget = null;

    /**
     * A collection of multiple EventDays.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType
     * $eventDays
     */
    private $eventDays = null;

    /**
     * Describes an event at which products and services are displayed, typically the
     * primary activity of attendees is visiting exhibits on the show floor.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\ExhibitionAType[]
     * $exhibition
     */
    private $exhibition = null;

    /**
     * An open field to comment on the event block.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as type
     *
     * Specifies the type of event. Refer to OpenTravel Code table Event Type Code
     * List.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Specifies the type of event. Refer to OpenTravel Code table Event Type Code
     * List.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as marketSegmentCode
     *
     * Used to identify the market segment for the meeting. Refer to OpenTravel Code
     * Table Inventory Block Type (IBT).
     *
     * @return string
     */
    public function getMarketSegmentCode()
    {
        return $this->marketSegmentCode;
    }

    /**
     * Sets a new marketSegmentCode
     *
     * Used to identify the market segment for the meeting. Refer to OpenTravel Code
     * Table Inventory Block Type (IBT).
     *
     * @param string $marketSegmentCode
     * @return self
     */
    public function setMarketSegmentCode($marketSegmentCode)
    {
        $this->marketSegmentCode = $marketSegmentCode;

        return $this;
    }

    /**
     * Gets as definiteIndicator
     *
     * If true, the event is definite (i.e., the event is budgeted). If false, the
     * event is potential (i.e., the event is not yet budgeted).
     *
     * @return boolean
     */
    public function getDefiniteIndicator()
    {
        return $this->definiteIndicator;
    }

    /**
     * Sets a new definiteIndicator
     *
     * If true, the event is definite (i.e., the event is budgeted). If false, the
     * event is potential (i.e., the event is not yet budgeted).
     *
     * @param boolean $definiteIndicator
     * @return self
     */
    public function setDefiniteIndicator($definiteIndicator)
    {
        $this->definiteIndicator = $definiteIndicator;

        return $this;
    }

    /**
     * Gets as frequency
     *
     * Used to indicate the frequency of this event.
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets a new frequency
     *
     * Used to indicate the frequency of this event.
     *
     * @param string $frequency
     * @return self
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Gets as expectedTotalAttendanceQuantity
     *
     * This is the expected total attendance at the event.
     *
     * @return integer
     */
    public function getExpectedTotalAttendanceQuantity()
    {
        return $this->expectedTotalAttendanceQuantity;
    }

    /**
     * Sets a new expectedTotalAttendanceQuantity
     *
     * This is the expected total attendance at the event.
     *
     * @param integer $expectedTotalAttendanceQuantity
     * @return self
     */
    public function setExpectedTotalAttendanceQuantity($expectedTotalAttendanceQuantity)
    {
        $this->expectedTotalAttendanceQuantity = $expectedTotalAttendanceQuantity;

        return $this;
    }

    /**
     * Gets as firstTimeIndicator
     *
     * If true, indicates this is a first time event. If false, indicates this event
     * has taken place previously.
     *
     * @return boolean
     */
    public function getFirstTimeIndicator()
    {
        return $this->firstTimeIndicator;
    }

    /**
     * Sets a new firstTimeIndicator
     *
     * If true, indicates this is a first time event. If false, indicates this event
     * has taken place previously.
     *
     * @param boolean $firstTimeIndicator
     * @return self
     */
    public function setFirstTimeIndicator($firstTimeIndicator)
    {
        $this->firstTimeIndicator = $firstTimeIndicator;

        return $this;
    }

    /**
     * Gets as futureOpenDatesIndicator
     *
     * If true, future open dates exist for this event. If false, no future dates exist
     * for this event.
     *
     * @return boolean
     */
    public function getFutureOpenDatesIndicator()
    {
        return $this->futureOpenDatesIndicator;
    }

    /**
     * Sets a new futureOpenDatesIndicator
     *
     * If true, future open dates exist for this event. If false, no future dates exist
     * for this event.
     *
     * @param boolean $futureOpenDatesIndicator
     * @return self
     */
    public function setFutureOpenDatesIndicator($futureOpenDatesIndicator)
    {
        $this->futureOpenDatesIndicator = $futureOpenDatesIndicator;

        return $this;
    }

    /**
     * Gets as exhibitionIncludedIndicator
     *
     * When true, indicates this event will include an exhibition component. When
     * false, an exhibition will not be a part of this event.
     *
     * @return boolean
     */
    public function getExhibitionIncludedIndicator()
    {
        return $this->exhibitionIncludedIndicator;
    }

    /**
     * Sets a new exhibitionIncludedIndicator
     *
     * When true, indicates this event will include an exhibition component. When
     * false, an exhibition will not be a part of this event.
     *
     * @param boolean $exhibitionIncludedIndicator
     * @return self
     */
    public function setExhibitionIncludedIndicator($exhibitionIncludedIndicator)
    {
        $this->exhibitionIncludedIndicator = $exhibitionIncludedIndicator;

        return $this;
    }

    /**
     * Gets as eventName
     *
     * This is used to identify the event in the request.
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
     * This is used to identify the event in the request.
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
     * Gets as functionSpaceReq
     *
     * Used to define requirements for function space for the event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\FunctionSpaceReqAType
     */
    public function getFunctionSpaceReq()
    {
        return $this->functionSpaceReq;
    }

    /**
     * Sets a new functionSpaceReq
     *
     * Used to define requirements for function space for the event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\FunctionSpaceReqAType
     * $functionSpaceReq
     * @return self
     */
    public function setFunctionSpaceReq(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\FunctionSpaceReqAType $functionSpaceReq
    ) {
        $this->functionSpaceReq = $functionSpaceReq;

        return $this;
    }

    /**
     * Adds as eventBudget
     *
     * A general indication of the planner's budget for the event.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventBudgetAType
     * $eventBudget
     */
    public function addToEventBudget(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventBudgetAType $eventBudget
    ) {
        $this->eventBudget[] = $eventBudget;

        return $this;
    }

    /**
     * isset eventBudget
     *
     * A general indication of the planner's budget for the event.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEventBudget($index)
    {
        return isset($this->eventBudget[$index]);
    }

    /**
     * unset eventBudget
     *
     * A general indication of the planner's budget for the event.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEventBudget($index)
    {
        unset($this->eventBudget[$index]);
    }

    /**
     * Gets as eventBudget
     *
     * A general indication of the planner's budget for the event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventBudgetAType[]
     */
    public function getEventBudget()
    {
        return $this->eventBudget;
    }

    /**
     * Sets a new eventBudget
     *
     * A general indication of the planner's budget for the event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventBudgetAType[]
     * $eventBudget
     * @return self
     */
    public function setEventBudget(array $eventBudget)
    {
        $this->eventBudget = $eventBudget;

        return $this;
    }

    /**
     * Gets as eventDays
     *
     * A collection of multiple EventDays.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType
     */
    public function getEventDays()
    {
        return $this->eventDays;
    }

    /**
     * Sets a new eventDays
     *
     * A collection of multiple EventDays.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType
     * $eventDays
     * @return self
     */
    public function setEventDays(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType $eventDays
    ) {
        $this->eventDays = $eventDays;

        return $this;
    }

    /**
     * Adds as exhibition
     *
     * Describes an event at which products and services are displayed, typically the
     * primary activity of attendees is visiting exhibits on the show floor.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\ExhibitionAType
     * $exhibition
     */
    public function addToExhibition(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\ExhibitionAType $exhibition
    ) {
        $this->exhibition[] = $exhibition;

        return $this;
    }

    /**
     * isset exhibition
     *
     * Describes an event at which products and services are displayed, typically the
     * primary activity of attendees is visiting exhibits on the show floor.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExhibition($index)
    {
        return isset($this->exhibition[$index]);
    }

    /**
     * unset exhibition
     *
     * Describes an event at which products and services are displayed, typically the
     * primary activity of attendees is visiting exhibits on the show floor.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExhibition($index)
    {
        unset($this->exhibition[$index]);
    }

    /**
     * Gets as exhibition
     *
     * Describes an event at which products and services are displayed, typically the
     * primary activity of attendees is visiting exhibits on the show floor.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\ExhibitionAType[]
     */
    public function getExhibition()
    {
        return $this->exhibition;
    }

    /**
     * Sets a new exhibition
     *
     * Describes an event at which products and services are displayed, typically the
     * primary activity of attendees is visiting exhibits on the show floor.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\ExhibitionAType[]
     * $exhibition
     * @return self
     */
    public function setExhibition(array $exhibition)
    {
        $this->exhibition = $exhibition;

        return $this;
    }

    /**
     * Adds as comments
     *
     * An open field to comment on the event block.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comments
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * isset comments
     *
     * An open field to comment on the event block.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * An open field to comment on the event block.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * An open field to comment on the event block.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * An open field to comment on the event block.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}

