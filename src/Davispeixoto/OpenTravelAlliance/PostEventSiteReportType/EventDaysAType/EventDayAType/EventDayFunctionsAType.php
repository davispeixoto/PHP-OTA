<?php

namespace Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType;

/**
 * Class representing EventDayFunctionsAType
 */
class EventDayFunctionsAType
{

    /**
     * The requirements for the function.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType[]
     * $eventDayFunction
     */
    private $eventDayFunction = null;

    /**
     * Adds as eventDayFunction
     *
     * The requirements for the function.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType
     * $eventDayFunction
     */
    public function addToEventDayFunction(
        \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType $eventDayFunction
    ) {
        $this->eventDayFunction[] = $eventDayFunction;

        return $this;
    }

    /**
     * isset eventDayFunction
     *
     * The requirements for the function.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEventDayFunction($index)
    {
        return isset($this->eventDayFunction[$index]);
    }

    /**
     * unset eventDayFunction
     *
     * The requirements for the function.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEventDayFunction($index)
    {
        unset($this->eventDayFunction[$index]);
    }

    /**
     * Gets as eventDayFunction
     *
     * The requirements for the function.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType[]
     */
    public function getEventDayFunction()
    {
        return $this->eventDayFunction;
    }

    /**
     * Sets a new eventDayFunction
     *
     * The requirements for the function.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType[]
     * $eventDayFunction
     * @return self
     */
    public function setEventDayFunction(array $eventDayFunction)
    {
        $this->eventDayFunction = $eventDayFunction;

        return $this;
    }


}

