<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyOfferType
 *
 * Offer type, inclusion/ exclusion with ontology reference.
 * XSD Type: OntologyOfferType
 */
class OntologyOfferType
{

    /**
     * Return all offer types indicator.Example: trueImplementer: If true, all offer
     * types should be considered for the response and it is not necessary to parse the
     * OfferType element.
     *
     * @property boolean $allOffersInd
     */
    private $allOffersInd = null;

    /**
     * Ontology reference.Example: 1Implementer: This is a reference to a unique set of
     * ontology information with a unique ID that is specified in the Ontology/@RefID
     * attribute.
     *
     * @property string $ontologyRefID
     */
    private $ontologyRefID = null;

    /**
     * One offer type.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyOfferType\OfferAType[] $offer
     */
    private $offer = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as allOffersInd
     *
     * Return all offer types indicator.Example: trueImplementer: If true, all offer
     * types should be considered for the response and it is not necessary to parse the
     * OfferType element.
     *
     * @return boolean
     */
    public function getAllOffersInd()
    {
        return $this->allOffersInd;
    }

    /**
     * Sets a new allOffersInd
     *
     * Return all offer types indicator.Example: trueImplementer: If true, all offer
     * types should be considered for the response and it is not necessary to parse the
     * OfferType element.
     *
     * @param boolean $allOffersInd
     * @return self
     */
    public function setAllOffersInd($allOffersInd)
    {
        $this->allOffersInd = $allOffersInd;

        return $this;
    }

    /**
     * Gets as ontologyRefID
     *
     * Ontology reference.Example: 1Implementer: This is a reference to a unique set of
     * ontology information with a unique ID that is specified in the Ontology/@RefID
     * attribute.
     *
     * @return string
     */
    public function getOntologyRefID()
    {
        return $this->ontologyRefID;
    }

    /**
     * Sets a new ontologyRefID
     *
     * Ontology reference.Example: 1Implementer: This is a reference to a unique set of
     * ontology information with a unique ID that is specified in the Ontology/@RefID
     * attribute.
     *
     * @param string $ontologyRefID
     * @return self
     */
    public function setOntologyRefID($ontologyRefID)
    {
        $this->ontologyRefID = $ontologyRefID;

        return $this;
    }

    /**
     * Adds as offer
     *
     * One offer type.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OntologyOfferType\OfferAType $offer
     */
    public function addToOffer(\Davispeixoto\OpenTravelAlliance\OntologyOfferType\OfferAType $offer)
    {
        $this->offer[] = $offer;

        return $this;
    }

    /**
     * isset offer
     *
     * One offer type.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOffer($index)
    {
        return isset($this->offer[$index]);
    }

    /**
     * unset offer
     *
     * One offer type.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOffer($index)
    {
        unset($this->offer[$index]);
    }

    /**
     * Gets as offer
     *
     * One offer type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyOfferType\OfferAType[]
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * One offer type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyOfferType\OfferAType[] $offer
     * @return self
     */
    public function setOffer(array $offer)
    {
        $this->offer = $offer;

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

