<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing MultiModalOfferType
 *
 * Traveler and trip information used for targeted multi-modal offers.
 * XSD Type: MultiModalOfferType
 */
class MultiModalOfferType
{

    /**
     * Requesting party information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestingPartyAType
     * $requestingParty
     */
    private $requestingParty = null;

    /**
     * OpenTravel ontology information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\OntologyAType
     * $ontology
     */
    private $ontology = null;

    /**
     * Requested offer information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestedOfferAType
     * $requestedOffer
     */
    private $requestedOffer = null;

    /**
     * Existing trip characteristics.Note: All of this information pertains to the trip
     * component that has been accommodated by the offer requestor.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType
     * $tripCharacteristics
     */
    private $tripCharacteristics = null;

    /**
     * Traveler characteristics.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TravelerCharacteristicsAType
     * $travelerCharacteristics
     */
    private $travelerCharacteristics = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as requestingParty
     *
     * Requesting party information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestingPartyAType
     */
    public function getRequestingParty()
    {
        return $this->requestingParty;
    }

    /**
     * Sets a new requestingParty
     *
     * Requesting party information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestingPartyAType
     * $requestingParty
     * @return self
     */
    public function setRequestingParty(
        \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestingPartyAType $requestingParty
    ) {
        $this->requestingParty = $requestingParty;

        return $this;
    }

    /**
     * Gets as ontology
     *
     * OpenTravel ontology information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\OntologyAType
     */
    public function getOntology()
    {
        return $this->ontology;
    }

    /**
     * Sets a new ontology
     *
     * OpenTravel ontology information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\OntologyAType
     * $ontology
     * @return self
     */
    public function setOntology(\Davispeixoto\OpenTravelAlliance\MultiModalOfferType\OntologyAType $ontology)
    {
        $this->ontology = $ontology;

        return $this;
    }

    /**
     * Gets as requestedOffer
     *
     * Requested offer information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestedOfferAType
     */
    public function getRequestedOffer()
    {
        return $this->requestedOffer;
    }

    /**
     * Sets a new requestedOffer
     *
     * Requested offer information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestedOfferAType
     * $requestedOffer
     * @return self
     */
    public function setRequestedOffer(
        \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestedOfferAType $requestedOffer
    ) {
        $this->requestedOffer = $requestedOffer;

        return $this;
    }

    /**
     * Gets as tripCharacteristics
     *
     * Existing trip characteristics.Note: All of this information pertains to the trip
     * component that has been accommodated by the offer requestor.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType
     */
    public function getTripCharacteristics()
    {
        return $this->tripCharacteristics;
    }

    /**
     * Sets a new tripCharacteristics
     *
     * Existing trip characteristics.Note: All of this information pertains to the trip
     * component that has been accommodated by the offer requestor.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType
     * $tripCharacteristics
     * @return self
     */
    public function setTripCharacteristics(
        \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType $tripCharacteristics
    ) {
        $this->tripCharacteristics = $tripCharacteristics;

        return $this;
    }

    /**
     * Gets as travelerCharacteristics
     *
     * Traveler characteristics.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TravelerCharacteristicsAType
     */
    public function getTravelerCharacteristics()
    {
        return $this->travelerCharacteristics;
    }

    /**
     * Sets a new travelerCharacteristics
     *
     * Traveler characteristics.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TravelerCharacteristicsAType
     * $travelerCharacteristics
     * @return self
     */
    public function setTravelerCharacteristics(
        \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TravelerCharacteristicsAType $travelerCharacteristics
    ) {
        $this->travelerCharacteristics = $travelerCharacteristics;

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

