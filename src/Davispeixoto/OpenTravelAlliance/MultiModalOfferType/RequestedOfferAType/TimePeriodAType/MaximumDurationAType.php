<?php

namespace Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestedOfferAType\TimePeriodAType;

/**
 * Class representing MaximumDurationAType
 */
class MaximumDurationAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Value.Example: 2
     *
     * @property float $value
     */
    private $value = null;

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
     * Gets as value
     *
     * Value.Example: 2
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * Value.Example: 2
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;

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

