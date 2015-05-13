<?php

namespace Davispeixoto\OpenTravelAlliance\FareInfoType\FareInfoAType;

/**
 * Class representing FareAType
 */
class FareAType
{

    /**
     * The base amount of the fare.
     *
     * @property float $baseAmount
     */
    private $baseAmount = null;

    /**
     * The base neutral unit of construction amount.
     *
     * @property float $baseNUCAmount
     */
    private $baseNUCAmount = null;

    /**
     * The tax amount for the fare associated to the rule.
     *
     * @property float $taxAmount
     */
    private $taxAmount = null;

    /**
     * The total fare associated to the rule.
     *
     * @property float $totalFare
     */
    private $totalFare = null;

    /**
     * A description of the fare.
     *
     * @property string $fareDescription
     */
    private $fareDescription = null;

    /**
     * Gets as baseAmount
     *
     * The base amount of the fare.
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
     * The base amount of the fare.
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
     * The base neutral unit of construction amount.
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
     * The base neutral unit of construction amount.
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
     * The tax amount for the fare associated to the rule.
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
     * The tax amount for the fare associated to the rule.
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
     * The total fare associated to the rule.
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
     * The total fare associated to the rule.
     *
     * @param float $totalFare
     * @return self
     */
    public function setTotalFare($totalFare)
    {
        $this->totalFare = $totalFare;

        return $this;
    }

    /**
     * Gets as fareDescription
     *
     * A description of the fare.
     *
     * @return string
     */
    public function getFareDescription()
    {
        return $this->fareDescription;
    }

    /**
     * Sets a new fareDescription
     *
     * A description of the fare.
     *
     * @param string $fareDescription
     * @return self
     */
    public function setFareDescription($fareDescription)
    {
        $this->fareDescription = $fareDescription;

        return $this;
    }


}

