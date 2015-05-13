<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyPricingMethodType
 *
 * Pricing method with ontology reference.
 * XSD Type: OntologyPricingMethodType
 */
class OntologyPricingMethodType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Inclusive pricing indicator.Example: trueImplementer: If true, the offer pricing
     * should include all associated fees and taxes.
     *
     * @property boolean $inclusiveInd
     */
    private $inclusiveInd = null;

    /**
     * Approximate pricing indicator.Example: trueImplementer: If true, the returned
     * offer pricing is approximate.
     *
     * @property boolean $approximateInd
     */
    private $approximateInd = null;

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
     * Gets as inclusiveInd
     *
     * Inclusive pricing indicator.Example: trueImplementer: If true, the offer pricing
     * should include all associated fees and taxes.
     *
     * @return boolean
     */
    public function getInclusiveInd()
    {
        return $this->inclusiveInd;
    }

    /**
     * Sets a new inclusiveInd
     *
     * Inclusive pricing indicator.Example: trueImplementer: If true, the offer pricing
     * should include all associated fees and taxes.
     *
     * @param boolean $inclusiveInd
     * @return self
     */
    public function setInclusiveInd($inclusiveInd)
    {
        $this->inclusiveInd = $inclusiveInd;

        return $this;
    }

    /**
     * Gets as approximateInd
     *
     * Approximate pricing indicator.Example: trueImplementer: If true, the returned
     * offer pricing is approximate.
     *
     * @return boolean
     */
    public function getApproximateInd()
    {
        return $this->approximateInd;
    }

    /**
     * Sets a new approximateInd
     *
     * Approximate pricing indicator.Example: trueImplementer: If true, the returned
     * offer pricing is approximate.
     *
     * @param boolean $approximateInd
     * @return self
     */
    public function setApproximateInd($approximateInd)
    {
        $this->approximateInd = $approximateInd;

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

