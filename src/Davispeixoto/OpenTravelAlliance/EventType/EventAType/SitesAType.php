<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType;

/**
 * Class representing SitesAType
 */
class SitesAType
{

    /**
     * Identifies the site where functions for the event will be held.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType[]
     * $site
     */
    private $site = null;

    /**
     * Adds as site
     *
     * Identifies the site where functions for the event will be held.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType $site
     */
    public function addToSite(\Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType $site)
    {
        $this->site[] = $site;

        return $this;
    }

    /**
     * isset site
     *
     * Identifies the site where functions for the event will be held.
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
     * Identifies the site where functions for the event will be held.
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
     * Identifies the site where functions for the event will be held.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType[]
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * Identifies the site where functions for the event will be held.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType[]
     * $site
     * @return self
     */
    public function setSite(array $site)
    {
        $this->site = $site;

        return $this;
    }


}

