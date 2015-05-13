<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType;

/**
 * Class representing EventDayAType
 */
class EventDayAType
{

    /**
     * The number which indicates the day of the event (e.g. 1, 2, 3). This is relative
     * to the Start attribute in the EventInfo element.
     *
     * @property integer $dayNumber
     */
    private $dayNumber = null;

    /**
     * A collection of multiple EventDayFunctions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType[]
     * $eventDayFunctions
     */
    private $eventDayFunctions = null;

    /**
     * A collection of services.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\ServicesAType\ServiceAType[]
     * $services
     */
    private $services = null;

    /**
     * A collection of off-site transportation data.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType[]
     * $offSiteTransportations
     */
    private $offSiteTransportations = null;

    /**
     * Gets as dayNumber
     *
     * The number which indicates the day of the event (e.g. 1, 2, 3). This is relative
     * to the Start attribute in the EventInfo element.
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
     * The number which indicates the day of the event (e.g. 1, 2, 3). This is relative
     * to the Start attribute in the EventInfo element.
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
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType
     * $eventDayFunction
     */
    public function addToEventDayFunctions(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType $eventDayFunction
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
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType[]
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
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType[]
     * $eventDayFunctions
     * @return self
     */
    public function setEventDayFunctions(array $eventDayFunctions)
    {
        $this->eventDayFunctions = $eventDayFunctions;

        return $this;
    }

    /**
     * Adds as service
     *
     * A collection of services.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\ServicesAType\ServiceAType
     * $service
     */
    public function addToServices(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\ServicesAType\ServiceAType $service
    ) {
        $this->services[] = $service;

        return $this;
    }

    /**
     * isset services
     *
     * A collection of services.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetServices($index)
    {
        return isset($this->services[$index]);
    }

    /**
     * unset services
     *
     * A collection of services.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetServices($index)
    {
        unset($this->services[$index]);
    }

    /**
     * Gets as services
     *
     * A collection of services.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\ServicesAType\ServiceAType[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Sets a new services
     *
     * A collection of services.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\ServicesAType\ServiceAType[]
     * $services
     * @return self
     */
    public function setServices(array $services)
    {
        $this->services = $services;

        return $this;
    }

    /**
     * Adds as offSiteTransportation
     *
     * A collection of off-site transportation data.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType
     * $offSiteTransportation
     */
    public function addToOffSiteTransportations(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType $offSiteTransportation
    ) {
        $this->offSiteTransportations[] = $offSiteTransportation;

        return $this;
    }

    /**
     * isset offSiteTransportations
     *
     * A collection of off-site transportation data.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOffSiteTransportations($index)
    {
        return isset($this->offSiteTransportations[$index]);
    }

    /**
     * unset offSiteTransportations
     *
     * A collection of off-site transportation data.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOffSiteTransportations($index)
    {
        unset($this->offSiteTransportations[$index]);
    }

    /**
     * Gets as offSiteTransportations
     *
     * A collection of off-site transportation data.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType[]
     */
    public function getOffSiteTransportations()
    {
        return $this->offSiteTransportations;
    }

    /**
     * Sets a new offSiteTransportations
     *
     * A collection of off-site transportation data.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType[]
     * $offSiteTransportations
     * @return self
     */
    public function setOffSiteTransportations(array $offSiteTransportations)
    {
        $this->offSiteTransportations = $offSiteTransportations;

        return $this;
    }


}

