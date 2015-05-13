<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType;

/**
 * Class representing EventDayAType
 */
class EventDayAType
{

    /**
     * The number which indicates the day of the event (e.g. 1, 2, 3, etc).
     *
     * @property integer $dayNumber
     */
    private $dayNumber = null;

    /**
     * A collection of multiple EventDayFunctions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType[]
     * $eventDayFunctions
     */
    private $eventDayFunctions = null;

    /**
     * Gets as dayNumber
     *
     * The number which indicates the day of the event (e.g. 1, 2, 3, etc).
     *
     * @return integer
     */
    public function getDayNumber()
    {
        return $this->dayNumber;
    }

    /**
     * Sets a new dayNumber
     *
     * The number which indicates the day of the event (e.g. 1, 2, 3, etc).
     *
     * @param integer $dayNumber
     * @return self
     */
    public function setDayNumber($dayNumber)
    {
        $this->dayNumber = $dayNumber;

        return $this;
    }

    /**
     * Adds as eventDayFunction
     *
     * A collection of multiple EventDayFunctions.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType
     * $eventDayFunction
     */
    public function addToEventDayFunctions(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType $eventDayFunction
    ) {
        $this->eventDayFunctions[] = $eventDayFunction;

        return $this;
    }

    /**
     * isset eventDayFunctions
     *
     * A collection of multiple EventDayFunctions.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEventDayFunctions($index)
    {
        return isset($this->eventDayFunctions[$index]);
    }

    /**
     * unset eventDayFunctions
     *
     * A collection of multiple EventDayFunctions.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEventDayFunctions($index)
    {
        unset($this->eventDayFunctions[$index]);
    }

    /**
     * Gets as eventDayFunctions
     *
     * A collection of multiple EventDayFunctions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType[]
     */
    public function getEventDayFunctions()
    {
        return $this->eventDayFunctions;
    }

    /**
     * Sets a new eventDayFunctions
     *
     * A collection of multiple EventDayFunctions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType[]
     * $eventDayFunctions
     * @return self
     */
    public function setEventDayFunctions(array $eventDayFunctions)
    {
        $this->eventDayFunctions = $eventDayFunctions;

        return $this;
    }


}

