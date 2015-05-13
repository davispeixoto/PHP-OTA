<?php

namespace Davispeixoto\OpenTravelAlliance\OntologyOfferType;

/**
 * Class representing OfferAType
 */
class OfferAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Exclude offer type indicator.Example: trueImplementer: If true, this offer type
     * should NOT be included in the response.
     *
     * @property boolean $excludeInd
     */
    private $excludeInd = null;

    /**
     * Other type.Implementer: Type if "Other_" is selected from enumerated list.
     *
     * @property string $otherType
     */
    private $otherType = null;

    /**
     * Ontology reference.Example: 1Implementer: This is a reference to a unique set of
     * ontology information with a unique ID that is specified in the Ontology/@RefID
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
     * Gets as excludeInd
     *
     * Exclude offer type indicator.Example: trueImplementer: If true, this offer type
     * should NOT be included in the response.
     *
     * @return boolean
     */
    public function getExcludeInd()
    {
        return $this->excludeInd;
    }

    /**
     * Sets a new excludeInd
     *
     * Exclude offer type indicator.Example: trueImplementer: If true, this offer type
     * should NOT be included in the response.
     *
     * @param boolean $excludeInd
     * @return self
     */
    public function setExcludeInd($excludeInd)
    {
        $this->excludeInd = $excludeInd;

        return $this;
    }

    /**
     * Gets as otherType
     *
     * Other type.Implementer: Type if "Other_" is selected from enumerated list.
     *
     * @return string
     */
    public function getOtherType()
    {
        return $this->otherType;
    }

    /**
     * Sets a new otherType
     *
     * Other type.Implementer: Type if "Other_" is selected from enumerated list.
     *
     * @param string $otherType
     * @return self
     */
    public function setOtherType($otherType)
    {
        $this->otherType = $otherType;

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

