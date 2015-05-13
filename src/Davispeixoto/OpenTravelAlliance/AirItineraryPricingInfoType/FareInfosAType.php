<?php

namespace Davispeixoto\OpenTravelAlliance\AirItineraryPricingInfoType;

/**
 * Class representing FareInfosAType
 */
class FareInfosAType
{

    /**
     * Detailed information on individual priced fares
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirItineraryPricingInfoType\FareInfosAType\FareInfoAType[]
     * $fareInfo
     */
    private $fareInfo = null;

    /**
     * Adds as fareInfo
     *
     * Detailed information on individual priced fares
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirItineraryPricingInfoType\FareInfosAType\FareInfoAType
     * $fareInfo
     */
    public function addToFareInfo(
        \Davispeixoto\OpenTravelAlliance\AirItineraryPricingInfoType\FareInfosAType\FareInfoAType $fareInfo
    ) {
        $this->fareInfo[] = $fareInfo;

        return $this;
    }

    /**
     * isset fareInfo
     *
     * Detailed information on individual priced fares
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareInfo($index)
    {
        return isset($this->fareInfo[$index]);
    }

    /**
     * unset fareInfo
     *
     * Detailed information on individual priced fares
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareInfo($index)
    {
        unset($this->fareInfo[$index]);
    }

    /**
     * Gets as fareInfo
     *
     * Detailed information on individual priced fares
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirItineraryPricingInfoType\FareInfosAType\FareInfoAType[]
     */
    public function getFareInfo()
    {
        return $this->fareInfo;
    }

    /**
     * Sets a new fareInfo
     *
     * Detailed information on individual priced fares
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirItineraryPricingInfoType\FareInfosAType\FareInfoAType[]
     * $fareInfo
     * @return self
     */
    public function setFareInfo(array $fareInfo)
    {
        $this->fareInfo = $fareInfo;

        return $this;
    }


}

