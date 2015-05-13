<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType;

/**
 * Class representing ContactInfosAType
 */
class ContactInfosAType
{

    /**
     * A contact for this site for this specific RFP.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType $contactInfo
     */
    private $contactInfo = null;

    /**
     * Gets as contactInfo
     *
     * A contact for this site for this specific RFP.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * Sets a new contactInfo
     *
     * A contact for this site for this specific RFP.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $contactInfo
     * @return self
     */
    public function setContactInfo(\Davispeixoto\OpenTravelAlliance\ContactPersonType $contactInfo)
    {
        $this->contactInfo = $contactInfo;

        return $this;
    }


}

