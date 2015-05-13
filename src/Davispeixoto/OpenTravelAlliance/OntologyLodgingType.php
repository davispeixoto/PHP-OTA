<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyLodgingType
 *
 * Lodging information with ontology reference.
 * XSD Type: OntologyLodgingType
 */
class OntologyLodgingType
{

    /**
     * Property code or name.Example: 123
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyCodeType $code
     */
    private $code = null;

    /**
     * Property class.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyLodgingType\PropertyClassAType
     * $propertyClass
     */
    private $propertyClass = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as code
     *
     * Property code or name.Example: 123
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyCodeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Property code or name.Example: 123
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyCodeType $code
     * @return self
     */
    public function setCode(\Davispeixoto\OpenTravelAlliance\OntologyCodeType $code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as propertyClass
     *
     * Property class.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyLodgingType\PropertyClassAType
     */
    public function getPropertyClass()
    {
        return $this->propertyClass;
    }

    /**
     * Sets a new propertyClass
     *
     * Property class.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyLodgingType\PropertyClassAType
     * $propertyClass
     * @return self
     */
    public function setPropertyClass(
        \Davispeixoto\OpenTravelAlliance\OntologyLodgingType\PropertyClassAType $propertyClass
    ) {
        $this->propertyClass = $propertyClass;

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

