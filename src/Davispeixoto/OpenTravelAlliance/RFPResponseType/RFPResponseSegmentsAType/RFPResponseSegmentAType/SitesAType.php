<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType;

/**
 * Class representing SitesAType
 */
class SitesAType
{

    /**
     * Specifies an individual destination of the response.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType[]
     * $site
     */
    private $site = null;

    /**
     * Adds as site
     *
     * Specifies an individual destination of the response.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType
     * $site
     */
    public function addToSite(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType $site
    ) {
        $this->site[] = $site;

        return $this;
    }

    /**
     * isset site
     *
     * Specifies an individual destination of the response.
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
     * Specifies an individual destination of the response.
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
     * Specifies an individual destination of the response.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType[]
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * Specifies an individual destination of the response.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType[]
     * $site
     * @return self
     */
    public function setSite(array $site)
    {
        $this->site = $site;

        return $this;
    }


}

