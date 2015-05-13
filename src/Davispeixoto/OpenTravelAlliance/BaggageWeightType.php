<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing BaggageWeightType
 *
 * Baggage weight specification.
 * XSD Type: BaggageWeightType
 */
class BaggageWeightType extends ListUnitOfMeasureType
{

    /**
     * If true, the baggage weight is approximate.
     *
     * @property boolean $approxInd
     */
    private $approxInd = null;

    /**
     * Baggage weight.Example: 57.35
     *
     * @property float $weight
     */
    private $weight = null;

    /**
     * Gets as approxInd
     *
     * If true, the baggage weight is approximate.
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
     * If true, the baggage weight is approximate.
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
     * Gets as weight
     *
     * Baggage weight.Example: 57.35
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * Baggage weight.Example: 57.35
     *
     * @param float $weight
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }


}

