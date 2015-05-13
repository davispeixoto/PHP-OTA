<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelRFPMeetingNotifRS\MessageIDAType\RFPIDsAType\RFPIDAType;

/**
 * Class representing SiteIDsAType
 */
class SiteIDsAType
{

    /**
     * Corresponds to the SiteID used in OTA_HotelRFP_RQ.xsd and
     * OTA_HotelRFP_NotifRQ.xsd. This is used to identify a particular Site in the RFP.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $siteID
     */
    private $siteID = null;

    /**
     * Adds as siteID
     *
     * Corresponds to the SiteID used in OTA_HotelRFP_RQ.xsd and
     * OTA_HotelRFP_NotifRQ.xsd. This is used to identify a particular Site in the RFP.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $siteID
     */
    public function addToSiteID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $siteID)
    {
        $this->siteID[] = $siteID;

        return $this;
    }

    /**
     * isset siteID
     *
     * Corresponds to the SiteID used in OTA_HotelRFP_RQ.xsd and
     * OTA_HotelRFP_NotifRQ.xsd. This is used to identify a particular Site in the RFP.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSiteID($index)
    {
        return isset($this->siteID[$index]);
    }

    /**
     * unset siteID
     *
     * Corresponds to the SiteID used in OTA_HotelRFP_RQ.xsd and
     * OTA_HotelRFP_NotifRQ.xsd. This is used to identify a particular Site in the RFP.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSiteID($index)
    {
        unset($this->siteID[$index]);
    }

    /**
     * Gets as siteID
     *
     * Corresponds to the SiteID used in OTA_HotelRFP_RQ.xsd and
     * OTA_HotelRFP_NotifRQ.xsd. This is used to identify a particular Site in the RFP.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getSiteID()
    {
        return $this->siteID;
    }

    /**
     * Sets a new siteID
     *
     * Corresponds to the SiteID used in OTA_HotelRFP_RQ.xsd and
     * OTA_HotelRFP_NotifRQ.xsd. This is used to identify a particular Site in the RFP.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $siteID
     * @return self
     */
    public function setSiteID(array $siteID)
    {
        $this->siteID = $siteID;

        return $this;
    }


}

