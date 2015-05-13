<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType;

/**
 * Class representing SitesAType
 */
class SitesAType
{

    /**
     * Specifies an individual destination of the request.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType[]
     * $site
     */
    private $site = null;

    /**
     * Adds as site
     *
     * Specifies an individual destination of the request.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType
     * $site
     */
    public function addToSite(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType $site
    ) {
        $this->site[] = $site;

        return $this;
    }

    /**
     * isset site
     *
     * Specifies an individual destination of the request.
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
     * Specifies an individual destination of the request.
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
     * Specifies an individual destination of the request.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType[]
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * Specifies an individual destination of the request.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType[]
     * $site
     * @return self
     */
    public function setSite(array $site)
    {
        $this->site = $site;

        return $this;
    }


}

