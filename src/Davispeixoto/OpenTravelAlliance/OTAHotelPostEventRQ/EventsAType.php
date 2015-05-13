<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ;

/**
 * Class representing EventsAType
 */
class EventsAType
{

    /**
     * The event for which the post event report is being requested.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType[]
     * $event
     */
    private $event = null;

    /**
     * Adds as event
     *
     * The event for which the post event report is being requested.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType
     * $event
     */
    public function addToEvent(\Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType $event)
    {
        $this->event[] = $event;

        return $this;
    }

    /**
     * isset event
     *
     * The event for which the post event report is being requested.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEvent($index)
    {
        return isset($this->event[$index]);
    }

    /**
     * unset event
     *
     * The event for which the post event report is being requested.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEvent($index)
    {
        unset($this->event[$index]);
    }

    /**
     * Gets as event
     *
     * The event for which the post event report is being requested.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * The event for which the post event report is being requested.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType[]
     * $event
     * @return self
     */
    public function setEvent(array $event)
    {
        $this->event = $event;

        return $this;
    }


}

