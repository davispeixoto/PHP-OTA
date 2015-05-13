<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelRFPMeetingNotifRS\MessageIDAType\RFPIDsAType;

use Davispeixoto\OpenTravelAlliance\UniqueIDType;

/**
 * Class representing RFPIDAType
 */
class RFPIDAType extends UniqueIDType
{

    /**
     * A collection of SiteID.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $siteIDs
     */
    private $siteIDs = null;

    /**
     * Adds as siteID
     *
     * A collection of SiteID.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $siteID
     */
    public function addToSiteIDs(\Davispeixoto\OpenTravelAlliance\UniqueIDType $siteID)
    {
        $this->siteIDs[] = $siteID;

        return $this;
    }

    /**
     * isset siteIDs
     *
     * A collection of SiteID.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSiteIDs($index)
    {
        return isset($this->siteIDs[$index]);
    }

    /**
     * unset siteIDs
     *
     * A collection of SiteID.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSiteIDs($index)
    {
        unset($this->siteIDs[$index]);
    }

    /**
     * Gets as siteIDs
     *
     * A collection of SiteID.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getSiteIDs()
    {
        return $this->siteIDs;
    }

    /**
     * Sets a new siteIDs
     *
     * A collection of SiteID.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $siteIDs
     * @return self
     */
    public function setSiteIDs(array $siteIDs)
    {
        $this->siteIDs = $siteIDs;

        return $this;
    }


}

