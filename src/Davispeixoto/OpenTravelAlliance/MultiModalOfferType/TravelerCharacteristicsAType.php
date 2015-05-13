<?php

namespace Davispeixoto\OpenTravelAlliance\MultiModalOfferType;

/**
 * Class representing TravelerCharacteristicsAType
 */
class TravelerCharacteristicsAType
{

    /**
     * Trip purpose.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyTripPurposeType $tripPurpose
     */
    private $tripPurpose = null;

    /**
     * Traveler classification information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TravelerCharacteristicsAType\ClassificationAType
     * $classification
     */
    private $classification = null;

    /**
     * Detailed traveler information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType[]
     * $detailInfo
     */
    private $detailInfo = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as tripPurpose
     *
     * Trip purpose.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyTripPurposeType
     */
    public function getTripPurpose()
    {
        return $this->tripPurpose;
    }

    /**
     * Sets a new tripPurpose
     *
     * Trip purpose.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyTripPurposeType $tripPurpose
     * @return self
     */
    public function setTripPurpose(\Davispeixoto\OpenTravelAlliance\OntologyTripPurposeType $tripPurpose)
    {
        $this->tripPurpose = $tripPurpose;

        return $this;
    }

    /**
     * Gets as classification
     *
     * Traveler classification information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TravelerCharacteristicsAType\ClassificationAType
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Sets a new classification
     *
     * Traveler classification information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TravelerCharacteristicsAType\ClassificationAType
     * $classification
     * @return self
     */
    public function setClassification(
        \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TravelerCharacteristicsAType\ClassificationAType $classification
    ) {
        $this->classification = $classification;

        return $this;
    }

    /**
     * Adds as detailInfo
     *
     * Detailed traveler information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType
     * $detailInfo
     */
    public function addToDetailInfo(
        \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType $detailInfo
    ) {
        $this->detailInfo[] = $detailInfo;

        return $this;
    }

    /**
     * isset detailInfo
     *
     * Detailed traveler information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDetailInfo($index)
    {
        return isset($this->detailInfo[$index]);
    }

    /**
     * unset detailInfo
     *
     * Detailed traveler information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDetailInfo($index)
    {
        unset($this->detailInfo[$index]);
    }

    /**
     * Gets as detailInfo
     *
     * Detailed traveler information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType[]
     */
    public function getDetailInfo()
    {
        return $this->detailInfo;
    }

    /**
     * Sets a new detailInfo
     *
     * Detailed traveler information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType[]
     * $detailInfo
     * @return self
     */
    public function setDetailInfo(array $detailInfo)
    {
        $this->detailInfo = $detailInfo;

        return $this;
    }

    /**
     * Gets as ontologyExtension
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyExtension
     */
    public function getOntologyExtension()
    {
        return $this->ontologyExtension;
    }

    /**
     * Sets a new ontologyExtension
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     * @return self
     */
    public function setOntologyExtension(\Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension)
    {
        $this->ontologyExtension = $ontologyExtension;

        return $this;
    }


}

