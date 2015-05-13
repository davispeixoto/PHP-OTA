<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType;

/**
 * Class representing AirItineraryAType
 */
class AirItineraryAType
{

    /**
     * Information about how to upgrade the itinerary.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType\ItineraryUpgradeAType\UpgradeSegmentAType[]
     * $itineraryUpgrade
     */
    private $itineraryUpgrade = null;

    /**
     * Air itinerary information at flight segment detail that pertains to the trip as
     * a whole with optional pricing information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType\ItineraryAType[]
     * $itinerary
     */
    private $itinerary = null;

    /**
     * Adds as upgradeSegment
     *
     * Information about how to upgrade the itinerary.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType\ItineraryUpgradeAType\UpgradeSegmentAType
     * $upgradeSegment
     */
    public function addToItineraryUpgrade(
        \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType\ItineraryUpgradeAType\UpgradeSegmentAType $upgradeSegment
    ) {
        $this->itineraryUpgrade[] = $upgradeSegment;

        return $this;
    }

    /**
     * isset itineraryUpgrade
     *
     * Information about how to upgrade the itinerary.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItineraryUpgrade($index)
    {
        return isset($this->itineraryUpgrade[$index]);
    }

    /**
     * unset itineraryUpgrade
     *
     * Information about how to upgrade the itinerary.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItineraryUpgrade($index)
    {
        unset($this->itineraryUpgrade[$index]);
    }

    /**
     * Gets as itineraryUpgrade
     *
     * Information about how to upgrade the itinerary.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType\ItineraryUpgradeAType\UpgradeSegmentAType[]
     */
    public function getItineraryUpgrade()
    {
        return $this->itineraryUpgrade;
    }

    /**
     * Sets a new itineraryUpgrade
     *
     * Information about how to upgrade the itinerary.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType\ItineraryUpgradeAType\UpgradeSegmentAType[]
     * $itineraryUpgrade
     * @return self
     */
    public function setItineraryUpgrade(array $itineraryUpgrade)
    {
        $this->itineraryUpgrade = $itineraryUpgrade;

        return $this;
    }

    /**
     * Adds as itinerary
     *
     * Air itinerary information at flight segment detail that pertains to the trip as
     * a whole with optional pricing information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType\ItineraryAType
     * $itinerary
     */
    public function addToItinerary(
        \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType\ItineraryAType $itinerary
    ) {
        $this->itinerary[] = $itinerary;

        return $this;
    }

    /**
     * isset itinerary
     *
     * Air itinerary information at flight segment detail that pertains to the trip as
     * a whole with optional pricing information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItinerary($index)
    {
        return isset($this->itinerary[$index]);
    }

    /**
     * unset itinerary
     *
     * Air itinerary information at flight segment detail that pertains to the trip as
     * a whole with optional pricing information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItinerary($index)
    {
        unset($this->itinerary[$index]);
    }

    /**
     * Gets as itinerary
     *
     * Air itinerary information at flight segment detail that pertains to the trip as
     * a whole with optional pricing information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType\ItineraryAType[]
     */
    public function getItinerary()
    {
        return $this->itinerary;
    }

    /**
     * Sets a new itinerary
     *
     * Air itinerary information at flight segment detail that pertains to the trip as
     * a whole with optional pricing information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType\ItineraryAType[]
     * $itinerary
     * @return self
     */
    public function setItinerary(array $itinerary)
    {
        $this->itinerary = $itinerary;

        return $this;
    }


}

