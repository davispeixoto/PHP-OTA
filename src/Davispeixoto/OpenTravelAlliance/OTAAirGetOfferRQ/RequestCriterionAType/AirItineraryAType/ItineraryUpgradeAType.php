<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType;

/**
 * Class representing ItineraryUpgradeAType
 */
class ItineraryUpgradeAType
{

    /**
     * Information about upgrading a particular segment into a new class.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType\ItineraryUpgradeAType\UpgradeSegmentAType[]
     * $upgradeSegment
     */
    private $upgradeSegment = null;

    /**
     * Adds as upgradeSegment
     *
     * Information about upgrading a particular segment into a new class.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType\ItineraryUpgradeAType\UpgradeSegmentAType
     * $upgradeSegment
     */
    public function addToUpgradeSegment(
        \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType\ItineraryUpgradeAType\UpgradeSegmentAType $upgradeSegment
    ) {
        $this->upgradeSegment[] = $upgradeSegment;

        return $this;
    }

    /**
     * isset upgradeSegment
     *
     * Information about upgrading a particular segment into a new class.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUpgradeSegment($index)
    {
        return isset($this->upgradeSegment[$index]);
    }

    /**
     * unset upgradeSegment
     *
     * Information about upgrading a particular segment into a new class.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUpgradeSegment($index)
    {
        unset($this->upgradeSegment[$index]);
    }

    /**
     * Gets as upgradeSegment
     *
     * Information about upgrading a particular segment into a new class.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType\ItineraryUpgradeAType\UpgradeSegmentAType[]
     */
    public function getUpgradeSegment()
    {
        return $this->upgradeSegment;
    }

    /**
     * Sets a new upgradeSegment
     *
     * Information about upgrading a particular segment into a new class.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType\ItineraryUpgradeAType\UpgradeSegmentAType[]
     * $upgradeSegment
     * @return self
     */
    public function setUpgradeSegment(array $upgradeSegment)
    {
        $this->upgradeSegment = $upgradeSegment;

        return $this;
    }


}

