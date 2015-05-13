<?php

namespace Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType;

/**
 * Class representing OtherServiceInformationsAType
 */
class OtherServiceInformationsAType
{

    /**
     * Other Service Information (OSI) for relevant airlines.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\OtherServiceInformationsAType\OtherServiceInformationAType[]
     * $otherServiceInformation
     */
    private $otherServiceInformation = null;

    /**
     * Adds as otherServiceInformation
     *
     * Other Service Information (OSI) for relevant airlines.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\OtherServiceInformationsAType\OtherServiceInformationAType
     * $otherServiceInformation
     */
    public function addToOtherServiceInformation(
        \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\OtherServiceInformationsAType\OtherServiceInformationAType $otherServiceInformation
    ) {
        $this->otherServiceInformation[] = $otherServiceInformation;

        return $this;
    }

    /**
     * isset otherServiceInformation
     *
     * Other Service Information (OSI) for relevant airlines.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOtherServiceInformation($index)
    {
        return isset($this->otherServiceInformation[$index]);
    }

    /**
     * unset otherServiceInformation
     *
     * Other Service Information (OSI) for relevant airlines.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOtherServiceInformation($index)
    {
        unset($this->otherServiceInformation[$index]);
    }

    /**
     * Gets as otherServiceInformation
     *
     * Other Service Information (OSI) for relevant airlines.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\OtherServiceInformationsAType\OtherServiceInformationAType[]
     */
    public function getOtherServiceInformation()
    {
        return $this->otherServiceInformation;
    }

    /**
     * Sets a new otherServiceInformation
     *
     * Other Service Information (OSI) for relevant airlines.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\OtherServiceInformationsAType\OtherServiceInformationAType[]
     * $otherServiceInformation
     * @return self
     */
    public function setOtherServiceInformation(array $otherServiceInformation)
    {
        $this->otherServiceInformation = $otherServiceInformation;

        return $this;
    }


}

