<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyBaggageType
 *
 * Baggage type, quantity, weight, size with ontology reference.
 * XSD Type: OntologyBaggageType
 */
class OntologyBaggageType
{

    /**
     * Specialty baggage item indicator.Example: trueImplementer: If true, traveler(s)
     * have one or more specialty baggage items.
     *
     * @property boolean $specialItemInd
     */
    private $specialItemInd = null;

    /**
     * Total baggage quantity.Example: 4
     *
     * @property integer $totalPieces
     */
    private $totalPieces = null;

    /**
     * Total weight for all baggage items.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyWeightType $totalWeight
     */
    private $totalWeight = null;

    /**
     * Baggage item details.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyBaggageType\DetailAType[]
     * $detail
     */
    private $detail = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as specialItemInd
     *
     * Specialty baggage item indicator.Example: trueImplementer: If true, traveler(s)
     * have one or more specialty baggage items.
     *
     * @return boolean
     */
    public function getSpecialItemInd()
    {
        return $this->specialItemInd;
    }

    /**
     * Sets a new specialItemInd
     *
     * Specialty baggage item indicator.Example: trueImplementer: If true, traveler(s)
     * have one or more specialty baggage items.
     *
     * @param boolean $specialItemInd
     * @return self
     */
    public function setSpecialItemInd($specialItemInd)
    {
        $this->specialItemInd = $specialItemInd;

        return $this;
    }

    /**
     * Gets as totalPieces
     *
     * Total baggage quantity.Example: 4
     *
     * @return integer
     */
    public function getTotalPieces()
    {
        return $this->totalPieces;
    }

    /**
     * Sets a new totalPieces
     *
     * Total baggage quantity.Example: 4
     *
     * @param integer $totalPieces
     * @return self
     */
    public function setTotalPieces($totalPieces)
    {
        $this->totalPieces = $totalPieces;

        return $this;
    }

    /**
     * Gets as totalWeight
     *
     * Total weight for all baggage items.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyWeightType
     */
    public function getTotalWeight()
    {
        return $this->totalWeight;
    }

    /**
     * Sets a new totalWeight
     *
     * Total weight for all baggage items.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyWeightType $totalWeight
     * @return self
     */
    public function setTotalWeight(\Davispeixoto\OpenTravelAlliance\OntologyWeightType $totalWeight)
    {
        $this->totalWeight = $totalWeight;

        return $this;
    }

    /**
     * Adds as detail
     *
     * Baggage item details.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OntologyBaggageType\DetailAType $detail
     */
    public function addToDetail(\Davispeixoto\OpenTravelAlliance\OntologyBaggageType\DetailAType $detail)
    {
        $this->detail[] = $detail;

        return $this;
    }

    /**
     * isset detail
     *
     * Baggage item details.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDetail($index)
    {
        return isset($this->detail[$index]);
    }

    /**
     * unset detail
     *
     * Baggage item details.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDetail($index)
    {
        unset($this->detail[$index]);
    }

    /**
     * Gets as detail
     *
     * Baggage item details.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyBaggageType\DetailAType[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Baggage item details.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyBaggageType\DetailAType[]
     * $detail
     * @return self
     */
    public function setDetail(array $detail)
    {
        $this->detail = $detail;

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

