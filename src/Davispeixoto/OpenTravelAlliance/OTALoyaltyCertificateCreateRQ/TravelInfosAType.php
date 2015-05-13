<?php

namespace Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateCreateRQ;

/**
 * Class representing TravelInfosAType
 */
class TravelInfosAType
{

    /**
     * Information about the customers trip, including hotel stay, air flight, car
     * rental, tour/activity, rail and ground transportation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType[] $travelInfo
     */
    private $travelInfo = null;

    /**
     * Information about the customers loyalty program and certificates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateCreateRQ\TravelInfosAType\LoyaltyCertificateDetailAType[]
     * $loyaltyCertificateDetail
     */
    private $loyaltyCertificateDetail = null;

    /**
     * Adds as travelInfo
     *
     * Information about the customers trip, including hotel stay, air flight, car
     * rental, tour/activity, rail and ground transportation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType $travelInfo
     */
    public function addToTravelInfo(\Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType $travelInfo)
    {
        $this->travelInfo[] = $travelInfo;

        return $this;
    }

    /**
     * isset travelInfo
     *
     * Information about the customers trip, including hotel stay, air flight, car
     * rental, tour/activity, rail and ground transportation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelInfo($index)
    {
        return isset($this->travelInfo[$index]);
    }

    /**
     * unset travelInfo
     *
     * Information about the customers trip, including hotel stay, air flight, car
     * rental, tour/activity, rail and ground transportation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelInfo($index)
    {
        unset($this->travelInfo[$index]);
    }

    /**
     * Gets as travelInfo
     *
     * Information about the customers trip, including hotel stay, air flight, car
     * rental, tour/activity, rail and ground transportation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType[]
     */
    public function getTravelInfo()
    {
        return $this->travelInfo;
    }

    /**
     * Sets a new travelInfo
     *
     * Information about the customers trip, including hotel stay, air flight, car
     * rental, tour/activity, rail and ground transportation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType[] $travelInfo
     * @return self
     */
    public function setTravelInfo(array $travelInfo)
    {
        $this->travelInfo = $travelInfo;

        return $this;
    }

    /**
     * Adds as loyaltyCertificateDetail
     *
     * Information about the customers loyalty program and certificates.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateCreateRQ\TravelInfosAType\LoyaltyCertificateDetailAType
     * $loyaltyCertificateDetail
     */
    public function addToLoyaltyCertificateDetail(
        \Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateCreateRQ\TravelInfosAType\LoyaltyCertificateDetailAType $loyaltyCertificateDetail
    ) {
        $this->loyaltyCertificateDetail[] = $loyaltyCertificateDetail;

        return $this;
    }

    /**
     * isset loyaltyCertificateDetail
     *
     * Information about the customers loyalty program and certificates.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLoyaltyCertificateDetail($index)
    {
        return isset($this->loyaltyCertificateDetail[$index]);
    }

    /**
     * unset loyaltyCertificateDetail
     *
     * Information about the customers loyalty program and certificates.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLoyaltyCertificateDetail($index)
    {
        unset($this->loyaltyCertificateDetail[$index]);
    }

    /**
     * Gets as loyaltyCertificateDetail
     *
     * Information about the customers loyalty program and certificates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateCreateRQ\TravelInfosAType\LoyaltyCertificateDetailAType[]
     */
    public function getLoyaltyCertificateDetail()
    {
        return $this->loyaltyCertificateDetail;
    }

    /**
     * Sets a new loyaltyCertificateDetail
     *
     * Information about the customers loyalty program and certificates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateCreateRQ\TravelInfosAType\LoyaltyCertificateDetailAType[]
     * $loyaltyCertificateDetail
     * @return self
     */
    public function setLoyaltyCertificateDetail(array $loyaltyCertificateDetail)
    {
        $this->loyaltyCertificateDetail = $loyaltyCertificateDetail;

        return $this;
    }


}

