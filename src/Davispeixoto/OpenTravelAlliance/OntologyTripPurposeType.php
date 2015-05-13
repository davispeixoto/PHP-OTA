<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyTripPurposeType
 *
 * Trip purpose with ontology reference.
 * XSD Type: OntologyTripPurposeType
 */
class OntologyTripPurposeType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Ontology reference.Example: 1Note: This is a reference to a set of ontology
     * information that has a unique ID for the set specified in the Ontology/@RefID
     * attribute.
     *
     * @property string $ontologyRefID
     */
    private $ontologyRefID = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }

        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as ontologyRefID
     *
     * Ontology reference.Example: 1Note: This is a reference to a set of ontology
     * information that has a unique ID for the set specified in the Ontology/@RefID
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
     * Ontology reference.Example: 1Note: This is a reference to a set of ontology
     * information that has a unique ID for the set specified in the Ontology/@RefID
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


}

