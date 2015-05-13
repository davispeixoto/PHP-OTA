<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType;

/**
 * Class representing EventDaysAType
 */
class EventDaysAType
{

    /**
     * This is used to identify the first day of the event block.
     *
     * @property string $firstEventDayOfWeek
     */
    private $firstEventDayOfWeek = null;

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType[]
     * $eventDay
     */
    private $eventDay = null;

    /**
     * Gets as firstEventDayOfWeek
     *
     * This is used to identify the first day of the event block.
     *
     * @return string
     */
    public function getFirstEventDayOfWeek()
    {
        return $this->firstEventDayOfWeek;
    }

    /**
     * Sets a new firstEventDayOfWeek
     *
     * This is used to identify the first day of the event block.
     *
     * @param string $firstEventDayOfWeek
     * @return self
     */
    public function setFirstEventDayOfWeek($firstEventDayOfWeek)
    {
        $this->firstEventDayOfWeek = $firstEventDayOfWeek;

        return $this;
    }

    /**
     * Adds as eventDay
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType
     * $eventDay
     */
    public function addToEventDay(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType $eventDay
    ) {
        $this->eventDay[] = $eventDay;

        return $this;
    }

    /**
     * isset eventDay
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEventDay($index)
    {
        return isset($this->eventDay[$index]);
    }

    /**
     * unset eventDay
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEventDay($index)
    {
        unset($this->eventDay[$index]);
    }

    /**
     * Gets as eventDay
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType[]
     */
    public function getEventDay()
    {
        return $this->eventDay;
    }

    /**
     * Sets a new eventDay
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType[]
     * $eventDay
     * @return self
     */
    public function setEventDay(array $eventDay)
    {
        $this->eventDay = $eventDay;

        return $this;
    }


}

