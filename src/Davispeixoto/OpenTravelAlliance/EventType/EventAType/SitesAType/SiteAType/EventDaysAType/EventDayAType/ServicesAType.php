<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType;

/**
 * Class representing ServicesAType
 */
class ServicesAType
{

    /**
     * Details regarding additional services (e.g., security, first aid).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\ServicesAType\ServiceAType[]
     * $service
     */
    private $service = null;

    /**
     * Adds as service
     *
     * Details regarding additional services (e.g., security, first aid).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\ServicesAType\ServiceAType
     * $service
     */
    public function addToService(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\ServicesAType\ServiceAType $service
    ) {
        $this->service[] = $service;

        return $this;
    }

    /**
     * isset service
     *
     * Details regarding additional services (e.g., security, first aid).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service
     *
     * Details regarding additional services (e.g., security, first aid).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetService($index)
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service
     *
     * Details regarding additional services (e.g., security, first aid).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\ServicesAType\ServiceAType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * Details regarding additional services (e.g., security, first aid).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\ServicesAType\ServiceAType[]
     * $service
     * @return self
     */
    public function setService(array $service)
    {
        $this->service = $service;

        return $this;
    }


}

