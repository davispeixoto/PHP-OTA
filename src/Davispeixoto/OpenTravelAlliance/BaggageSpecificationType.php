<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing BaggageSpecificationType
 *
 * Baggage specification.
 * XSD Type: BaggageSpecificationType
 */
class BaggageSpecificationType
{

    /**
     * Baggage quantity.Example: 2
     *
     * @property integer $pieces
     */
    private $pieces = null;

    /**
     * Weight amount and unit of measure.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BaggageWeightType $weight
     */
    private $weight = null;

    /**
     * Size amounts and unit of measure.Note: Baggage size may be specified as
     * individual size units (height, length, width) with an associated unit of
     * measure, or as linear dimensions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BaggageSizeType $size
     */
    private $size = null;

    /**
     * Specialty item details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\BaggageSpecificationType\SpecialItemAType
     * $specialItem
     */
    private $specialItem = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as pieces
     *
     * Baggage quantity.Example: 2
     *
     * @return integer
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * Sets a new pieces
     *
     * Baggage quantity.Example: 2
     *
     * @param integer $pieces
     * @return self
     */
    public function setPieces($pieces)
    {
        $this->pieces = $pieces;

        return $this;
    }

    /**
     * Gets as weight
     *
     * Weight amount and unit of measure.
     *
     * @return \Davispeixoto\OpenTravelAlliance\BaggageWeightType
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * Weight amount and unit of measure.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BaggageWeightType $weight
     * @return self
     */
    public function setWeight(\Davispeixoto\OpenTravelAlliance\BaggageWeightType $weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Gets as size
     *
     * Size amounts and unit of measure.Note: Baggage size may be specified as
     * individual size units (height, length, width) with an associated unit of
     * measure, or as linear dimensions.
     *
     * @return \Davispeixoto\OpenTravelAlliance\BaggageSizeType
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * Size amounts and unit of measure.Note: Baggage size may be specified as
     * individual size units (height, length, width) with an associated unit of
     * measure, or as linear dimensions.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BaggageSizeType $size
     * @return self
     */
    public function setSize(\Davispeixoto\OpenTravelAlliance\BaggageSizeType $size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Gets as specialItem
     *
     * Specialty item details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\BaggageSpecificationType\SpecialItemAType
     */
    public function getSpecialItem()
    {
        return $this->specialItem;
    }

    /**
     * Sets a new specialItem
     *
     * Specialty item details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\BaggageSpecificationType\SpecialItemAType
     * $specialItem
     * @return self
     */
    public function setSpecialItem(
        \Davispeixoto\OpenTravelAlliance\BaggageSpecificationType\SpecialItemAType $specialItem
    ) {
        $this->specialItem = $specialItem;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

