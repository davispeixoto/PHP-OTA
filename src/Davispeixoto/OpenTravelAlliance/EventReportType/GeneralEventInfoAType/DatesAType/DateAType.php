<?php

namespace Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType;

use Davispeixoto\OpenTravelAlliance\DateTimeSpanType;

/**
 * Class representing DateAType
 */
class DateAType extends DateTimeSpanType
{

    /**
     * When true, indicates that the event has already been contracted for these dates.
     *
     * @property boolean $contractedIndicator
     */
    private $contractedIndicator = null;

    /**
     * Used in conjunction with Start and End to identify the type of date.
     *
     * @property string $eventDateType
     */
    private $eventDateType = null;

    /**
     * Used to define requirements or preferences in location for the event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType[]
     * $locationCategories
     */
    private $locationCategories = null;

    /**
     * Collection of comments.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as contractedIndicator
     *
     * When true, indicates that the event has already been contracted for these dates.
     *
     * @return boolean
     */
    public function getContractedIndicator()
    {
        return $this->contractedIndicator;
    }

    /**
     * Sets a new contractedIndicator
     *
     * When true, indicates that the event has already been contracted for these dates.
     *
     * @param boolean $contractedIndicator
     * @return self
     */
    public function setContractedIndicator($contractedIndicator)
    {
        $this->contractedIndicator = $contractedIndicator;

        return $this;
    }

    /**
     * Gets as eventDateType
     *
     * Used in conjunction with Start and End to identify the type of date.
     *
     * @return string
     */
    public function getEventDateType()
    {
        return $this->eventDateType;
    }

    /**
     * Sets a new eventDateType
     *
     * Used in conjunction with Start and End to identify the type of date.
     *
     * @param string $eventDateType
     * @return self
     */
    public function setEventDateType($eventDateType)
    {
        $this->eventDateType = $eventDateType;

        return $this;
    }

    /**
     * Adds as locationCategories
     *
     * Used to define requirements or preferences in location for the event.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType
     * $locationCategories
     */
    public function addToLocationCategories(
        \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType $locationCategories
    ) {
        $this->locationCategories[] = $locationCategories;

        return $this;
    }

    /**
     * isset locationCategories
     *
     * Used to define requirements or preferences in location for the event.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLocationCategories($index)
    {
        return isset($this->locationCategories[$index]);
    }

    /**
     * unset locationCategories
     *
     * Used to define requirements or preferences in location for the event.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLocationCategories($index)
    {
        unset($this->locationCategories[$index]);
    }

    /**
     * Gets as locationCategories
     *
     * Used to define requirements or preferences in location for the event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType[]
     */
    public function getLocationCategories()
    {
        return $this->locationCategories;
    }

    /**
     * Sets a new locationCategories
     *
     * Used to define requirements or preferences in location for the event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType[]
     * $locationCategories
     * @return self
     */
    public function setLocationCategories(array $locationCategories)
    {
        $this->locationCategories = $locationCategories;

        return $this;
    }

    /**
     * Adds as comment
     *
     * Collection of comments.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * isset comments
     *
     * Collection of comments.
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
     * Collection of comments.
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
     * Collection of comments.
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
     * Collection of comments.
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

