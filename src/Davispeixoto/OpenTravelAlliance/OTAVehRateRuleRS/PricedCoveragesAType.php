<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS;

/**
 * Class representing PricedCoveragesAType
 */
class PricedCoveragesAType
{

    /**
     * One specific vehicle coverage along with the corresponding charge.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CoveragePricedType[] $pricedCoverage
     */
    private $pricedCoverage = null;

    /**
     * Adds as pricedCoverage
     *
     * One specific vehicle coverage along with the corresponding charge.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CoveragePricedType $pricedCoverage
     */
    public function addToPricedCoverage(\Davispeixoto\OpenTravelAlliance\CoveragePricedType $pricedCoverage)
    {
        $this->pricedCoverage[] = $pricedCoverage;

        return $this;
    }

    /**
     * isset pricedCoverage
     *
     * One specific vehicle coverage along with the corresponding charge.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricedCoverage($index)
    {
        return isset($this->pricedCoverage[$index]);
    }

    /**
     * unset pricedCoverage
     *
     * One specific vehicle coverage along with the corresponding charge.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricedCoverage($index)
    {
        unset($this->pricedCoverage[$index]);
    }

    /**
     * Gets as pricedCoverage
     *
     * One specific vehicle coverage along with the corresponding charge.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CoveragePricedType[]
     */
    public function getPricedCoverage()
    {
        return $this->pricedCoverage;
    }

    /**
     * Sets a new pricedCoverage
     *
     * One specific vehicle coverage along with the corresponding charge.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CoveragePricedType[] $pricedCoverage
     * @return self
     */
    public function setPricedCoverage(array $pricedCoverage)
    {
        $this->pricedCoverage = $pricedCoverage;

        return $this;
    }


}

