<?php

namespace Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateRedemptionRQ\RedemptionInfoAType;

/**
 * Class representing TravelInfosAType
 */
class TravelInfosAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType[] $travelInfo
     */
    private $travelInfo = null;

    /**
     * Adds as travelInfo
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
     * @return \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType[]
     */
    public function getTravelInfo()
    {
        return $this->travelInfo;
    }

    /**
     * Sets a new travelInfo
     *
     * @param \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType[] $travelInfo
     * @return self
     */
    public function setTravelInfo(array $travelInfo)
    {
        $this->travelInfo = $travelInfo;

        return $this;
    }


}

