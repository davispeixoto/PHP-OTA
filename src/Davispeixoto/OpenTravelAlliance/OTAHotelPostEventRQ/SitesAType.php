<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ;

/**
 * Class representing SitesAType
 */
class SitesAType
{

    /**
     * A location for which a post event report is being requested.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\SitesAType\SiteAType[]
     * $site
     */
    private $site = null;

    /**
     * Date or date range for this site or sites.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateTimeSpanType[] $date
     */
    private $date = null;

    /**
     * Adds as site
     *
     * A location for which a post event report is being requested.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\SitesAType\SiteAType
     * $site
     */
    public function addToSite(\Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\SitesAType\SiteAType $site)
    {
        $this->site[] = $site;

        return $this;
    }

    /**
     * isset site
     *
     * A location for which a post event report is being requested.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSite($index)
    {
        return isset($this->site[$index]);
    }

    /**
     * unset site
     *
     * A location for which a post event report is being requested.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSite($index)
    {
        unset($this->site[$index]);
    }

    /**
     * Gets as site
     *
     * A location for which a post event report is being requested.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\SitesAType\SiteAType[]
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * A location for which a post event report is being requested.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelPostEventRQ\SitesAType\SiteAType[]
     * $site
     * @return self
     */
    public function setSite(array $site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Adds as date
     *
     * Date or date range for this site or sites.
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
     * Date or date range for this site or sites.
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
     * Date or date range for this site or sites.
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
     * Date or date range for this site or sites.
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
     * Date or date range for this site or sites.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType[] $date
     * @return self
     */
    public function setDate(array $date)
    {
        $this->date = $date;

        return $this;
    }


}

