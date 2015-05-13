<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType;

/**
 * Class representing OffSiteTransportationsAType
 */
class OffSiteTransportationsAType
{

    /**
     * Transportation information for an off-site function.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType[]
     * $offSiteTransportation
     */
    private $offSiteTransportation = null;

    /**
     * Adds as offSiteTransportation
     *
     * Transportation information for an off-site function.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType
     * $offSiteTransportation
     */
    public function addToOffSiteTransportation(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType $offSiteTransportation
    ) {
        $this->offSiteTransportation[] = $offSiteTransportation;

        return $this;
    }

    /**
     * isset offSiteTransportation
     *
     * Transportation information for an off-site function.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOffSiteTransportation($index)
    {
        return isset($this->offSiteTransportation[$index]);
    }

    /**
     * unset offSiteTransportation
     *
     * Transportation information for an off-site function.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOffSiteTransportation($index)
    {
        unset($this->offSiteTransportation[$index]);
    }

    /**
     * Gets as offSiteTransportation
     *
     * Transportation information for an off-site function.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType[]
     */
    public function getOffSiteTransportation()
    {
        return $this->offSiteTransportation;
    }

    /**
     * Sets a new offSiteTransportation
     *
     * Transportation information for an off-site function.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType[]
     * $offSiteTransportation
     * @return self
     */
    public function setOffSiteTransportation(array $offSiteTransportation)
    {
        $this->offSiteTransportation = $offSiteTransportation;

        return $this;
    }


}

