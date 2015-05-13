<?php

namespace Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateRedemptionRQ;

/**
 * Class representing RedemptionInfoAType
 */
class RedemptionInfoAType
{

    /**
     * Detailed redemption information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateRedemptionRQ\RedemptionInfoAType\RedemptionDetailAType
     * $redemptionDetail
     */
    private $redemptionDetail = null;

    /**
     * Information about the individual associated with the loyalty program.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $customer
     */
    private $customer = null;

    /**
     * Information about the customers trip and loyalty program.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType[] $travelInfos
     */
    private $travelInfos = null;

    /**
     * Gets as redemptionDetail
     *
     * Detailed redemption information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateRedemptionRQ\RedemptionInfoAType\RedemptionDetailAType
     */
    public function getRedemptionDetail()
    {
        return $this->redemptionDetail;
    }

    /**
     * Sets a new redemptionDetail
     *
     * Detailed redemption information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateRedemptionRQ\RedemptionInfoAType\RedemptionDetailAType
     * $redemptionDetail
     * @return self
     */
    public function setRedemptionDetail(
        \Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateRedemptionRQ\RedemptionInfoAType\RedemptionDetailAType $redemptionDetail
    ) {
        $this->redemptionDetail = $redemptionDetail;

        return $this;
    }

    /**
     * Gets as customer
     *
     * Information about the individual associated with the loyalty program.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * Information about the individual associated with the loyalty program.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $customer
     * @return self
     */
    public function setCustomer(\Davispeixoto\OpenTravelAlliance\PersonNameType $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Adds as travelInfo
     *
     * Information about the customers trip and loyalty program.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType $travelInfo
     */
    public function addToTravelInfos(\Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType $travelInfo)
    {
        $this->travelInfos[] = $travelInfo;

        return $this;
    }

    /**
     * isset travelInfos
     *
     * Information about the customers trip and loyalty program.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelInfos($index)
    {
        return isset($this->travelInfos[$index]);
    }

    /**
     * unset travelInfos
     *
     * Information about the customers trip and loyalty program.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelInfos($index)
    {
        unset($this->travelInfos[$index]);
    }

    /**
     * Gets as travelInfos
     *
     * Information about the customers trip and loyalty program.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType[]
     */
    public function getTravelInfos()
    {
        return $this->travelInfos;
    }

    /**
     * Sets a new travelInfos
     *
     * Information about the customers trip and loyalty program.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType[] $travelInfos
     * @return self
     */
    public function setTravelInfos(array $travelInfos)
    {
        $this->travelInfos = $travelInfos;

        return $this;
    }


}

