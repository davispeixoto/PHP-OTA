<?php

namespace Davispeixoto\OpenTravelAlliance\OntologyAnimalType;

/**
 * Class representing DetailAType
 */
class DetailAType
{

    /**
     * Animal type.Example: Suitcase
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyAnimalType\DetailAType\TypeAType $type
     */
    private $type = null;

    /**
     * Animal weight.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyAnimalType\DetailAType\WeightAType
     * $weight
     */
    private $weight = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as type
     *
     * Animal type.Example: Suitcase
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OntologyAnimalType\DetailAType\TypeAType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Animal type.Example: Suitcase
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyAnimalType\DetailAType\TypeAType
     * $type
     * @return self
     */
    public function setType(\Davispeixoto\OpenTravelAlliance\OntologyAnimalType\DetailAType\TypeAType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as weight
     *
     * Animal weight.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OntologyAnimalType\DetailAType\WeightAType
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * Animal weight.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OntologyAnimalType\DetailAType\WeightAType
     * $weight
     * @return self
     */
    public function setWeight(\Davispeixoto\OpenTravelAlliance\OntologyAnimalType\DetailAType\WeightAType $weight)
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

