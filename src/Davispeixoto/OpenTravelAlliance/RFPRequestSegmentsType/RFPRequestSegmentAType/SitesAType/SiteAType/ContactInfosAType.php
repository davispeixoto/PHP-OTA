<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType;

/**
 * Class representing ContactInfosAType
 */
class ContactInfosAType
{

    /**
     * This is who recieves the requested information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $contactInfo
     */
    private $contactInfo = null;

    /**
     * Adds as contactInfo
     *
     * This is who recieves the requested information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $contactInfo
     */
    public function addToContactInfo(\Davispeixoto\OpenTravelAlliance\ContactPersonType $contactInfo)
    {
        $this->contactInfo[] = $contactInfo;

        return $this;
    }

    /**
     * isset contactInfo
     *
     * This is who recieves the requested information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContactInfo($index)
    {
        return isset($this->contactInfo[$index]);
    }

    /**
     * unset contactInfo
     *
     * This is who recieves the requested information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContactInfo($index)
    {
        unset($this->contactInfo[$index]);
    }

    /**
     * Gets as contactInfo
     *
     * This is who recieves the requested information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType[]
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * Sets a new contactInfo
     *
     * This is who recieves the requested information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $contactInfo
     * @return self
     */
    public function setContactInfo(array $contactInfo)
    {
        $this->contactInfo = $contactInfo;

        return $this;
    }


}

