<?php

namespace Davispeixoto\OpenTravelAlliance\OntologyDimensionType;

/**
 * Class representing DimensionUnitAType
 */
class DimensionUnitAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Height value.Example: 13Implementer: Size encoding specified in RequestedOffer/
     * @SizeWeightEncoding.
     *
     * @property float $height
     */
    private $height = null;

    /**
     * Length value.Example: 23Implementer: Size encoding specified in RequestedOffer/
     * @SizeWeightEncoding.
     *
     * @property float $length
     */
    private $length = null;

    /**
     * Width value.Example: 8Implementer: Size encoding specified in RequestedOffer/
     * @SizeWeightEncoding.
     *
     * @property float $width
     */
    private $width = null;

    /**
     * Other type.Implementer: Type if "Other_" is selected.
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
     * Gets as height
     *
     * Height value.Example: 13Implementer: Size encoding specified in RequestedOffer/
     * @SizeWeightEncoding.
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * Height value.Example: 13Implementer: Size encoding specified in RequestedOffer/
     * @SizeWeightEncoding.
     *
     * @param float $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Gets as length
     *
     * Length value.Example: 23Implementer: Size encoding specified in RequestedOffer/
     * @SizeWeightEncoding.
     *
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * Length value.Example: 23Implementer: Size encoding specified in RequestedOffer/
     * @SizeWeightEncoding.
     *
     * @param float $length
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Gets as width
     *
     * Width value.Example: 8Implementer: Size encoding specified in RequestedOffer/
     * @SizeWeightEncoding.
     *
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * Width value.Example: 8Implementer: Size encoding specified in RequestedOffer/
     * @SizeWeightEncoding.
     *
     * @param float $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Gets as otherType
     *
     * Other type.Implementer: Type if "Other_" is selected.
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
     * Other type.Implementer: Type if "Other_" is selected.
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

