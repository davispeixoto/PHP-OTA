<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType;

/**
 * Class representing EventBlockAType
 */
class EventBlockAType
{

    /**
     * Used to identify the event.
     *
     * @property string $eventName
     */
    private $eventName = null;

    /**
     * A collection of multiple EventDates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType[]
     * $eventDates
     */
    private $eventDates = null;

    /**
     * An open field to comment on the event block.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comment
     */
    private $comment = null;

    /**
     * Gets as eventName
     *
     * Used to identify the event.
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
     * Used to identify the event.
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
     * Adds as eventDate
     *
     * A collection of multiple EventDates.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType
     * $eventDate
     */
    public function addToEventDates(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType $eventDate
    ) {
        $this->eventDates[] = $eventDate;

        return $this;
    }

    /**
     * isset eventDates
     *
     * A collection of multiple EventDates.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEventDates($index)
    {
        return isset($this->eventDates[$index]);
    }

    /**
     * unset eventDates
     *
     * A collection of multiple EventDates.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEventDates($index)
    {
        unset($this->eventDates[$index]);
    }

    /**
     * Gets as eventDates
     *
     * A collection of multiple EventDates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType[]
     */
    public function getEventDates()
    {
        return $this->eventDates;
    }

    /**
     * Sets a new eventDates
     *
     * A collection of multiple EventDates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType[]
     * $eventDates
     * @return self
     */
    public function setEventDates(array $eventDates)
    {
        $this->eventDates = $eventDates;

        return $this;
    }

    /**
     * Adds as comment
     *
     * An open field to comment on the event block.
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
     * An open field to comment on the event block.
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
     * An open field to comment on the event block.
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
     * An open field to comment on the event block.
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
     * An open field to comment on the event block.
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

