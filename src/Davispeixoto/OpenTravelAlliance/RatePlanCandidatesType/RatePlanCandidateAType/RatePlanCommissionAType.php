<?php

namespace Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType;

/**
 * Class representing RatePlanCommissionAType
 */
class RatePlanCommissionAType
{

    /**
     * Defines the maximum commission percentage requested.
     *
     * @property float $maxCommissionPercentage
     */
    private $maxCommissionPercentage = null;

    /**
     * Defines the minimum commission percentage requested.
     *
     * @property float $minCommissionPercentage
     */
    private $minCommissionPercentage = null;

    /**
     * When true, indicates the rate requested is commissionable.
     *
     * @property boolean $commissionableIndicator
     */
    private $commissionableIndicator = null;

    /**
     * Gets as maxCommissionPercentage
     *
     * Defines the maximum commission percentage requested.
     *
     * @return float
     */
    public function getMaxCommissionPercentage()
    {
        return $this->maxCommissionPercentage;
    }

    /**
     * Sets a new maxCommissionPercentage
     *
     * Defines the maximum commission percentage requested.
     *
     * @param float $maxCommissionPercentage
     * @return self
     */
    public function setMaxCommissionPercentage($maxCommissionPercentage)
    {
        $this->maxCommissionPercentage = $maxCommissionPercentage;

        return $this;
    }

    /**
     * Gets as minCommissionPercentage
     *
     * Defines the minimum commission percentage requested.
     *
     * @return float
     */
    public function getMinCommissionPercentage()
    {
        return $this->minCommissionPercentage;
    }

    /**
     * Sets a new minCommissionPercentage
     *
     * Defines the minimum commission percentage requested.
     *
     * @param float $minCommissionPercentage
     * @return self
     */
    public function setMinCommissionPercentage($minCommissionPercentage)
    {
        $this->minCommissionPercentage = $minCommissionPercentage;

        return $this;
    }

    /**
     * Gets as commissionableIndicator
     *
     * When true, indicates the rate requested is commissionable.
     *
     * @return boolean
     */
    public function getCommissionableIndicator()
    {
        return $this->commissionableIndicator;
    }

    /**
     * Sets a new commissionableIndicator
     *
     * When true, indicates the rate requested is commissionable.
     *
     * @param boolean $commissionableIndicator
     * @return self
     */
    public function setCommissionableIndicator($commissionableIndicator)
    {
        $this->commissionableIndicator = $commissionableIndicator;

        return $this;
    }


}

