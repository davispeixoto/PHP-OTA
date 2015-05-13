<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType;

/**
 * Class representing CoverageFeesAType
 */
class CoverageFeesAType
{

    /**
     * Provides information on one specific charge for this coverage, insurance or
     * waiver.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType[]
     * $coverageFee
     */
    private $coverageFee = null;

    /**
     * Adds as coverageFee
     *
     * Provides information on one specific charge for this coverage, insurance or
     * waiver.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType
     * $coverageFee
     */
    public function addToCoverageFee(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType $coverageFee
    ) {
        $this->coverageFee[] = $coverageFee;

        return $this;
    }

    /**
     * isset coverageFee
     *
     * Provides information on one specific charge for this coverage, insurance or
     * waiver.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCoverageFee($index)
    {
        return isset($this->coverageFee[$index]);
    }

    /**
     * unset coverageFee
     *
     * Provides information on one specific charge for this coverage, insurance or
     * waiver.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCoverageFee($index)
    {
        unset($this->coverageFee[$index]);
    }

    /**
     * Gets as coverageFee
     *
     * Provides information on one specific charge for this coverage, insurance or
     * waiver.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType[]
     */
    public function getCoverageFee()
    {
        return $this->coverageFee;
    }

    /**
     * Sets a new coverageFee
     *
     * Provides information on one specific charge for this coverage, insurance or
     * waiver.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType[]
     * $coverageFee
     * @return self
     */
    public function setCoverageFee(array $coverageFee)
    {
        $this->coverageFee = $coverageFee;

        return $this;
    }


}

