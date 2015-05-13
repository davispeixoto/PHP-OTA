<?php

namespace Davispeixoto\OpenTravelAlliance\MultiModalOfferType;

/**
 * Class representing RequestedOfferAType
 */
class RequestedOfferAType
{

    /**
     * Total traveler quantity.Example: 2Note: This is the total quantity of travelers
     * that must be accommodated in the offer response.
     *
     * @property integer $numberInParty
     */
    private $numberInParty = null;

    /**
     * One or more offer types to be included or excluded in the response.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyOfferType $offerTypes
     */
    private $offerTypes = null;

    /**
     * Offer starting date/ time period and time period duration.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestedOfferAType\TimePeriodAType
     * $timePeriod
     */
    private $timePeriod = null;

    /**
     * Requested offer pricing.Note: If specified, this information should be applied
     * to all offers considered for the response.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestedOfferAType\GuidelinePricingAType
     * $guidelinePricing
     */
    private $guidelinePricing = null;

    /**
     * Trip purpose.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyTripPurposeType $tripPurpose
     */
    private $tripPurpose = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as numberInParty
     *
     * Total traveler quantity.Example: 2Note: This is the total quantity of travelers
     * that must be accommodated in the offer response.
     *
     * @return integer
     */
    public function getNumberInParty()
    {
        return $this->numberInParty;
    }

    /**
     * Sets a new numberInParty
     *
     * Total traveler quantity.Example: 2Note: This is the total quantity of travelers
     * that must be accommodated in the offer response.
     *
     * @param integer $numberInParty
     * @return self
     */
    public function setNumberInParty($numberInParty)
    {
        $this->numberInParty = $numberInParty;

        return $this;
    }

    /**
     * Gets as offerTypes
     *
     * One or more offer types to be included or excluded in the response.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyOfferType
     */
    public function getOfferTypes()
    {
        return $this->offerTypes;
    }

    /**
     * Sets a new offerTypes
     *
     * One or more offer types to be included or excluded in the response.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyOfferType $offerTypes
     * @return self
     */
    public function setOfferTypes(\Davispeixoto\OpenTravelAlliance\OntologyOfferType $offerTypes)
    {
        $this->offerTypes = $offerTypes;

        return $this;
    }

    /**
     * Gets as timePeriod
     *
     * Offer starting date/ time period and time period duration.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestedOfferAType\TimePeriodAType
     */
    public function getTimePeriod()
    {
        return $this->timePeriod;
    }

    /**
     * Sets a new timePeriod
     *
     * Offer starting date/ time period and time period duration.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestedOfferAType\TimePeriodAType
     * $timePeriod
     * @return self
     */
    public function setTimePeriod(
        \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestedOfferAType\TimePeriodAType $timePeriod
    ) {
        $this->timePeriod = $timePeriod;

        return $this;
    }

    /**
     * Gets as guidelinePricing
     *
     * Requested offer pricing.Note: If specified, this information should be applied
     * to all offers considered for the response.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestedOfferAType\GuidelinePricingAType
     */
    public function getGuidelinePricing()
    {
        return $this->guidelinePricing;
    }

    /**
     * Sets a new guidelinePricing
     *
     * Requested offer pricing.Note: If specified, this information should be applied
     * to all offers considered for the response.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestedOfferAType\GuidelinePricingAType
     * $guidelinePricing
     * @return self
     */
    public function setGuidelinePricing(
        \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestedOfferAType\GuidelinePricingAType $guidelinePricing
    ) {
        $this->guidelinePricing = $guidelinePricing;

        return $this;
    }

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

