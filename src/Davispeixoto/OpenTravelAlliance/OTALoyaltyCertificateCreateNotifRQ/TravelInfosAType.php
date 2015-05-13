<?php

namespace Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateCreateNotifRQ;

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
     * \Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateCreateNotifRQ\TravelInfosAType\CertificateNumberAType
     * $certificateNumber
     */
    private $certificateNumber = null;

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
     * Gets as certificateNumber
     *
     * Information about the customers loyalty program and certificates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateCreateNotifRQ\TravelInfosAType\CertificateNumberAType
     */
    public function getCertificateNumber()
    {
        return $this->certificateNumber;
    }

    /**
     * Sets a new certificateNumber
     *
     * Information about the customers loyalty program and certificates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateCreateNotifRQ\TravelInfosAType\CertificateNumberAType
     * $certificateNumber
     * @return self
     */
    public function setCertificateNumber(
        \Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateCreateNotifRQ\TravelInfosAType\CertificateNumberAType $certificateNumber
    ) {
        $this->certificateNumber = $certificateNumber;

        return $this;
    }


}

