<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType;

/**
 * Class representing EventAType
 */
class EventAType
{

    /**
     * When true, indicates the response should include data only for the most recent
     * event held. When false, indicates the response should include data for all
     * events that match the request criteria.
     *
     * @property boolean $mostRecentEventIndicator
     */
    private $mostRecentEventIndicator = null;

    /**
     * The name of the event host company or the name of the meeting planner for the
     * event.
     *
     * @property string $eventHostName
     */
    private $eventHostName = null;

    /**
     * Date or date range for this occurrence of this event (e.g., a single date or
     * date range may be used if a single occurrence of the event is requested;
     * multiple dates or date ranges may be used if the data being requested is for an
     * event that has been held more than once, such as an annual meeting).
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateTimeSpanType[] $date
     */
    private $date = null;

    /**
     * Identifier information for an individual event. This element repeats to
     * accommodate the IDs of multiple systems.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType\EventIdentifierAType[]
     * $eventIdentifier
     */
    private $eventIdentifier = null;

    /**
     * A collection of event sites.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType\EventSitesAType\EventSiteAType[]
     * $eventSites
     */
    private $eventSites = null;

    /**
     * Gets as mostRecentEventIndicator
     *
     * When true, indicates the response should include data only for the most recent
     * event held. When false, indicates the response should include data for all
     * events that match the request criteria.
     *
     * @return boolean
     */
    public function getMostRecentEventIndicator()
    {
        return $this->mostRecentEventIndicator;
    }

    /**
     * Sets a new mostRecentEventIndicator
     *
     * When true, indicates the response should include data only for the most recent
     * event held. When false, indicates the response should include data for all
     * events that match the request criteria.
     *
     * @param boolean $mostRecentEventIndicator
     * @return self
     */
    public function setMostRecentEventIndicator($mostRecentEventIndicator)
    {
        $this->mostRecentEventIndicator = $mostRecentEventIndicator;

        return $this;
    }

    /**
     * Gets as eventHostName
     *
     * The name of the event host company or the name of the meeting planner for the
     * event.
     *
     * @return string
     */
    public function getEventHostName()
    {
        return $this->eventHostName;
    }

    /**
     * Sets a new eventHostName
     *
     * The name of the event host company or the name of the meeting planner for the
     * event.
     *
     * @param string $eventHostName
     * @return self
     */
    public function setEventHostName($eventHostName)
    {
        $this->eventHostName = $eventHostName;

        return $this;
    }

    /**
     * Adds as date
     *
     * Date or date range for this occurrence of this event (e.g., a single date or
     * date range may be used if a single occurrence of the event is requested;
     * multiple dates or date ranges may be used if the data being requested is for an
     * event that has been held more than once, such as an annual meeting).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType $date
     */
    public function addToDate(\Davispeixoto\OpenTravelAlliance\DateTimeSpanType $date)
    {
        $this->date[] = $date;

        return $this;
    }

    /**
     * isset date
     *
     * Date or date range for this occurrence of this event (e.g., a single date or
     * date range may be used if a single occurrence of the event is requested;
     * multiple dates or date ranges may be used if the data being requested is for an
     * event that has been held more than once, such as an annual meeting).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDate($index)
    {
        return isset($this->date[$index]);
    }

    /**
     * unset date
     *
     * Date or date range for this occurrence of this event (e.g., a single date or
     * date range may be used if a single occurrence of the event is requested;
     * multiple dates or date ranges may be used if the data being requested is for an
     * event that has been held more than once, such as an annual meeting).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDate($index)
    {
        unset($this->date[$index]);
    }

    /**
     * Gets as date
     *
     * Date or date range for this occurrence of this event (e.g., a single date or
     * date range may be used if a single occurrence of the event is requested;
     * multiple dates or date ranges may be used if the data being requested is for an
     * event that has been held more than once, such as an annual meeting).
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateTimeSpanType[]
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Date or date range for this occurrence of this event (e.g., a single date or
     * date range may be used if a single occurrence of the event is requested;
     * multiple dates or date ranges may be used if the data being requested is for an
     * event that has been held more than once, such as an annual meeting).
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType[] $date
     * @return self
     */
    public function setDate(array $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Adds as eventIdentifier
     *
     * Identifier information for an individual event. This element repeats to
     * accommodate the IDs of multiple systems.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType\EventIdentifierAType
     * $eventIdentifier
     */
    public function addToEventIdentifier(
        \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType\EventIdentifierAType $eventIdentifier
    ) {
        $this->eventIdentifier[] = $eventIdentifier;

        return $this;
    }

    /**
     * isset eventIdentifier
     *
     * Identifier information for an individual event. This element repeats to
     * accommodate the IDs of multiple systems.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEventIdentifier($index)
    {
        return isset($this->eventIdentifier[$index]);
    }

    /**
     * unset eventIdentifier
     *
     * Identifier information for an individual event. This element repeats to
     * accommodate the IDs of multiple systems.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEventIdentifier($index)
    {
        unset($this->eventIdentifier[$index]);
    }

    /**
     * Gets as eventIdentifier
     *
     * Identifier information for an individual event. This element repeats to
     * accommodate the IDs of multiple systems.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType\EventIdentifierAType[]
     */
    public function getEventIdentifier()
    {
        return $this->eventIdentifier;
    }

    /**
     * Sets a new eventIdentifier
     *
     * Identifier information for an individual event. This element repeats to
     * accommodate the IDs of multiple systems.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType\EventIdentifierAType[]
     * $eventIdentifier
     * @return self
     */
    public function setEventIdentifier(array $eventIdentifier)
    {
        $this->eventIdentifier = $eventIdentifier;

        return $this;
    }

    /**
     * Adds as eventSite
     *
     * A collection of event sites.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType\EventSitesAType\EventSiteAType
     * $eventSite
     */
    public function addToEventSites(
        \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType\EventSitesAType\EventSiteAType $eventSite
    ) {
        $this->eventSites[] = $eventSite;

        return $this;
    }

    /**
     * isset eventSites
     *
     * A collection of event sites.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEventSites($index)
    {
        return isset($this->eventSites[$index]);
    }

    /**
     * unset eventSites
     *
     * A collection of event sites.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEventSites($index)
    {
        unset($this->eventSites[$index]);
    }

    /**
     * Gets as eventSites
     *
     * A collection of event sites.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType\EventSitesAType\EventSiteAType[]
     */
    public function getEventSites()
    {
        return $this->eventSites;
    }

    /**
     * Sets a new eventSites
     *
     * A collection of event sites.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\EventsAType\EventAType\EventSitesAType\EventSiteAType[]
     * $eventSites
     * @return self
     */
    public function setEventSites(array $eventSites)
    {
        $this->eventSites = $eventSites;

        return $this;
    }


}

