<?php

namespace Davispeixoto\OpenTravelAlliance\OntologyBaggageType;

/**
 * Class representing DetailAType
 */
class DetailAType
{

    /**
     * Baggage item name or code.Example: Suitcase
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyBaggageType\DetailAType\ItemAType $item
     */
    private $item = null;

    /**
     * Baggage size.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyDimensionType $size
     */
    private $size = null;

    /**
     * Baggage weight.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyWeightType $weight
     */
    private $weight = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as item
     *
     * Baggage item name or code.Example: Suitcase
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OntologyBaggageType\DetailAType\ItemAType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Baggage item name or code.Example: Suitcase
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OntologyBaggageType\DetailAType\ItemAType $item
     * @return self
     */
    public function setItem(\Davispeixoto\OpenTravelAlliance\OntologyBaggageType\DetailAType\ItemAType $item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Gets as size
     *
     * Baggage size.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyDimensionType
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * Baggage size.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyDimensionType $size
     * @return self
     */
    public function setSize(\Davispeixoto\OpenTravelAlliance\OntologyDimensionType $size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Gets as weight
     *
     * Baggage weight.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyWeightType
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * Baggage weight.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyWeightType $weight
     * @return self
     */
    public function setWeight(\Davispeixoto\OpenTravelAlliance\OntologyWeightType $weight)
    {
        $this->weight = $weight;

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

