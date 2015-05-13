<?php

namespace Davispeixoto\OpenTravelAlliance\EventReportType;

/**
 * Class representing EventSitesAType
 */
class EventSitesAType
{

    /**
     * A site utilized by the event.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType[] $eventSite
     */
    private $eventSite = null;

    /**
     * Adds as eventSite
     *
     * A site utilized by the event.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType $eventSite
     */
    public function addToEventSite(\Davispeixoto\OpenTravelAlliance\PostEventSiteReportType $eventSite)
    {
        $this->eventSite[] = $eventSite;

        return $this;
    }

    /**
     * isset eventSite
     *
     * A site utilized by the event.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEventSite($index)
    {
        return isset($this->eventSite[$index]);
    }

    /**
     * unset eventSite
     *
     * A site utilized by the event.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEventSite($index)
    {
        unset($this->eventSite[$index]);
    }

    /**
     * Gets as eventSite
     *
     * A site utilized by the event.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType[]
     */
    public function getEventSite()
    {
        return $this->eventSite;
    }

    /**
     * Sets a new eventSite
     *
     * A site utilized by the event.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType[] $eventSite
     * @return self
     */
    public function setEventSite(array $eventSite)
    {
        $this->eventSite = $eventSite;

        return $this;
    }


}

