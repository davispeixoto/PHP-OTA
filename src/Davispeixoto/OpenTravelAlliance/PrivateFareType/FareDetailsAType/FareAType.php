<?php

namespace Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType;

/**
 * Class representing FareAType
 */
class FareAType
{

    /**
     * Base amount.Example: 2450.00
     *
     * @property float $baseAmount
     */
    private $baseAmount = null;

    /**
     * Base neutral unit of construction amount.Example: 1.25Definition: A common
     * denominator used to calculate a total when adding fares in different currencies.
     *
     * @property float $baseNUCAmount
     */
    private $baseNUCAmount = null;

    /**
     * Tax amount.Example: 25.00
     *
     * @property float $taxAmount
     */
    private $taxAmount = null;

    /**
     * Total fare.Example: 2475.00
     *
     * @property float $totalFare
     */
    private $totalFare = null;

    /**
     * Gets as baseAmount
     *
     * Base amount.Example: 2450.00
     *
     * @return float
     */
    public function getBaseAmount()
    {
        return $this->baseAmount;
    }

    /**
     * Sets a new baseAmount
     *
     * Base amount.Example: 2450.00
     *
     * @param float $baseAmount
     * @return self
     */
    public function setBaseAmount($baseAmount)
    {
        $this->baseAmount = $baseAmount;

        return $this;
    }

    /**
     * Gets as baseNUCAmount
     *
     * Base neutral unit of construction amount.Example: 1.25Definition: A common
     * denominator used to calculate a total when adding fares in different currencies.
     *
     * @return float
     */
    public function getBaseNUCAmount()
    {
        return $this->baseNUCAmount;
    }

    /**
     * Sets a new baseNUCAmount
     *
     * Base neutral unit of construction amount.Example: 1.25Definition: A common
     * denominator used to calculate a total when adding fares in different currencies.
     *
     * @param float $baseNUCAmount
     * @return self
     */
    public function setBaseNUCAmount($baseNUCAmount)
    {
        $this->baseNUCAmount = $baseNUCAmount;

        return $this;
    }

    /**
     * Gets as taxAmount
     *
     * Tax amount.Example: 25.00
     *
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Sets a new taxAmount
     *
     * Tax amount.Example: 25.00
     *
     * @param float $taxAmount
     * @return self
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;

        return $this;
    }

    /**
     * Gets as totalFare
     *
     * Total fare.Example: 2475.00
     *
     * @return float
     */
    public function getTotalFare()
    {
        return $this->totalFare;
    }

    /**
     * Sets a new totalFare
     *
     * Total fare.Example: 2475.00
     *
     * @param float $totalFare
     * @return self
     */
    public function setTotalFare($totalFare)
    {
        $this->totalFare = $totalFare;

        return $this;
    }


}

