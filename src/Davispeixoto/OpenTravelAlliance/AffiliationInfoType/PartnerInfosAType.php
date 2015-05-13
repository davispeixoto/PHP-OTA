<?php

namespace Davispeixoto\OpenTravelAlliance\AffiliationInfoType;

/**
 * Class representing PartnerInfosAType
 */
class PartnerInfosAType
{

    /**
     * Provides information on marketing and service partnerships (e.g., a theme park
     * that offers discounts if you book this hotel). This is not a loyalty
     * partnership.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\PartnerInfosAType\PartnerInfoAType[]
     * $partnerInfo
     */
    private $partnerInfo = null;

    /**
     * Adds as partnerInfo
     *
     * Provides information on marketing and service partnerships (e.g., a theme park
     * that offers discounts if you book this hotel). This is not a loyalty
     * partnership.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\PartnerInfosAType\PartnerInfoAType
     * $partnerInfo
     */
    public function addToPartnerInfo(
        \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\PartnerInfosAType\PartnerInfoAType $partnerInfo
    ) {
        $this->partnerInfo[] = $partnerInfo;

        return $this;
    }

    /**
     * isset partnerInfo
     *
     * Provides information on marketing and service partnerships (e.g., a theme park
     * that offers discounts if you book this hotel). This is not a loyalty
     * partnership.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPartnerInfo($index)
    {
        return isset($this->partnerInfo[$index]);
    }

    /**
     * unset partnerInfo
     *
     * Provides information on marketing and service partnerships (e.g., a theme park
     * that offers discounts if you book this hotel). This is not a loyalty
     * partnership.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPartnerInfo($index)
    {
        unset($this->partnerInfo[$index]);
    }

    /**
     * Gets as partnerInfo
     *
     * Provides information on marketing and service partnerships (e.g., a theme park
     * that offers discounts if you book this hotel). This is not a loyalty
     * partnership.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\PartnerInfosAType\PartnerInfoAType[]
     */
    public function getPartnerInfo()
    {
        return $this->partnerInfo;
    }

    /**
     * Sets a new partnerInfo
     *
     * Provides information on marketing and service partnerships (e.g., a theme park
     * that offers discounts if you book this hotel). This is not a loyalty
     * partnership.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\PartnerInfosAType\PartnerInfoAType[]
     * $partnerInfo
     * @return self
     */
    public function setPartnerInfo(array $partnerInfo)
    {
        $this->partnerInfo = $partnerInfo;

        return $this;
    }


}

