<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType;

/**
 * Class representing EventSitesAType
 */
class EventSitesAType
{

    /**
     * Site or group of sites for which a post event report is being requested.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType\EventSitesAType\EventSiteAType[]
     * $eventSite
     */
    private $eventSite = null;

    /**
     * Adds as eventSite
     *
     * Site or group of sites for which a post event report is being requested.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType\EventSitesAType\EventSiteAType
     * $eventSite
     */
    public function addToEventSite(
        \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType\EventSitesAType\EventSiteAType $eventSite
    ) {
        $this->eventSite[] = $eventSite;

        return $this;
    }

    /**
     * isset eventSite
     *
     * Site or group of sites for which a post event report is being requested.
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
     * Site or group of sites for which a post event report is being requested.
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
     * Site or group of sites for which a post event report is being requested.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType\EventSitesAType\EventSiteAType[]
     */
    public function getEventSite()
    {
        return $this->eventSite;
    }

    /**
     * Sets a new eventSite
     *
     * Site or group of sites for which a post event report is being requested.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType\EventSitesAType\EventSiteAType[]
     * $eventSite
     * @return self
     */
    public function setEventSite(array $eventSite)
    {
        $this->eventSite = $eventSite;

        return $this;
    }


}

