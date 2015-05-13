<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing BaggageSizeType
 *
 * Baggage size specification.
 * XSD Type: BaggageSizeType
 */
class BaggageSizeType extends ListUnitOfMeasureType
{

    /**
     * If true, the baggage dimensions are approximate.
     *
     * @property boolean $approxInd
     */
    private $approxInd = null;

    /**
     * Baggage height.Example: 13.5
     *
     * @property float $height
     */
    private $height = null;

    /**
     * Baggage length.Example: 33
     *
     * @property float $length
     */
    private $length = null;

    /**
     * Baggage width.Example: 16.25
     *
     * @property float $width
     */
    private $width = null;

    /**
     * Linear dimensions.Note: This is the total linear measurement of the baggage
     * (Length + Height + Width).Example: 62.75
     *
     * @property string $linearDimensions
     */
    private $linearDimensions = null;

    /**
     * Gets as approxInd
     *
     * If true, the baggage dimensions are approximate.
     *
     * @return boolean
     */
    public function getApproxInd()
    {
        return $this->approxInd;
    }

    /**
     * Sets a new approxInd
     *
     * If true, the baggage dimensions are approximate.
     *
     * @param boolean $approxInd
     * @return self
     */
    public function setApproxInd($approxInd)
    {
        $this->approxInd = $approxInd;

        return $this;
    }

    /**
     * Gets as height
     *
     * Baggage height.Example: 13.5
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
     * Baggage height.Example: 13.5
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
     * Baggage length.Example: 33
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
     * Baggage length.Example: 33
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
     * Baggage width.Example: 16.25
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
     * Baggage width.Example: 16.25
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
     * Gets as linearDimensions
     *
     * Linear dimensions.Note: This is the total linear measurement of the baggage
     * (Length + Height + Width).Example: 62.75
     *
     * @return string
     */
    public function getLinearDimensions()
    {
        return $this->linearDimensions;
    }

    /**
     * Sets a new linearDimensions
     *
     * Linear dimensions.Note: This is the total linear measurement of the baggage
     * (Length + Height + Width).Example: 62.75
     *
     * @param string $linearDimensions
     * @return self
     */
    public function setLinearDimensions($linearDimensions)
    {
        $this->linearDimensions = $linearDimensions;

        return $this;
    }


}

