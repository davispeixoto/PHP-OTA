<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType;

/**
 * Class representing InsuranceInfosAType
 */
class InsuranceInfosAType
{

    /**
     * Indicates the type of insurance that the site carries and the coverage amount.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\InsuranceInfosAType\InsuranceInfoAType[]
     * $insuranceInfo
     */
    private $insuranceInfo = null;

    /**
     * An open field to comment on insurance information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Adds as insuranceInfo
     *
     * Indicates the type of insurance that the site carries and the coverage amount.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\InsuranceInfosAType\InsuranceInfoAType
     * $insuranceInfo
     */
    public function addToInsuranceInfo(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\InsuranceInfosAType\InsuranceInfoAType $insuranceInfo
    ) {
        $this->insuranceInfo[] = $insuranceInfo;

        return $this;
    }

    /**
     * isset insuranceInfo
     *
     * Indicates the type of insurance that the site carries and the coverage amount.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInsuranceInfo($index)
    {
        return isset($this->insuranceInfo[$index]);
    }

    /**
     * unset insuranceInfo
     *
     * Indicates the type of insurance that the site carries and the coverage amount.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInsuranceInfo($index)
    {
        unset($this->insuranceInfo[$index]);
    }

    /**
     * Gets as insuranceInfo
     *
     * Indicates the type of insurance that the site carries and the coverage amount.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\InsuranceInfosAType\InsuranceInfoAType[]
     */
    public function getInsuranceInfo()
    {
        return $this->insuranceInfo;
    }

    /**
     * Sets a new insuranceInfo
     *
     * Indicates the type of insurance that the site carries and the coverage amount.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\InsuranceInfosAType\InsuranceInfoAType[]
     * $insuranceInfo
     * @return self
     */
    public function setInsuranceInfo(array $insuranceInfo)
    {
        $this->insuranceInfo = $insuranceInfo;

        return $this;
    }

    /**
     * Adds as comments
     *
     * An open field to comment on insurance information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comments
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * isset comments
     *
     * An open field to comment on insurance information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * An open field to comment on insurance information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * An open field to comment on insurance information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * An open field to comment on insurance information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}

