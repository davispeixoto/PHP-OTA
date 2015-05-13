<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType;

/**
 * Class representing EventInfosAType
 */
class EventInfosAType
{

    /**
     * Details regarding a particular occurence of an event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType[]
     * $eventInfo
     */
    private $eventInfo = null;

    /**
     * Adds as eventInfo
     *
     * Details regarding a particular occurence of an event.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType
     * $eventInfo
     */
    public function addToEventInfo(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType $eventInfo
    ) {
        $this->eventInfo[] = $eventInfo;

        return $this;
    }

    /**
     * isset eventInfo
     *
     * Details regarding a particular occurence of an event.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEventInfo($index)
    {
        return isset($this->eventInfo[$index]);
    }

    /**
     * unset eventInfo
     *
     * Details regarding a particular occurence of an event.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEventInfo($index)
    {
        unset($this->eventInfo[$index]);
    }

    /**
     * Gets as eventInfo
     *
     * Details regarding a particular occurence of an event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType[]
     */
    public function getEventInfo()
    {
        return $this->eventInfo;
    }

    /**
     * Sets a new eventInfo
     *
     * Details regarding a particular occurence of an event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType[]
     * $eventInfo
     * @return self
     */
    public function setEventInfo(array $eventInfo)
    {
        $this->eventInfo = $eventInfo;

        return $this;
    }


}

