<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyCodeType
 *
 * Code, context and description with ontology reference.
 * XSD Type: OntologyCodeType
 */
class OntologyCodeType
{

    /**
     * Code.Example: ORD
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Code context (source authority.)Example: IATA
     *
     * @property string $context
     */
    private $context = null;

    /**
     * Code description.Example: ChicagoImplementer: This may be used to pass a city,
     * state, country (etc.) name instead of a code.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Ontology reference.Example: 1Implementer: This is a reference to a unique set of
     * ontology information with a unique ID that is specified in the Ontology/@RefID
     * attribute.
     *
     * @property string $ontologyRefID
     */
    private $ontologyRefID = null;

    /**
     * Gets as code
     *
     * Code.Example: ORD
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Code.Example: ORD
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as context
     *
     * Code context (source authority.)Example: IATA
     *
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets a new context
     *
     * Code context (source authority.)Example: IATA
     *
     * @param string $context
     * @return self
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Gets as description
     *
     * Code description.Example: ChicagoImplementer: This may be used to pass a city,
     * state, country (etc.) name instead of a code.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Code description.Example: ChicagoImplementer: This may be used to pass a city,
     * state, country (etc.) name instead of a code.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

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


}

