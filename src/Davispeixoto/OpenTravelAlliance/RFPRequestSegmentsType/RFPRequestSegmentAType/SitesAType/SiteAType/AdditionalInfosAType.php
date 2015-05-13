<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType;

/**
 * Class representing AdditionalInfosAType
 */
class AdditionalInfosAType
{

    /**
     * A request for additional information and the required delivery method.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType[]
     * $additionalInfo
     */
    private $additionalInfo = null;

    /**
     * Adds as additionalInfo
     *
     * A request for additional information and the required delivery method.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType
     * $additionalInfo
     */
    public function addToAdditionalInfo(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType $additionalInfo
    ) {
        $this->additionalInfo[] = $additionalInfo;

        return $this;
    }

    /**
     * isset additionalInfo
     *
     * A request for additional information and the required delivery method.
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
     * A request for additional information and the required delivery method.
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
     * A request for additional information and the required delivery method.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType[]
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * Sets a new additionalInfo
     *
     * A request for additional information and the required delivery method.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType[]
     * $additionalInfo
     * @return self
     */
    public function setAdditionalInfo(array $additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }


}

