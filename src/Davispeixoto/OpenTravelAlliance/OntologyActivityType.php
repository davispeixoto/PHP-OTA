<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyActivityType
 *
 * Activity related information with ontology reference.
 * XSD Type: OntologyActivityType
 */
class OntologyActivityType
{

    /**
     * Activity type.Example: FamilyImplementer: To pass a value that is not in this
     * list, select the "Other_" literal and specify a value in the @OtherType
     * attribute.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyActivityType\TypeAType $type
     */
    private $type = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as type
     *
     * Activity type.Example: FamilyImplementer: To pass a value that is not in this
     * list, select the "Other_" literal and specify a value in the @OtherType
     * attribute.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyActivityType\TypeAType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Activity type.Example: FamilyImplementer: To pass a value that is not in this
     * list, select the "Other_" literal and specify a value in the @OtherType
     * attribute.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyActivityType\TypeAType $type
     * @return self
     */
    public function setType(\Davispeixoto\OpenTravelAlliance\OntologyActivityType\TypeAType $type)
    {
        $this->type = $type;

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

