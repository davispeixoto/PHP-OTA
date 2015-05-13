<?php

namespace Davispeixoto\OpenTravelAlliance\MultiModalOfferType;

use Davispeixoto\OpenTravelAlliance\OntologyDefinitionType;

/**
 * Class representing OntologyAType
 */
class OntologyAType extends OntologyDefinitionType
{

    /**
     * Compatible ontology(s) URI collection.Note: This is a URL to another ontology
     * that this specified ontology is compatible with.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\OntologyAType\CompatibleWithAType[]
     * $compatibleWith
     */
    private $compatibleWith = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Adds as compatibleWith
     *
     * Compatible ontology(s) URI collection.Note: This is a URL to another ontology
     * that this specified ontology is compatible with.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\OntologyAType\CompatibleWithAType
     * $compatibleWith
     */
    public function addToCompatibleWith(
        \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\OntologyAType\CompatibleWithAType $compatibleWith
    ) {
        $this->compatibleWith[] = $compatibleWith;

        return $this;
    }

    /**
     * isset compatibleWith
     *
     * Compatible ontology(s) URI collection.Note: This is a URL to another ontology
     * that this specified ontology is compatible with.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCompatibleWith($index)
    {
        return isset($this->compatibleWith[$index]);
    }

    /**
     * unset compatibleWith
     *
     * Compatible ontology(s) URI collection.Note: This is a URL to another ontology
     * that this specified ontology is compatible with.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCompatibleWith($index)
    {
        unset($this->compatibleWith[$index]);
    }

    /**
     * Gets as compatibleWith
     *
     * Compatible ontology(s) URI collection.Note: This is a URL to another ontology
     * that this specified ontology is compatible with.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\OntologyAType\CompatibleWithAType[]
     */
    public function getCompatibleWith()
    {
        return $this->compatibleWith;
    }

    /**
     * Sets a new compatibleWith
     *
     * Compatible ontology(s) URI collection.Note: This is a URL to another ontology
     * that this specified ontology is compatible with.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\OntologyAType\CompatibleWithAType[]
     * $compatibleWith
     * @return self
     */
    public function setCompatibleWith(array $compatibleWith)
    {
        $this->compatibleWith = $compatibleWith;

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

