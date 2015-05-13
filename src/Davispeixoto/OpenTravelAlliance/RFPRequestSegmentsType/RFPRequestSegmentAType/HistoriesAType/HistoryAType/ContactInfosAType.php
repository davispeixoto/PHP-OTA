<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType;

/**
 * Class representing ContactInfosAType
 */
class ContactInfosAType
{

    /**
     * This is the previous contact for the past event. This information would be
     * useful to make follow-up requests of information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $contactInfo
     */
    private $contactInfo = null;

    /**
     * Adds as contactInfo
     *
     * This is the previous contact for the past event. This information would be
     * useful to make follow-up requests of information.
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
     * This is the previous contact for the past event. This information would be
     * useful to make follow-up requests of information.
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
     * This is the previous contact for the past event. This information would be
     * useful to make follow-up requests of information.
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
     * This is the previous contact for the past event. This information would be
     * useful to make follow-up requests of information.
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
     * This is the previous contact for the past event. This information would be
     * useful to make follow-up requests of information.
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

