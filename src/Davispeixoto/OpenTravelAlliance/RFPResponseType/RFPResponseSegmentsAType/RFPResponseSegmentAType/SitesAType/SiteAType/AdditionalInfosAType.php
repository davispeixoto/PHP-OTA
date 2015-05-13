<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType;

/**
 * Class representing AdditionalInfosAType
 */
class AdditionalInfosAType
{

    /**
     * Details regarding the additional information and its delivery method.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType[]
     * $additionalInfo
     */
    private $additionalInfo = null;

    /**
     * Adds as additionalInfo
     *
     * Details regarding the additional information and its delivery method.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType
     * $additionalInfo
     */
    public function addToAdditionalInfo(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType $additionalInfo
    ) {
        $this->additionalInfo[] = $additionalInfo;

        return $this;
    }

    /**
     * isset additionalInfo
     *
     * Details regarding the additional information and its delivery method.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalInfo($index)
    {
        return isset($this->additionalInfo[$index]);
    }

    /**
     * unset additionalInfo
     *
     * Details regarding the additional information and its delivery method.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalInfo($index)
    {
        unset($this->additionalInfo[$index]);
    }

    /**
     * Gets as additionalInfo
     *
     * Details regarding the additional information and its delivery method.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType[]
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * Sets a new additionalInfo
     *
     * Details regarding the additional information and its delivery method.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType[]
     * $additionalInfo
     * @return self
     */
    public function setAdditionalInfo(array $additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }


}

